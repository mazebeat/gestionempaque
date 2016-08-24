<?php
use Jenssegers\Mongodb\Eloquent\SoftDeletingTrait as SoftDeletes;

class Local extends Moloquent
{
	protected $connection = 'mongodb';
	protected $collection = 'local';
	protected $primaryKey = "_id";
	protected $dates = ['fecha_hora', 'created_at', 'updated_at', 'deleted_at'];
	
	protected $fillable = array(
		'id_local',
		'nom_local',
		'gerente_local',
		'id_region',
		'id_provincia',
		'id_comuna',
		'direccion',
		'telefono',
		'email',
		'id_planilla',
		'dia_semana_toma_turno',
		'dia_semana_repechaje',
		'hora_toma_turno_inicio',
		'hora_toma_turno_final',
		'hora_repechaje_inicio',
		'hora_repechaje_final',
		'modo_planilla',
		'local_activo',
		'nombre_usuario',
		'fecha_hora',
	);
	public static $rules = array(
		'id_local'               => '',
		'nom_local'              => 'required|alpha_spaces',
		'gerente_local'          => 'required|alpha_spaces',
		'id_region'              => '',
		'id_provincia'           => '',
		'id_comuna'              => '',
		'direccion'              => '',
		'telefono'               => 'required',
		'email'                  => 'required|email',
		'id_planilla'            => '',
		'dia_semana_toma_turno'  => '',
		'dia_semana_repechaje'   => '',
		'hora_toma_turno_inicio' => '',
		'hora_toma_turno_final'  => '',
		'hora_repechaje_inicio'  => '',
		'hora_repechaje_final'   => '',
		'modo_planilla'          => '',
		'local_activo'           => '',
		'nombre_usuario'         => '',
		'fecha_hora'             => '',
	);
	
	public static function boot()
	{
		parent::boot();
		
		static::creating(function ($local) {
			$p              = new Planilla();
			$p->id_planilla = $p->lastID();
			$p->id_local    = $local->id_local;
			Local::first()->planilla()->save($p);
			dd('pass');
		});
		
		static::updating(function ($local) {
			$local->updated_at = Carbon::now();
		});
		
		static::deleting(function ($local) {
			
		});
	}
	
	public function usuarios()
	{
		return $this->hasMany('Usuario', 'id_local', 'id_local');
	}
	
	public function planilla()
	{
		return $this->hasOne('Planilla', 'id_local', 'id_local');
	}
//
//	public function horaTurnos()
//	{
//		return $this->hasMany('HoraTurno', 'id_planilla', 'id_planilla');
//	}
}