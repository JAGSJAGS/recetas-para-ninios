<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Receta extends Model
{
    protected $table='receta';
    protected $fillable = [
        'id',
        'nombre',
        'ingredientes',
        'edad',
        'ingredientes_alternativos',
        'pasos'
    ];
    protected $guarded = ['id'];
    protected $primaryKey = 'id';
}
