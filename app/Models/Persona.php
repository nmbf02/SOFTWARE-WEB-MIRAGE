<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * The Persona model represents a person in the application.
 *
 * It extends the Eloquent Model class and uses the HasFactory trait.
 * The model is associated with the 'persona' table in the database.
 * The primary key is 'IdPersona' and the model does not use timestamps.
 *
 * The fillable array specifies the attributes that are mass assignable.
 *
 * The model has a one-to-one relationship with the Cliente model, based on the 'IdPersona' foreign key.
 */
class Persona extends Model
{
    use HasFactory;

    protected $table = 'persona';
    protected $primaryKey = 'IdPersona';
    public $timestamps = false;

    protected $fillable = [
        'Nombre', 
        'Apellido', 
        'FechaNacimiento', 
        'Telefono', 
        'Email', 
        'IdSector', 
        'Casa', 
        'Calle', 
        'IdCuenta', 
        'IdSeguro', 
        'Status'
    ];

    /**
     * Get the associated Cliente model.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cliente()
    {
        return $this->hasOne(Cliente::class, 'IdPersona');
    }
    public function Sector()
    {
        return $this->hasOne(Sector::class, 'IdSector');
    }
}
