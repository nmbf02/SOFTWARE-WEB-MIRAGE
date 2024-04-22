<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seguro extends Model
{
    use HasFactory;

    protected $table = 'seguro';  // Especificando el nombre de la tabla
    protected $primaryKey = 'IdSeguro';  // Definiendo la llave primaria

    protected $fillable = [
        'IdTipoSeguro',
        'IdCompaniaSeguro',
        'NumeroPoliza',
        'FechaInicio',
        'FechaVencimiento',
        'IdCoberturaSeguro',
        'IdEstadoPoliza',
        'IdCondicionSeguro',
        'TelefonoContacto',
        'EmailContacto',
        'Status'
    ];

    public function tipoSeguro()
    {
        return $this->belongsTo(TipoSeguro::class, 'IdTipoSeguro');  // Relación con el modelo TipoSeguro
    }

    public function companiaSeguro()
    {
        return $this->belongsTo(CompaniaSeguro::class, 'IdCompaniaSeguro');  // Relación con el modelo CompaniaSeguro
    }

    public function coberturaSeguro()
    {
        return $this->belongsTo(CoberturaSeguro::class, 'IdCoberturaSeguro');  // Relación con el modelo CoberturaSeguro
    }

    public function estadoPoliza()
    {
        return $this->belongsTo(EstadoPoliza::class, 'IdEstadoPoliza');  // Relación con el modelo EstadoPoliza
    }

    public function condicionSeguro()
    {
        return $this->belongsTo(CondicionSeguro::class, 'IdCondicionSeguro');  // Relación con el modelo CondicionSeguro
    }
}
