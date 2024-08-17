<?php

namespace App\Http\Controllers;

use App\Models\Aceite;

use Illuminate\Http\Request;

class MaintenanceConfigurationController extends Controller
{
    public function index()
    {
        $TAceite = Aceite::all();

        return view('components.mantenimiento.configuracion-mantenimiento', [
            'TAceite' => $TAceite,
        ]);
    }
}
