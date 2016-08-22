<?php
use Jenssegers\Mongodb\Eloquent\SoftDeletingTrait as SoftDeletes;

class CasaEstudio extends Moloquent
{
	use SoftDeletes;
	protected $connection = 'mongodb';
	protected $collection = 'casa_estudio';
	protected $primaryKey = "_id";
	protected $dates = ['deleted_at'];
}