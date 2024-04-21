<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Colorvehiculo
 * 
 * Representa el modelo de un vehículo en la aplicación.
 * 
 * @package App\Models
 */
class Colorvehiculo extends Model
{
    use HasFactory;

    /**
     * El nombre de la tabla asociada al modelo.
     *
     * @var string
     */
    protected $table = 'colorvehiculos';

    /**
     * El nombre de la clave primaria del modelo.
     *
     * @var string
     */
    protected $primaryKey = 'IdColorVehiculo';
    
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
        'Descripcion',
        'IdAcabadoColorVehiculo',
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
     * Define la relación con el acabado del vehículo.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function marca()
    {
        return $this->belongsTo('app\Models\Acabadocolorvehiculo', 'IdAcabadoColorVehiculo');
    }

}
