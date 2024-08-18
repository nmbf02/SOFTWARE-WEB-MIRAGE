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

    public function persona()
    {
        return $this->belongsTo('App\Models\persona', 'IdPersona');
    }

    public function consultarCliente()
    {
        $clientes = Cliente::with('persona', 'categoriaLicencia', 'tipoPersona', 'condicionFactura')->paginate(10);
        return view('clientes.index', compact('clientes'));
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

    public function mantenimientos()
    {
        return $this->hasMany(Mantenimiento::class, 'IdCliente');
    }

}
