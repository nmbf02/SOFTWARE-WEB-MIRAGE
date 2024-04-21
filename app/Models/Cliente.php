<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cliente extends Model
{
    use HasFactory;

    /**
     * El nombre de la tabla asociada al modelo.
     *
     * @var string
     */
    protected $table = 'clientes';

    /**
     * El nombre de la clave primaria del modelo.
     *
     * @var string
     */
    protected $primaryKey = 'IdCliente';

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
        'IdPersona', 'IdTipoPersona', 'IdCategoriaLicencia', 'IdCondicionFactura', 'Status'
    ];

    /**
     * Define la relación con Persona.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function persona()
    {
        return $this->belongsTo('App\Models\Persona', 'IdPersona');
    }

    /**
     * Define la relación con TipoPersona.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tipoPersona()
    {
        return $this->belongsTo('App\Models\TipoPersona', 'IdTipoPersona');
    }

    /**
     * Define la relación con CategoriaLicencia.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function categoriaLicencia()
    {
        return $this->belongsTo('App\Models\CategoriaLicencia', 'IdCategoriaLicencia');
    }

    /**
     * Define la relación con CondicionFactura.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function condicionFactura()
    {
        return $this->belongsTo('App\Models\CondicionFactura', 'IdCondicionFactura');
    }
}
