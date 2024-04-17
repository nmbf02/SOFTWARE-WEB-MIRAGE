<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipoitbis extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tipoitbis'; // Make sure this is the name of your table

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'IdTipoItbis';

    /**
     * Indicates if the model should manage created_at and updated_at timestamps.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['Nombre', 'Descripcion', 'Porcentaje', 'Status'];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'Status' => 'boolean',
        'Porcentaje' => 'decimal:2'
    ];
}
