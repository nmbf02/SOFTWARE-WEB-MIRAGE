<?php

namespace App\Http\Controllers;


use App\Models\Almacen;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;


class AlmacenController extends Controller
{

    /**
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'descripcion' => 'required|string',
            'SucursalVehiculo'=> 'required|exists:sucursal,IdSucursal',
            'status' => 'nullable|boolean',
        ]);

        $Almacen = new Almacen();

        // Assign the request data to the provinciageneral instance
        $Almacen->Descripcion = $request->descripcion;
        $Almacen->IdSucursal = $request->SucursalVehiculo;
        $Almacen->Status = $request->status ? 1 : 0;
        // dd($aseguadora->all());
        // Save the provinciageneral instance to the database
        $Almacen->save();

        return redirect('vehicle-configuration')->with('success', 'Guardado con exito');
    }
}
