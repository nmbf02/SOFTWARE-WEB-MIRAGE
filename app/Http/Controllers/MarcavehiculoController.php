<?php

namespace App\Http\Controllers;

use App\Models\Marcavehiculo;
use App\Models\Grupovehiculo;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;


class MarcavehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $marcasVehiculo = Marcavehiculo::all();
        $gruposVehiculo = Grupovehiculo::all();

        // Retorna la vista con ambas variables.
        return view('components.vehiculo.configurar-vehiculo', compact('marcasVehiculo', 'gruposVehiculo'));
    }

    public function show()
    {
        $gruposVehiculo = Grupovehiculo::all();
        return view('components.vehiculo.configurar-vehiculo')->with('gruposVehiculo', $gruposVehiculo);
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
            $gruposVehiculo = Grupovehiculo::all() ?? collect();

            // Return the view with the list of Grupovehiculo records
            return view('components.vehiculo.configurar-vehiculo', ['gruposVehiculo' => $gruposVehiculo]);
        } catch (QueryException $ex) {
            // If there's an exception, dump the exception
            dd($ex);
        }
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'descripcion' => 'required|string',
            'grupoVehiculo' => 'required|exists:grupovehiculos,IdGrupoVehiculo',
            'status' => 'nullable|boolean',
        ]);

        $Marcavehiculo = new Marcavehiculo();

        // Assign the request data to the Marcavehiculo instance
        $Marcavehiculo->Descripcion = $request->descripcion;
        $Marcavehiculo->IdGrupoVehiculo = $request->grupoVehiculo;
        $Marcavehiculo->Status = $request->status ? 1 : 0;

        // Save the Marcavehiculo instance to the database
        $Marcavehiculo->save();

        // Redirect the user to the Marcavehiculo index page with a success message
        return redirect('vehicle-configuration')->with('success', 'Guardado con exito');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Fetch the Marcavehiculo record by its id
        $Marcavehiculo = Marcavehiculo::findOrFail($id);

        // Return the view with the Marcavehiculo record
        return view('components.vehiculo.configurar-vehiculo', ['Marcavehiculo' => $Marcavehiculo]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Validate the request data
        $request->validate([
            'Descripcion' => 'required|string',
            'Status' => 'required|boolean',
        ]);

        // Fetch the Marcavehiculo record by its id
        $Marcavehiculo = Marcavehiculo::findOrFail($id);

        // Update the Marcavehiculo record with the request data
        $Marcavehiculo->update($request->all());

        // Redirect the user to the Marcavehiculo index page
        return redirect()->route('Marcavehiculo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Fetch the Marcavehiculo record by its id
        $Marcavehiculo = Marcavehiculo::findOrFail($id);

        // Delete the Marcavehiculo record from the database
        $Marcavehiculo->delete();

        // Redirect the user to the Marcavehiculo index page
        return redirect()->route('Marcavehiculo');
    }
}



// class MarcavehiculoController extends Controller
// {
//     public function index()
//     {
//         // dd($request->all());
//         $gruposVehiculo = Marcavehiculo::all();
//         return view('components.vehiculo.configurar-vehiculo', ['gruposVehiculo' => $gruposVehiculo]);
//     }


// public function create()
// {
//     $gruposVehiculo = Marcavehiculo::all();
//     return view('components.vehiculo.configurar-vehiculo', ['gruposVehiculo'=>$gruposVehiculo]);
// }

// public function create()
// {
//     $gruposVehiculo = Marcavehiculo::all() ?? collect(); // Ensure it defaults to an empty collection if null
//     return view('components.vehiculo.configurar-vehiculo', ['gruposVehiculo' => $gruposVehiculo]);
// }

// public function create()
// {
//     try {
//         $gruposVehiculo = Marcavehiculo::all() ?? collect(); // Ensures it's never null
//         return view('components.vehiculo.configurar-vehiculo', ['gruposVehiculo' => $gruposVehiculo]);
//     } catch (QueryException $ex) {
//         dd($ex);
//     }
// }

// La que funciona
// public function create()
// {
//     try {
//         $gruposVehiculo = GrupoVehiculo::all() ?? collect(); // Ensures it's never null
//         return view('components.vehiculo.configurar-vehiculo', ['gruposVehiculo' => $gruposVehiculo]);
//     } catch (QueryException $ex) {
//         dd($ex);
//     }
// }

// public function store(Request $request)
// {
//     $request->validate([
//         'descripcion' => 'required|string',
//         'grupoVehiculo' => 'required|exists:grupovehiculo,id',
//         'status' => 'nullable|boolean',
//     ]);

//     $Marcavehiculo = new Marcavehiculo();
//     $Marcavehiculo->Descripcion = $request->descripcion;
//     $Marcavehiculo->GrupoVehiculo = $request->grupoVehiculo;
//     $Marcavehiculo->Status = $request->status ? 1 : 0;

//     try {
//         $Marcavehiculo->save();
//     } catch (QueryException $ex) {
//         return redirect()->back()->withErrors(['error' => 'Error al guardar: ' . $ex->getMessage()]);
//     }

//     return redirect()->route('Marcavehiculo')->with('success', 'Guardado con exito');
// }

// public function store(Request $request)
// {
//     // Validar los datos de la solicitud
//     $request->validate([
//         'descripcion' => 'required|string',
//         'grupoVehiculo' => 'required|exists:grupovehiculo,IdGrupoVehiculo',
//         'status' => 'nullable|boolean',
//     ]);

//     // Crear una nueva instancia de Marcavehiculo
//     $Marcavehiculo = new Marcavehiculo();

//     // Asignar los valores de los campos del formulario a las propiedades de la instancia
//     $Marcavehiculo->Descripcion = $request->descripcion;
//     $Marcavehiculo->IdGrupoVehiculo = $request->grupoVehiculo;
//     $Marcavehiculo->Status = $request->status ? 1 : 0;

//     // Guardar la instancia en la base de datos
//     $Marcavehiculo->save();

//     // Redirigir al usuario a la página de Marcavehiculo con un mensaje de éxito
//     return redirect()->route('Marcavehiculo')->with('success', 'Guardado con exito');
// }

// public function show(string $id)
// {
//     $itbis = Marcavehiculo::findOrFail($id);
//     return view('estado_compras.show', compact('itbis'));
// }

// public function show()
// {
//     $gruposVehiculo = Grupovehiculo::all();
//     return view('configurar-vehiculo', ['gruposVehiculo' => $gruposVehiculo]);
// }
// public function edit(string $id)
// {
//     $itbis = Marcavehiculo::findOrFail($id);
//     return view('estado_compras.edit', compact('itbis'));
// }

// public function update(Request $request, string $id)
// {
//     $request->validate([
//         'Descripcion' => 'required|string',
//         'Status' => 'required|boolean',
//     ]);

//     $itbis = Marcavehiculo::findOrFail($id);
//     $itbis->update($request->all());

//     return redirect()->route('estado_compras.index');
// }

// public function destroy(string $id)
// {
//     $itbis = Marcavehiculo::findOrFail($id);
//     $itbis->delete();

//     return redirect()->route('estado_compras.index');
// }
//}
