<?php

namespace App\Http\Controllers;

class consultarRetroalimentacionController extends Controller
{
    /**
     * Muestra la página de consulta de retroalimentacion de cliente y respuestas por parte del empleado.
     *
     * @param string|null $casoretroalimentacion Caso de la retroalimentacion
     * @return \Illuminate\Http\Response
     */
    public function casoRetroalimentacion($casoretroalimentacion = null)
    {
        return view('components.reporte-analisis.consultar-retroalimentacion', compact('casoretroalimentacion'));
    }
}