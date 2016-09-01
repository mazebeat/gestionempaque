<?php

class FrontendController extends JoshController
{
	public function index()
	{
		// return View::make('frontend.indexuser');
		if(Auth::check() && Auth::user()->id_perfil == 1) {
			return Redirect::to('indexuser');
		}

		return View::make('admin.login2');
	}
	
	public function postSignin()
	{
		$inputs = Input::all();
		$remember = Input::has('remember') && Input::get('remember') == 'true' ? true : false;		
		
		if (Auth::attempt($inputs))
		{
		    return Redirect::to('indexuser');
		}

		return Redirect::back()->with('success', Lang::get('auth/message.signin.fail'));
	}

	public function indexUser() {
 		return View::make('frontend.indexuser');
	}
	
	public function postSignin2()
	{
		$validator = Validator::make(Input::all(),
			array('email' => 'required|email', 'password' => 'required|between:3,32',));
		if ($validator->fails()) {
			return Redirect::back()->withInput()->withErrors($validator);
		}
		
		try {
			Sentry::authenticate(Input::only('email', 'password'), Input::get('remember-me', 0));
			Session::forget('loginRedirect');
			
			return Redirect::to("/calendar")->with('success', Lang::get('auth/message.signin.success'));
		} catch (Cartalyst\Sentry\Users\UserNotFoundException $e) {
			$this->messageBag->add('email', Lang::get('auth/message.account_not_found'));
		} catch (Cartalyst\Sentry\Users\UserNotActivatedException $e) {
			$this->messageBag->add('email', Lang::get('auth/message.account_not_activated'));
		} catch (Cartalyst\Sentry\Throttling\UserSuspendedException $e) {
			$this->messageBag->add('email', Lang::get('auth/message.account_suspended'));
		} catch (Cartalyst\Sentry\Throttling\UserBannedException $e) {
			$this->messageBag->add('email', Lang::get('auth/message.account_banned'));
		}
		
		return Redirect::back()->withInput()->withErrors($this->messageBag);
	}
	
	/**
	 * Logout page.
	 *
	 * @return Redirect
	 */
	public function getLogout()
	{
		// Log the user out
		Sentry::logout();
		
		// Redirect to the users page
		return Redirect::to('/')->with('success', 'You have successfully logged out!');
	}
	
	public function showNormas()
	{
		return View::make('frontend.normas');
	}
	
}