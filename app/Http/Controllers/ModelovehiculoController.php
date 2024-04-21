<?php

namespace App\Http\Controllers;

use App\Models\Grupovehiculo;
use App\Models\Modelovehiculo;
use App\Models\Marcavehiculo;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;


class ModelovehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $marcasVehiculo = Marcavehiculo::all();
        $Modelovehiculo = Modelovehiculo::all();
        $gruposVehiculo = Grupovehiculo::all();

        // Retorna la vista con ambas variables. 
        return view('components.vehiculo.configurar-vehiculo', compact('marcasVehiculo', 'gruposVehiculo', 'Modelovehiculo'));
    }

    public function show()
    {
        $marcaVehiculo = Marcavehiculo::all();
        return view('components.vehiculo.configurar-vehiculo')->with('marcaVehiculo', $marcaVehiculo);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        try {
            // Fetch all records from Grupovehiculo model
            $marcaVehiculo = Marcavehiculo::all() ?? collect();

            // Return the view with the list of Grupovehiculo records
            return view('components.vehiculo.configurar-vehiculo', ['marcaVehiculo' => $marcaVehiculo]);
        } catch (QueryException $ex) {
            // If there's an exception, dump the exception
            dd($ex);
        }
    }

    /**
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'descripcion' => 'required|string',
            'marcaVehiculo' => 'required|exists:marcavehiculos,IdMarcaVehiculo',
            'status' => 'nullable|boolean',
        ]);

        $Modelovehiculo = new Modelovehiculo();

        // Assign the request data to the Modelovehiculo instance
        $Modelovehiculo->Descripcion = $request->descripcion;
        $Modelovehiculo->IdMarcaVehiculo = $request->marcaVehiculo;
        $Modelovehiculo->Status = $request->status ? 1 : 0;

        // Save the Modelovehiculo instance to the database
        $Modelovehiculo->save();

        // Redirect the user to the Modelovehiculo index page with a success message
        return redirect('vehicle-configuration')->with('success', 'Guardado con exito');
    }

    /**vehicle-configuration'
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Fetch the Modelovehiculo record by its id
        $Modelovehiculo = Modelovehiculo::findOrFail($id);

        // Return the view with the Modelovehiculo record
        return view('components.vehiculo.configurar-vehiculo', ['Modelovehiculo' => $Modelovehiculo]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Validate the request data
        $request->validate([
            'Descripcion' => 'required|string',
            'Status' => 'required|boolean',
        ]);

        // Fetch the Modelovehiculo record by its id
        $Modelovehiculo = Modelovehiculo::findOrFail($id);

        // Update the Modelovehiculo record with the request data
        $Modelovehiculo->update($request->all());

        // Redirect the user to the Modelovehiculo index page
        return redirect()->route('Modelovehiculo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Fetch the Modelovehiculo record by its id
        $Modelovehiculo = Modelovehiculo::findOrFail($id);

        // Delete the Modelovehiculo record from the database
        $Modelovehiculo->delete();

        // Redirect the user to the Modelovehiculo index page
        return redirect()->route('Modelovehiculo');
    }
}