<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipovehiculoconcesionario extends Model
{
    use HasFactory;
    protected $table = 'tipovehiculoconcesionario';
    protected $fillable = ['Descripcion','Status'];   
}