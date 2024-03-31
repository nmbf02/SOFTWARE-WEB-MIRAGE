<?php

namespace App\Http\Controllers;

class registrarUsuarioController extends Controller
{
    /**
     * Muestra la página de consulta de subasta.
     *
     * 
     * 
     */
    public function registroUsuario()
    {
        return view('components.usuario.registro-usuario');
    }
}