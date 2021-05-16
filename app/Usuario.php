<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table='usuario';
    protected $fillable = [
        'nombre',
        'apellido',
        'correo',
        'telefono'
    ];
    protected $guarded = ['id'];
    protected $primaryKey = 'id';
}