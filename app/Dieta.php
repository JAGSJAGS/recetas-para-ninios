<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dieta extends Model
{
    protected $table='dieta';
    protected $fillable = [
        'id',
        'name'
    ];
    protected $guarded = ['id'];
    protected $primaryKey = 'id';
}