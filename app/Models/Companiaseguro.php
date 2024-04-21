<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Companiaseguro extends Model
{
    use HasFactory;

    /**
     * El nombre de la tabla asociada al modelo.
     *
     * @var string
     */
    protected $table = 'companiaseguro';

    /**
     * El nombre de la clave primaria del modelo.
     *
     * @var string
     */
    protected $primaryKey = 'IdCompaniaSeguro';

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
        'Nombre', 
        'Telefono', 
        'Email', 
        'IdSector', 
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
     * Define la relación con el modelo Sector.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function sector()
    {
        return $this->belongsTo('App\Models\Sector', 'IdSector');
    }
}
