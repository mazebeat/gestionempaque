<?php

use Jenssegers\Mongodb\Eloquent\SoftDeletingTrait as SoftDeletes;

class TomaTurno extends Moloquent
{
    use SoftDeletes;
    protected $connection = 'mongodb';
    protected $collection = 'toma_turno';
    protected $primaryKey = '_id';
    protected $dates = ['fecha', 'fecha_hora', 'created_at', 'updated_at', 'deleted_at'];

    public function usuario()
    {
        return $this->belongsTo('Usuario');
    }

    public static function lastID()
    {
        return static::orderBy('hora_fecha', 'DESC')->first()->id_toma_turno + 1;
    }
}
