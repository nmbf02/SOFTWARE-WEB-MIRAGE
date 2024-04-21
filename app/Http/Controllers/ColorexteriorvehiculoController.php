<?php

namespace App\Http\Controllers;

// use App\Models\Grupovehiculo;
// use App\Models\Modelovehiculo;
// use App\Models\Marcavehiculo;
use App\Models\Colorvehiculo;
use App\Models\Acabadocolorvehiculo;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;


class ColorexteriorvehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $acabadoVehiculo = Acabadocolorvehiculo::all();
        // $marcasVehiculo = Marcavehiculo::all();
        // $Modelovehiculo = Modelovehiculo::all();
        // $gruposVehiculo = Grupovehiculo::all();
        // $colorVehiculo = Colorvehiculo::all();

        // Retorna la vista con ambas variables. 
        // return view('components.vehiculo.configurar-vehiculo', compact('marcasVehiculo', 'gruposVehiculo', 'Modelovehiculo','acabadoVehiculo'));
        return view('components.vehiculo.configurar-vehiculo', compact('acabadoVehiculo'));
    }

    public function show()
    {
        $colorVehiculo = Colorvehiculo::all();
        return view('components.vehiculo.configurar-vehiculo')->with('colorVehiculo', $colorVehiculo);
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
            $acabadoVehiculo = Acabadocolorvehiculo::all() ?? collect();

            // Return the view with the list of Grupovehiculo records
            return view('components.vehiculo.configurar-vehiculo', ['acabadoVehiculo' => $acabadoVehiculo]);
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
            'acabadoVehiculo' => 'required|exists:acabadocolorvehiculos,IdAcabadoColorVehiculo',
            'status' => 'sometimes|boolean',
        ]);
        
        $Colorvehiculo = new Colorvehiculo();

        // Assign the request data to the Colorvehiculo instance
        $Colorvehiculo->Descripcion = $request->descripcion;
        $Colorvehiculo->IdAcabadoColorVehiculo = $request->acabadoVehiculo;
        $Colorvehiculo->Status = $request->status ? 1 : 0;

        // Save the Colorvehiculo instance to the database
        $Colorvehiculo->save();
        

        // Redirect the user to the Colorvehiculo index page with a success message
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
        // Fetch the Colorvehiculo record by its id
        $Colorvehiculo = Colorvehiculo::findOrFail($id);

        // Return the view with the Colorvehiculo record
        return view('components.vehiculo.configurar-vehiculo', ['Colorvehiculo' => $Colorvehiculo]);
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

        // Fetch the Colorvehiculo record by its id
        $colorvehiculo = Colorvehiculo::findOrFail($id);

        // Update the Colorvehiculo record with the request data
        $colorvehiculo->update($request->all());

        // Redirect the user to the Colorvehiculo index page
        return redirect()->route('Colorvehiculo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Fetch the Colorvehiculo record by its id
        $Colorvehiculo = Colorvehiculo::findOrFail($id);

        // Delete the Modelovehiculo record from the database
        $Colorvehiculo->delete();

        // Redirect the user to the Modelovehiculo index page
        return redirect()->route('Colorvehiculo');
    }
}