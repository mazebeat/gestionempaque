<?php
use Jenssegers\Mongodb\Eloquent\SoftDeletingTrait as SoftDeletes;

class Provincia extends Moloquent
{

    public static $rules   = [
        'id_pr'           => 'required',
        'id_re'           => 'required',
        'str_descripcion' => 'required',
        'num_comunas'     => 'required',
    ];
    protected     $guarded = [];
    use SoftDeletes;
    protected $connection = 'mongodb';
    protected $primaryKey = "_id";
    protected $collection = 'provincia_cl';
    protected $fillable   = [];
    protected $dates      = ['deleted_at'];
}