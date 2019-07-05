<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipos_analisis extends Model
{
    protected $table = 'tipos_analisis';
    protected $fillable = ['nombre'];
}
