<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Traccionvehiculo extends Model
{
    use HasFactory;

    protected $table = 'traccionvehiculos'; 

    protected $primaryKey = 'IdTraccionVehiculo'; 

    protected $fillable = ['Descripcion', 'Status'];

    protected $casts = [
        'Status' => 'boolean',
    ];
}
