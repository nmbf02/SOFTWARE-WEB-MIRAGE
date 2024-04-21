<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Metodopago extends Model
{
    use HasFactory;

    protected $table = 'metodopago';

    protected $primaryKey = 'IdMetodoPago';

    protected $fillable = [
        'Nombre',
        'Descripcion',
        'Status',
    ];
}