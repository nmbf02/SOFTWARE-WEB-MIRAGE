<?php

namespace App\Http\Controllers;

use App\Models\Seguro;
use App\Models\Sector;
use App\Models\TipoPersona;
use App\Models\CategoriaLicencia;
use App\Models\CondicionFactura;

use Illuminate\Http\Request;

class CustomerRegisterController extends Controller
{
    public function index(Request $request)
    {
        // dd($request->all());
        $seguroPersona = Seguro::all();
        $sectorPersona = Sector::all();
        $clasificaionCliente = TipoPersona::all();
        $categoriaCliente = CategoriaLicencia::all();
        $condicionFactura = CondicionFactura::all();

        return view('components.vehiculo.registrovehiculo', [
            'seguroPersona' => $seguroPersona,
            'sectorPersona' => $sectorPersona,
            'clasificaionCliente' => $clasificaionCliente,
            'categoriaCliente' => $categoriaCliente,
            'condicionFactura' => $condicionFactura,

        ]);
    }
}