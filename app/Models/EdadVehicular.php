<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EdadVehicular extends Model
{
    use HasFactory;

    protected $table = 'edadvehicular';
    protected $primaryKey = 'IdEdadVehicular';
    public $timestamps = false;

    protected $fillable = [
        'Descripcion',
        'PeriodoUno',
        'PeriodoDos',
        'Status'
    ];

    public function vehiculos()
    {
        return $this->hasMany(Vehiculo::class, 'IdEdadVehicular');
    }
}
