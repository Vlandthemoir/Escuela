<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'apellido_paterno',
        'apellido_materno',
        'fecha_nacimiento',
        'correo_electronico',
        'telefono',
        'tipo_usuario',
        'estatus',
    ];
    //sobreescritura de las convenciones
    protected $table = 'usuarios';
    /**
    * The name of the "created at" column.
    * @var string
    */
    const CREATED_AT = 'fecha_creado';
    /**
    * The name of the "updated at" column.
    * @var string
    */
    const UPDATED_AT = 'fecha_modificado';
}
