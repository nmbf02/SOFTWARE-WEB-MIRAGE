<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ModeloVehiculo
 * 
 * Representa el modelo de un vehículo en la aplicación.
 * 
 * @package App\Models
 */
class ModeloVehiculo extends Model
{
    use HasFactory;

    /**
     * El nombre de la tabla asociada al modelo.
     *
     * @var string
     */
    protected $table = 'modelovehiculos';

    /**
     * El nombre de la clave primaria del modelo.
     *
     * @var string
     */
    protected $primaryKey = 'IdModeloVehiculo';
    
    /**
     * Indica si el modelo debe tener timestamps.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * Los atributos que son asignables en masa.
     *
     * @var array
     */
    protected $fillable = [
        'IdMarcaVehiculo',
        'Descripcion',
        'Status'
    ];

    /**
     * Los atributos que deben ser convertidos a tipos específicos.
     *
     * @var array
     */
    protected $casts = [
        'Status' => 'boolean',
    ];

    /**
     * Define la relación con la marca del vehículo.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function marca()
    {
        return $this->belongsTo('app\Models\Marcavehiculo', 'IdMarcaVehiculo');
    }

}
