<?php

namespace App\Http\Controllers;

class consultarSuplidorController extends Controller
{
    /**
     * Muestra la página de consulta de subasta.
     *
     * @param string|null $datosuplidor Cualquier dato del suplidor
     * @return \Illuminate\Http\Response
     */
    public function consultarSuplidor($datosuplidor = null)
    {
        return view('components.cxp.consultar-suplidor', compact('datosuplidor'));
    }
}