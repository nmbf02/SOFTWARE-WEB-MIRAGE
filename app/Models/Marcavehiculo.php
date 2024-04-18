<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marcavehiculo extends Model
{
    use HasFactory;

    protected $table = 'marcavehiculos';

    protected $primaryKey = 'IdMarcaVehiculo';

    public $timestamps = false;

    protected $fillable = [
        'Descripcion',
        'IdGrupoVehiculo',
        'Status'
    ];

    protected $casts = [
        'Status' => 'boolean',
    ];

    public function grupoVehiculo()
    {
        return $this->belongsTo('App\Models\Grupovehiculo', 'IdGrupoVehiculo');
    }
}
