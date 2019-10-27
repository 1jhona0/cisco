<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    //

    protected $fillable = [
        'nombre','apellidos', 'ci','cu','celular','telefono','direccion', 'email'
    ];
    
    protected $table = 'alumnos';
    protected $primaryKey = 'id';
}
