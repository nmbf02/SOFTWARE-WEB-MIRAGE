<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
    use HasFactory;

    protected $table = 'provincia';  // Especificar el nombre de la tabla si no sigue la convención de nombres de Laravel
    public $timestamps = false;  // Desactivar actualización del campo created_at y updated_at
    protected $primaryKey = 'IdProvincia';  // Definir la llave primaria, en caso de que no sea 'id'

    protected $fillable = [
        'Descripcion',
        'IdPais',
        'Status'
    ];

    public function pais()
    {
        return $this->belongsTo('app\Models\Pais','IdPais');  // Definiendo la relación con el modelo Pais
    }
}