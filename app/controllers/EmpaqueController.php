<?php

class EmpaqueController extends JoshController
{

    protected $empaque;

    public function __construct(Usuario $empaque)
    {
        $this->empaque = $empaque;
    }


    public function index()
    {
        $locales  = Local::lists('nom_local', 'id_local');
        $empaques = $this->empaque->all();

        return View::make('admin.empaques.index', compact('empaques'))->withLocales($locales);
    }

    public function create()
    {
        $regiones = Region::lists('str_descripcion', 'id_re');

        return View::make('admin.empaques.create', compact('regiones'));
    }

    public function store()
    {
        $input     = Input::all();
        $validator = Validator::make($input, Usuario::$rules, Usuario::$messages);

        if ($validator->passes()) {

            if (Input::has('frontend') && !Input::has('accept_terms')) {
                return Redirect::to('registry')
                    ->withInput()
                    ->with('message', 'Debe aceptar los terminos para poder continuar.');
            }

            if (Input::has('accept_terms') && Input::get('accept_terms') != 'yes') {
                return Redirect::to('registry')
                    ->withInput()
                    ->with('message', 'Aceptación de terminos de modo incorrecto.');
            }

            $pass = Input::has('pass') ? Input::get('pass') : '123456';

            $this->empaque = $this->empaque->create($input);

            $data = array(
                'name'     => Input::get('nombre'),
                'username' => $this->empaque->nombre_usuario,
                'password' => '---------'

            );

            \Mail::send('email.welcome', $data, function ($message) {
                $message->to(Input::get('email'), Input::get('nombre'))
                    ->cc(Config::get('admin.email'))
                    ->subject('Bienvenido a Gestión Empaques');
            });

            if (Input::has('frontend')) {
                return Redirect::to('/')
                    ->with('message', 'Ya estás registrado, pronto nos contactaremos contigo.')
                    ->with('type', 'success');
            }

            return Redirect::route('admin.empaques.index')
                ->with('message', 'Ya estás registrado, pronto nos contactaremos contigo.')
                ->with('type', 'success');
        }

        if (Input::has('frontend')) {
            return Redirect::to('registry')
                ->withInput()
                ->withErrors($validator)
                ->with('message', 'Debe validar los siguientes errores.');
        }

        return Redirect::route('admin.empaques.create')
            ->withInput()
            ->withErrors($validator)
            ->with('message', 'Debe validar los siguientes errores.');
    }

    public function search()
    {
        $empaques = null;

        if (Input::has('id_local') && Input::has('id_usuario')) {
            $empaques = Usuario::where('id_usuario', Input::get('id_usuario'))->where('id_local',
                (int)Input::get('id_local'))->get();
        } else {
            if (Input::has('id_local') && !Input::has('id_usuario')) {
                $empaques = Usuario::where('id_local', (int)Input::get('id_local'))->get();
            } else {
                if (!Input::has('id_local') && Input::has('id_usuario')) {
                    $empaques = Usuario::where('id_usuario', Input::get('id_usuario'))->get();
                } else {
                    $empaques = $this->empaque->all();
                }
            }
        }

        $locales = Local::lists('nom_local', 'id_local');

        return View::make('admin.empaques.index')->withEmpaques($empaques)->withLocales($locales)->withInput(Input::except('_token'));
    }

    public function show($id)
    {
        $empaque = $this->empaque->findOrFail($id);

        return View::make('admin.empaques.show', compact('empaque'));
    }

    public function edit($id)
    {
        $empaque = $this->empaque->find($id);
//        $empaque->fecha_nacimeinto = new MongoDate(strtotime($empaque->fecha_nacimiento->sec));

        if (is_null($empaque)) {
            return Redirect::route('admin.empaques.index');
        }

        return View::make('admin.empaques.edit', compact('empaque'));
    }

    public function update($id)
    {
        $input     = array_except(Input::all(), '_method');
        $validator = Validator::make($input, Usuario::$rules);

        if ($validator->passes()) {
            $empaque = $this->empaque->find($id);
            $empaque->update($input);

            return Redirect::route('admin.empaques.show', $id);
        }

        return Redirect::route('admin.empaques.edit', $id)
            ->withInput()
            ->withErrors($validator)
            ->with('message', 'There were validation errors.');
    }


    public function destroy($id)
    {
        $this->empaque->find($id)->delete();

        return Redirect::route('admin.empaques.index');
    }

    // TODO: Crear metodo para generar nombre usuario
    public static function generateUsername(Usuario $usuario)
    {
        return \Str::genUsername($usuario);
    }

    public function changestate($id)
    {
        $empaque = $this->empaque->find($id);

        switch ($empaque->bloqueado) {
            case 0:
                $empaque->bloqueado = 1;
                break;
            case 1:
                $empaque->bloqueado = 0;
                break;
        }
        $empaque->save();

        return Redirect::to('admin/empaques');
    }

    public function directMessage()
    {
        if (Auth::check()) {
            if (Session::has('directmessage.from')) {
                Session::forget('directmessage.from');
            }

            Session::push('directmessage.from', Auth::user()->email);

            if (Session::has('directmessage.to')) {
                Session::forget('directmessage.to');
            }

            Session::push('directmessage.to', Auth::user()->local->email);

            return View::make('frontend.directmessage')
                ->with('to', Auth::user()->local->email);
        }

        return Redirect::to('indexuser')
            ->withErrors($this->messageBag);
    }

    public function sendDirectMessage()
    {
        $validator = Validator::make(Input::all(), array(
            'subject' => 'required',
            'message' => 'required'
        ));

        if ($validator->fails()) {
            return Redirect::back()
                ->withInput()
                ->withErrors($validator)
                ->with('message', 'There were validation errors.');
        }

        $data = array(
            'user'    => Auth::user()->nombre,
            'subject' => Input::get('subject'),
            'text'    => e(Input::get('message'))
        );

        \Mail::send('emails.contact', $data, function ($message) {
            $message->to(Input::get('to'))
                ->subject(Input::get('subject'));
        });

        return Redirect::to('directmessage')
            ->with('message', 'Succesfullysss.');
    }
}