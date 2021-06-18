<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DietaReceta extends Model
{
    protected $table='dietaReceta';
    protected $fillable = [
        'id',
        'name',
        'receta_id',
        'dieta_id',
        'dia'
    ];
    protected $guarded = ['id'];
    protected $primaryKey = 'id';
}
