<?php

class AuthController extends JoshController
{
	/**
	 * Account sign in.
	 *
	 * @return View
	 */
	public function getSignin()
	{
        if (\Auth::check()) {
            return \Redirect::route('dashboard');
		}

		return View::make('admin.login');
	}

	/**
	 * Account sign in form processing.
	 *
	 * @return Redirect
	 */
	public function postSignin()
	{
		$rules = array(
            'email'    => 'required|email|exists:usuario,email',
            'password' => 'required|between:3,32',
		);

        try {
            $validator = \Validator::make(\Input::all(), $rules);

            if ($validator->fails()) {
                return Redirect::back()->withInput()->withErrors($validator);
            }


            if (\Auth::attempt(\Input::only('email', 'password'), \Input::get('remember-me', false))) {
                return \Redirect::route('dashboard');
                // return \Redirect::to("/admin")->with('success', \Lang::get('auth/message.signin.success'));
			}

            return \Redirect::to("/admin")->with('success', \Lang::get('auth/message.signin.error'));
        } catch (\Exception $e) {
			$this->messageBag->add('error', $e->getMessage());
            \Log::error($e->getMessage());
		}

        return \Redirect::back()->withInput()->withErrors($this->messageBag);
	}

	/**
	 * Account sign up form processing.
	 *
	 * @return Redirect
	 */
	public function postSignup()
	{
		// Declare the rules for the form validation
		$rules = array(
			'first_name'       => 'required|min:3',
			'last_name'        => 'required|min:3',
			'email'            => 'required|email|unique:users',
			'email_confirm'    => 'required|email|same:email',
			'password'         => 'required|between:3,32',
			'password_confirm' => 'required|same:password',
		);

		// Create a new validator instance from our validation rules
		$validator = Validator::make(Input::all(), $rules);

		// If validation fails, we'll exit the operation now.
		if ($validator->fails()) {
			// Ooops.. something went wrong
			return Redirect::to(URL::previous() . '#toregister')->withInput()->withErrors($validator);
		}

		try {
			// Register the user
			$user = Sentry::register(array(
				'first_name' => Input::get('first_name'),
				'last_name'  => Input::get('last_name'),
				'email'      => Input::get('email'),
				'password'   => Input::get('password'),
				'activated'  => 1 // make it 0 if you don't want to activate user on registration
			));

			//add user to 'User' group
			$group = Sentry::findGroupByName('User');
			$user->addGroup($group);


			/*
			//un-comment below code incase if user have to activate manually

			// Data to be used on the email view
			$data = array(
				'user'          => $user,
				'activationUrl' => URL::route('activate', $user->getActivationCode()),
			);

			// Send the activation code through email
			Mail::send('emails.register-activate', $data, function ($m) use ($user) {
				$m->to($user->email, $user->first_name . ' ' . $user->last_name);
				$m->subject('Welcome ' . $user->first_name);
			});

			//Redirect to login page
			return Redirect::to("admin/login")->with('success', Lang::get('auth/message.signup.success'));

			*/

			// login user automatically


			// Log the user in
			Sentry::login($user, false);

			// Redirect to the home page with success menu
			return Redirect::route("dashboard")->with('success', Lang::get('auth/message.signup.success'));

		} catch (Cartalyst\Sentry\Users\UserExistsException $e) {
			$this->messageBag->add('email', Lang::get('auth/message.account_already_exists'));
		}

		// Ooops.. something went wrong
		return Redirect::back()->withInput()->withErrors($this->messageBag);
	}

	/**
	 * User account activation page.
	 *
	 * @param string $actvationCode
	 *
	 * @return
	 */
	public function getActivate($activationCode = null)
	{
		// Is the user logged in?
		if (Sentry::check()) {
			return Redirect::route('dashboard');
		}

		try {
			// Get the user we are trying to activate
			$user = Sentry::getUserProvider()->findByActivationCode($activationCode);

			// Try to activate this user account
			if ($user->attemptActivation($activationCode)) {
				// Redirect to the login page
				return Redirect::route('signin')->with('success', Lang::get('auth/message.activate.success'));
			}

			// The activation failed.
			$error = Lang::get('auth/message.activate.error');
		} catch (Cartalyst\Sentry\Users\UserNotFoundException $e) {
			$error = Lang::get('auth/message.activate.error');
		}

		// Ooops.. something went wrong
		return Redirect::route('signin')->with('error', $error);
	}

	/**
	 * Forgot password form processing page.
	 *
	 * @return Redirect
	 */
	public function postForgotPassword()
	{
		// Declare the rules for the validator
		$rules = array(
			'email' => 'required|email',
		);

		// Create a new validator instance from our dynamic rules
		$validator = Validator::make(Input::all(), $rules);

		// If validation fails, we'll exit the operation now.
		if ($validator->fails()) {
			// Ooops.. something went wrong
			return Redirect::to(URL::previous() . '#toforgot')->withInput()->withErrors($validator);
		}

		try {
			// Get the user password recovery code
			$user = Sentry::getUserProvider()->findByLogin(Input::get('email'));

			// Data to be used on the email view
			$data = array(
				'user'              => $user,
				'forgotPasswordUrl' => URL::route('forgot-password-confirm', $user->getResetPasswordCode()),
			);

			// Send the activation code through email
			Mail::send('emails.forgot-password', $data, function ($m) use ($user) {
				$m->to($user->email, $user->first_name . ' ' . $user->last_name);
				$m->subject('Account Password Recovery');
			});
		} catch (Cartalyst\Sentry\Users\UserNotFoundException $e) {
			// Even though the email was not found, we will pretend
			// we have sent the password reset code through email,
			// this is a security measure against hackers.
		}

		//  Redirect to the forgot password
		return Redirect::to(URL::previous() . '#toforgot')->with('success',
			Lang::get('auth/message.forgot-password.success'));
	}

	/**
	 * Forgot Password Confirmation page.
	 *
	 * @param  string $passwordResetCode
	 *
	 * @return View
	 */
	public function getForgotPasswordConfirm($passwordResetCode = null)
	{
		try {
			// Find the user using the password reset code
			$user = Sentry::getUserProvider()->findByResetPasswordCode($passwordResetCode);
		} catch (Cartalyst\Sentry\Users\UserNotFoundException $e) {
			// Redirect to the forgot password page
			return Redirect::route('forgot-password')->with('error', Lang::get('auth/message.account_not_found'));
		}

		// Show the page
		return View::make('admin.auth.forgot-password-confirm');
	}

	/**
	 * Forgot Password Confirmation form processing page.
	 *
	 * @param  string $passwordResetCode
	 *
	 * @return Redirect
	 */
	public function postForgotPasswordConfirm($passwordResetCode = null)
	{
		// Declare the rules for the form validation
		$rules = array(
			'password'         => 'required|between:3,32',
			'password_confirm' => 'required|same:password',
		);

		// Create a new validator instance from our dynamic rules
		$validator = Validator::make(Input::all(), $rules);

		// If validation fails, we'll exit the operation now.
		if ($validator->fails()) {
			// Ooops.. something went wrong
			return Redirect::route('forgot-password-confirm', $passwordResetCode)->withInput()->withErrors($validator);
		}

		try {
			// Find the user using the password reset code
			$user = Sentry::getUserProvider()->findByResetPasswordCode($passwordResetCode);

			// Attempt to reset the user password
			if ($user->attemptResetPassword($passwordResetCode, Input::get('password'))) {
				// Password successfully reseted
				return Redirect::route('signin')->with('success',
					Lang::get('auth/message.forgot-password-confirm.success'));
			} else {
				// Ooops.. something went wrong
				return Redirect::route('signin')->with('error',
					Lang::get('auth/message.forgot-password-confirm.error'));
			}
		} catch (Cartalyst\Sentry\Users\UserNotFoundException $e) {
			// Redirect to the forgot password page
			return Redirect::route('forgot-password')->with('error', Lang::get('auth/message.account_not_found'));
		}
	}

	/**
	 * Logout page.
	 *
	 * @return Redirect
	 */
	public function getLogout()
	{
		// Log the user out
        \Auth::logout();

		// Redirect to the users page
        return \Redirect::to('admin/signin')->with('success', 'You have successfully logged out!');
	}

	/**
	 * Account sign up form processing for register2 page
	 *
	 * @return Redirect
	 */
	public function postRegister2()
	{
		// Declare the rules for the form validation
		$rules = array(
			'first_name'       => 'required|min:3',
			'last_name'        => 'required|min:3',
			'email'            => 'required|email|unique:users',
			'email_confirm'    => 'required|email|same:email',
			'password'         => 'required|between:3,32',
			'password_confirm' => 'required|same:password',
			'terms'            => 'accepted',
		);

		// Create a new validator instance from our validation rules
		$validator = Validator::make(Input::all(), $rules);

		// If validation fails, we'll exit the operation now.
		if ($validator->fails()) {
			// Ooops.. something went wrong
			return Redirect::back()->withInput()->withErrors($validator);
		}
		try {
			// Register the user
			$user = Sentry::register(array(
				'first_name' => Input::get('first_name'),
				'last_name'  => Input::get('last_name'),
				'email'      => Input::get('email'),
				'password'   => Input::get('password'),
				'activated'  => 1 // make it 0 if you don't want to activate user on registration
			));

			//add user to 'User' group
			$group = Sentry::findGroupByName('User');
			$user->addGroup($group);


			/*
			//un-comment below code incase if user have to activate manually

			// Data to be used on the email view
			$data = array(
				'user'          => $user,
				'activationUrl' => URL::route('activate', $user->getActivationCode()),
			);

			// Send the activation code through email
			Mail::send('emails.register-activate', $data, function ($m) use ($user) {
				$m->to($user->email, $user->first_name . ' ' . $user->last_name);
				$m->subject('Welcome ' . $user->first_name);
			});

			//Redirect to login page
			return Redirect::to("admin/login")->with('success', Lang::get('auth/message.signup.success'));

			*/

			// login user automatically


			// Log the user in
			Sentry::login($user, false);

			// Redirect to the home page with success menu
			return Redirect::route("dashboard")->with('success', Lang::get('auth/message.signup.success'));

		} catch (Cartalyst\Sentry\Users\UserExistsException $e) {
			$this->messageBag->add('email', Lang::get('auth/message.account_already_exists'));
		}

		// Ooops.. something went wrong
		return Redirect::back()->withInput()->withErrors($this->messageBag);
	}

}
