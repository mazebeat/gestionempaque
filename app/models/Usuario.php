<?php
use Jenssegers\Mongodb\Eloquent\SoftDeletingTrait as SoftDeletes;

class Usuario extends Moloquent
{
	use SoftDeletes;
	public static $rules      = array(
		'id_usuario'       => 'required',
		'nombre'           => 'required',
		'ape_paterno'      => 'required',
		'ape_materno'      => 'required',
		'id_region'        => 'required',
		'id_provincia'     => 'required',
		'id_comuna'        => 'required',
		'direccion'        => 'required',
		'telefono'         => 'required',
		'email'            => 'required',
		'sexo'             => 'required',
		'fecha_nacimiento' => 'required',
		'id_casa_estudio'  => 'required',
		'id_perfil'        => 'required',
		'id_local'         => 'required',
		'bloqueado'        => 'required',
		'nombre_usuario'   => 'required',
		'fecha_hora'       => 'required'
	);
	protected     $connection = 'mongodb';
	protected     $collection = 'usuario';
	protected     $primaryKey = "_id";
	protected     $dates      = ['deleted_at'];

	public static function boot()
	{
		parent::boot();

		static::creating(function($usuario)
		{
			// TODO: Insertar modelo Faltas despues de crear usuario
			$f = new Falta();
			$f->id_faltas = Falta::lastID();
			$f->id_usuario = $usuario->id_usuario;
			$f->falta_leve = 0;
			$f->falta_media = 0;
			$f->falta_grave = 0;
			$f->nombre_usuario = Auth::user()->nombre;
			$f->fecha_hora = Carbon::now();
			$f->save();
		});

		static::updating(function($usuario)
		{
			$usuario->updated_at = Carbon::now();
		});
	}

	public function faltas()
	{
		return $this->hasOne('Falta', 'id_usuario', 'id_usuario');
	}

	public function turnos()
	{
		return $this->hasMany('TomaTurno', 'id_usuario', 'id_usuario');
	}


	public function lastTurn()
	{
		$last = $this->turnos()->orderBy('fecha', 'DESC')->first();

		if (isset($last)) {
			$cDate = Carbon::parse(date('Y-M-d h:i:s', $last->fecha->sec));

			return $cDate->diffInDays();
		}

		return '?';
	}

	public function state()
	{
		if ($this->bloqueado) {
			return "Bloqueado";
		}

		return "Activo";
	}
}