<?php
use Jenssegers\Mongodb\Eloquent\SoftDeletingTrait as SoftDeletes;

class HoraTurno extends Moloquent
{
	use SoftDeletes;
	protected $connection = 'mongodb';
	protected $collection = 'hora_turno';
	protected $primaryKey = '_id';
	protected $dates = ['deleted_at'];
	protected $fillable = [
		'id_planilla',
		'id_hora_turno',
		'dia_semana',
		'hora_turno_inicio',
		'hora_turno_fin',
		'max_empaques',
		'nombre_usuario',
	];
	
	public function planilla()
	{
		return $this->belongsTo('Planilla', 'id_planilla', 'id_planilla');
	}
}