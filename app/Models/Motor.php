<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Motor extends Model
{
    use HasFactory;

    protected $table = 'Motor';
    protected $primaryKey = 'IdMotor';
    public $timestamps = true;

    protected $fillable = [
        'Descripcion',
        'Status',
    ];

    public function vehiculos()
    {
        return $this->hasMany(Vehiculo::class, 'IdMotor');
    }

    public function servicios()
    {
        return $this->belongsToMany(Servicio::class, 'ServicioMotor', 'IdMotor', 'IdServicio');
    }

}
