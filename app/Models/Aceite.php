<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aceite extends Model
{
    use HasFactory;

    protected $table = 'Aceite';
    protected $primaryKey = 'IdAceite';

    protected $fillable = [
        'Descripcion',
        'Status',
    ];
}
