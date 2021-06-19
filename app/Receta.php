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
        'pasos',
        'ruta_imagen',
        'tipo',
        'calorias'
    ];
    protected $guarded = ['id'];
    protected $primaryKey = 'id';

    public function dietas(){

        return $this->belongsToMany(Dieta::class, 'dietaReceta', 'receta_id', 'dieta_id');
    }
}

