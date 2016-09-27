<?php
use Jenssegers\Mongodb\Eloquent\SoftDeletingTrait as SoftDeletes;

class Norma extends Moloquent
{

    use SoftDeletes;
    public static $rules      = [
        'id_norma'       => '', // 1,
        'id_local'       => 'required', // 1,
        'nom_norma'      => 'required', // 'NORMA',
        'ruta_norma'     => '', // '/normas/norma1.pdf',
        'nombre_usuario' => '', // 'SNT',
        'fecha_hora'     => '', // ISODate('2016-11-05T21:25:00.000Z')
    ];
    protected     $connection = 'mongodb';
    protected     $collection = 'norma';
    protected     $primaryKey = "_id";
    protected     $dates      = ['deleted_at', 'fecha_hora'];
    protected     $fillable   = [
        'id_norma',
        'id_local',
        'nom_norma',
        'ruta_norma',
        'nombre_usuario',
        'fecha_hora'
    ];
}