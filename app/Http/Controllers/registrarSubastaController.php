<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class registrarSubastaController extends Controller
{
    /**
     * Muestra el formulario para subastar un nuevo artículo.
     *
     * @return \Illuminate\View\View
     */
    public function registrarSubasta()
    {
        return view('components.subasta.subastar');
    }

}
