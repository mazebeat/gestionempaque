<?php
use Jenssegers\Mongodb\Eloquent\SoftDeletingTrait as SoftDeletes;

class Usuario extends Moloquent
{
    use SoftDeletes;
    public static $rules = array(
        'id_usuario' => 'required|unique:usuario,id_usuario',
        'nombre' => 'required|alpha_spaces',
        'ape_paterno' => 'required|alpha_spaces',
        'ape_materno' => 'required|alpha_spaces',
        'id_region' => '',
        'id_provincia' => '',
        'id_comuna' => '',
        'direccion' => '',
        'telefono' => '',
        'email' => 'required|email',
        'sexo' => 'in:N,M,F',
        'fecha_nacimiento' => 'required|date|date_format:Y-m-d',
        'id_casa_estudio' => '',
        'id_perfil' => '',
        'id_local' => '',
        'bloqueado' => 'boolean',
        'nombre_usuario' => 'unique:usuario,nombre_usuario',
        'fecha_hora' => '',
        'pass' => 'min:3',
        'password_confirmation' => 'min:3|same:pass',
        'accept_terms' => 'accepted'
    );

    public static $messages = array(
        'id_usuario.required' => 'El campo RUN es obligatorio',
        'id_usuario.unique' => 'RUN ya ha sido registrado.',
        'accept_terms.accepted' => 'Debe aceptar los terminos y condiciones'
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
            $f->id_faltas = Falta::lastID();
            $f->id_usuario = $usuario->id_usuario;
            $f->falta_leve = 0;
            $f->falta_media = 0;
            $f->falta_grave = 0;
            // TODO: cambiar cuando esté listo el login
            // $f->nombre_usuario = Auth::user()->nombre;
            $f->nombre_usuario = $usuario->nombre_usuario;
            $f->fecha_hora = Carbon::now();
            $f->save();
//            $usuario()->faltas()->save($f);
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