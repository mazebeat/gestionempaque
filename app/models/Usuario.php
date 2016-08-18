<?php
use Jenssegers\Mongodb\Eloquent\SoftDeletingTrait as SoftDeletes;

class Usuario extends Moloquent
{
	use SoftDeletes;
	protected $connection = 'mongodb';
	protected $collection = 'usuario';
	protected $primaryKey = "id_usuario";
	protected $dates      = ['deleted_at'];

	public function faltas()
	{
		return $this->hasOne('Falta', 'id_usuario');
	}

	public function turnos()
	{
		return $this->hasMany('TomaTurno', 'id_usuario');
	}

	public function lastTurn() {
		$last = $this->turnos()->orderBy('fecha', 'DESC')->first();
		$cDate = Carbon::parse(date('Y-M-d h:i:s', $last->fecha->sec));
		return $cDate->diffInDays();
	}

	public function state() {
		if($this->bloqueado) {
			return "Bloqueado";
		}

		return "Activo";
	}
}