<?php

namespace App\Http\Controllers;

class consultarSugerenciaController extends Controller
{
    /**
     * @param string|null $SugerenciaMantenimiento
     * @return \Illuminate\Http\Response
     */
    public function consultarSugerencia($sugerencia = null)
    {
        return view('components.mantenimiento.sugerencia-mantenimiento', compact('sugerencia'));
    }
}
