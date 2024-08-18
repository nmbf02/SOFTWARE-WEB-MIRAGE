<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConfiguracionAceite extends Model
{
    use HasFactory;

    protected $table = 'ConfiguracionAceite';
    protected $primaryKey = 'IdConfiguracionAceite';
    public $timestamps = true;

    protected $fillable = [
        'Descripcion',
        'IdAceite',
        'Kilometraje',
        'LapsoDeTiempo',
        'Precio',
        'Status',
    ];


    public function aceite()
    {
        return $this->hasMany(Vehiculo::class, 'IdAceite');
    }

    public function vehiculos()
    {
        return $this->hasMany(Vehiculo::class, 'IdConfiguracionAceite');
    }
}
