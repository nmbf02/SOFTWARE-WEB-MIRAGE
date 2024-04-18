<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Condicionfactura extends Model
{
    use HasFactory;

    protected $table = 'condicionfactura';

    protected $primaryKey = 'IdCondicionFactura';

    protected $fillable = [
        'Descripcion',
        'CantidadDias',
        'Status',
    ];
}