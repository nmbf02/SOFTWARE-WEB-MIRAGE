<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estadocompra extends Model
{
    use HasFactory;
    protected $table = 'estadocompra';
    protected $fillable = ['descripcion','status'];                 
}
