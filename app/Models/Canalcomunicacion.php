<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Canalcomunicacion extends Model
{
    use HasFactory;

    protected $table = 'canalcomunicacion';

    protected $primaryKey = 'IdCanalComunicacion'; 

    protected $fillable = [
        'descripcion',
        'status',
    ];
}