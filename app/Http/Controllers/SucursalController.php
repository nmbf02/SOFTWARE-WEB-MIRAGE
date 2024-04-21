<?php

namespace App\Http\Controllers;


use App\Models\Sucursal;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;


class SucursalController extends Controller
{

    /**
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $request->validate([
            'nombresucursal' => 'required|string',
            'empresasucursal' => 'required|exists:empresa,IdEmpresa',
            'sectorsucursal' => 'required|exists:sector,IdSector',
            'callesucursal' => 'required|string',
            'edificiosucursal' => 'required|string',
            'telefonosucursal' => 'required|string',
            'emailsucursal' => 'required|email',
            'status' => 'nullable|boolean',
        ]);

        $sucursal = new Sucursal();

        // Assign the request data to the provinciageneral instance
        $sucursal->Nombre = $request->nombresucursal;
        $sucursal->IdEmpresa = $request->empresasucursal;
        $sucursal->IdSector = $request->sectorsucursal;
        $sucursal->Calle = $request->callesucursal;
        $sucursal->NumeroEdificio = $request->edificiosucursal;
        $sucursal->Telefono = $request->telefonosucursal;
        $sucursal->Email = $request->emailsucursal;
        $sucursal->Status = $request->status ? 1 : 0;

        // Save the provinciageneral instance to the database
        $sucursal->save();

        return redirect('general-configuration')->with('success', 'Guardado con exito');
    }
}
