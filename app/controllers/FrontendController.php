<?php

class FrontendController extends JoshController
{
    public function index()
    {
        if (Auth::check() && in_array(Auth::user()->id_perfil, array(3, 4))) {
            return Redirect::to('indexuser');
        }

        return View::make('admin.login2');
    }

    public function postSignin()
    {
        $rules = array(
            'email'    => 'required|email|exists:usuario,email',
            'password' => 'required|between:3,32',
        );

        $validator = Validator::make(Input::all(), $rules);

        try {
            if ($validator->fails()) {
                return Redirect::back()
                    ->withInput()
                    ->withErrors($validator);
            }

            if (Auth::attempt(Input::only('email', 'password'), Input::get('remember', false))) {
                return Redirect::to('indexuser');
            }
        } catch (Exception $e) {
            $this->messageBag->add('error', $e->getMessage());
            Log::error($e->getMessage());
        }

//        return Redirect::back()->with('success', Lang::get('auth/message.signin.fail'));
        return \Redirect::back()
            ->withInput()
            ->withErrors($this->messageBag);
    }

    public function indexUser()
    {
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
        } catch (Exception $e) {
            $this->messageBag->add('error', $e->getMessage());
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
        Auth::logout();

        // Redirect to the users page
        return Redirect::to('/')->with('success', 'You have successfully logged out!');
    }

    public function showNormas()
    {
        return View::make('frontend.normas');
    }

}