<?php
use Illuminate\Auth\Reminders\RemindableInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\UserTrait;
use Jenssegers\Mongodb\Eloquent\SoftDeletingTrait as SoftDeletes;

class Usuario extends Moloquent implements UserInterface, RemindableInterface
{
	use SoftDeletes, UserTrait, RemindableTrait;
	public static $rules = array(
		'id_usuario'            => 'required|unique:usuario,id_usuario',
		'nombre'                => 'required|alpha_spaces',
		'ape_paterno'           => 'required|alpha_spaces',
		'ape_materno'           => 'required|alpha_spaces',
		'id_region'             => '',
		'id_provincia'          => '',
		'id_comuna'             => '',
		'direccion'             => '',
		'telefono'              => '',
		'email'                 => 'required|email|unique:usuario,email',
		'sexo'                  => 'in:N,M,F',
		'fecha_nacimiento'      => 'required|date|date_format:Y-m-d',
		'id_casa_estudio'       => '',
		'id_perfil'             => '',
		'id_local'              => '',
		'bloqueado'             => 'boolean',
		'nombre_usuario'        => '',
		'fecha_hora'            => '',
		'pass'                  => 'min:3',
		'password_confirmation' => 'min:3|same:pass',
		'accept_terms'          => '',
	);
	public static $messages = array(
		'id_usuario.required'   => 'El campo RUN es obligatorio',
		'id_usuario.unique'     => 'RUN ya ha sido registrado.',
		'accept_terms.accepted' => 'Debe aceptar los terminos y condicioness',
	);
	protected $fillable = array(
		'id_usuario',
		'nombre',
		'ape_paterno',
		'ape_materno',
		'id_region',
		'id_provincia',
		'id_comuna',
		'direccion',
		'telefono',
		'email',
		'sexo',
		'fecha_nacimiento',
		'id_casa_estudio',
		'id_perfil',
		'id_local',
		'bloqueado',
		'nombre_usuario',
		'fecha_hora',
	);
	protected $connection = 'mongodb';
	protected $collection = 'usuario';
	protected $primaryKey = "_id";
	protected $dates = ['fecha_hora', 'created_at', 'updated_at', 'deleted_at'];

	public static function boot()
	{
		parent::boot();

		static::creating(function ($usuario) {

			if (!isset($usuario->nombre_usuario)) {
				$usuario->nombre_usuario = EmpaqueController::generateUsername($usuario);
			}
			if (!isset($usuario->fecha_hora)) {
				$usuario->fecha_hora = Carbon::now();
			}
			$f = new Falta();
			$f->create(array(
				'id_faltas'      => $f->lastID(),
				'id_usuario'     => $usuario->id_usuario,
				'falta_leve'     => 0,
				'falta_media'    => 0,
				'falta_grave'    => 0,
				'nombre_usuario' => Auth::user()->nombre,
				'fecha_hora'     => Carbon::now(),
			));
		});

		static::updating(function ($usuario) {
			$usuario->updated_at = Carbon::now();
		});

		static::deleting(function ($usuario) {
			$usuario->faltas->delete();
		});
	}

	public function getAuthIdentifier()
	{
		return $this->getKey();
	}

	public function getAuthPassword()
	{
		$password = Pass::where('id_usuario', $this->id_usuario)->first();
//		dd($password);
		if ($password) {
			return $password->pass;
		}
		// return $this->password;
	}

	public function getReminderEmail()
	{
		return $this->email;
	}

	public function getRememberToken()
	{
		return $this->remember_token;
	}

	public function setRememberToken($value)
	{
		$this->remember_token = $value;
	}

	public function getRememberTokenName()
	{
		return 'remember_token';
	}

	public function getFechaNacimientoAttribute($value)
	{
		// TODO: limpiar código
//        dd($value);
//        if (isset($value->sec)) {
//            return date('Y-m-d', $value->sec);
//        }

//        $m = new ModelFunction();
//        return date($m->fromDateTime($value));
		return date($value);
	}

	public function falta()
	{
		return $this->hasOne('Falta', 'id_usuario', 'id_usuario');
	}

	public function local()
	{
		return $this->belongsTo('Local', 'id_local', 'id_local');
	}

	public function horaTurnos()
	{
		return $this->hasMany('TomaTurno', 'id_usuario', 'id_usuario');
	}

	public function lastTurn()
	{
        $last = $this->horaTurnos()->orderBy('fecha', 'DESC')->first();

		if (isset($last)) {
            $cDate = Carbon::parse($last->fecha);

			return $cDate->diffInDays();
		}

		return '?';
	}

	public function faltasHtml()
	{
		if (is_null($this->faltas)) {
			$f = new Falta();
			$f->getDefault($this->id_usuario);

			return '[<a href="#" data-toggle="tooltip" data-placement="top" title="Falta Leve">0</a>][<a href="#" data-toggle="tooltip" data-placement="top" title="Falta Media">0</a>][<a href="#" data-toggle="tooltip" data-placement="top" title="Falta Grave">0</a>]';
		}

		return $this->faltas->toHtml();
	}

	public function state()
	{
		if ($this->bloqueado) {
			return "Bloqueado";
		}

		return "Activo";
	}
}