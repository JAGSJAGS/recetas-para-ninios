<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dieta extends Model
{
    protected $table='dieta';
    protected $fillable = [
        'id',
        'name',
        'edad'
    ];
    protected $guarded = ['id'];
    protected $primaryKey = 'id';

    public function recetas(){

        return $this->belongsToMany(Receta::class, 'dietaReceta', 'dieta_id', 'receta_id');
    }
}
