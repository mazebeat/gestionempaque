<?php
use Jenssegers\Mongodb\Eloquent\SoftDeletingTrait as SoftDeletes;

class Usuario extends Moloquent
{
    use SoftDeletes;
    public static $rules = array(
        'id_usuario' => 'required',
        'nombre' => 'required|alpha_spaces',
        'ape_paterno' => 'required|alpha_spaces',
        'ape_materno' => 'required|alpha_spaces',
        'id_region' => 'required',
        'id_provincia' => 'required',
        'id_comuna' => 'required',
        'direccion' => 'required',
        'telefono' => 'required',
        'email' => 'required|email',
        'sexo' => '',
        'fecha_nacimiento' => 'required|date',
        'id_casa_estudio' => 'required',
        'id_perfil' => 'required',
        'id_local' => 'required',
        // 'bloqueado'        => '',
        'nombre_usuario' => 'required',
        'fecha_hora' => ''
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
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];


    public static function boot()
    {
        parent::boot();

        static::creating(function ($usuario) {

            dd($usuario);
            if(isset($usuario->nombre_usuario)) {
                $usuario->nombre_usuario = EmpaqueController::generateUsername($usuario);
            }

            $f = new Falta();
            $f->id_faltas = Falta::lastID();
            $f->id_usuario = $usuario->id_usuario;
            $f->falta_leve = 0;
            $f->falta_media = 0;
            $f->falta_grave = 0;
            // TODO: cambiar cuando esté listo el login
            // $f->nombre_usuario = Auth::user()->nombre;
            $f->nombre_usuario = 'SNT';
            $f->fecha_hora = Carbon::now();
            $f->save();
        });

        static::updating(function ($usuario) {
            $usuario->updated_at = Carbon::now();
        });

        static::deleting(function ($usuario) {
            $usuario->faltas->delete();
        });
    }

    public function getFechaNacimientoAttribute($value)
    {
//        dd($value);
//        if (isset($value->sec)) {
//            return date('Y-m-d', $value->sec);
//        }

//        $m = new ModelFunction();
//        return date($m->fromDateTime($value));
        return date($value);
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