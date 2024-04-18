<?php

namespace App\Http\Controllers;

use App\Models\Marcavehiculo;
use App\Models\Grupovehiculo;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
// use App\Http\Controllers\Grupovehiculo;

class MarcavehiculoController extends Controller
{
    public function index()
    {
        // dd($request->all());
        $gruposVehiculo = Marcavehiculo::all();
        return view('components.vehiculo.configurar-vehiculo', ['gruposVehiculo' => $gruposVehiculo]);
    }


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
    public function create()
    {
        try {
            $gruposVehiculo = GrupoVehiculo::all() ?? collect(); // Ensures it's never null
            return view('components.vehiculo.configurar-vehiculo', ['gruposVehiculo' => $gruposVehiculo]);
        } catch (QueryException $ex) {
            dd($ex);
        }
    }

    public function store(Request $request)
    {
        $request->validate([
            'descripcion' => 'required|string',
            'grupoVehiculo' => 'required|exists:grupovehiculo,id',
            'status' => 'nullable|boolean',
        ]);

        $marcavehiculo = new Marcavehiculo();
        $marcavehiculo->Descripcion = $request->descripcion;
        $marcavehiculo->GrupoVehiculo = $request->grupoVehiculo;
        $marcavehiculo->Status = $request->status ? 1 : 0;

        try {
            $marcavehiculo->save();
        } catch (QueryException $ex) {
            return redirect()->back()->withErrors(['error' => 'Error al guardar: ' . $ex->getMessage()]);
        }

        return redirect()->route('Marcavehiculo')->with('success', 'Guardado con exito');
    }

    // public function show(string $id)
    // {
    //     $itbis = Marcavehiculo::findOrFail($id);
    //     return view('estado_compras.show', compact('itbis'));
    // }

    public function show()
    {
        $gruposVehiculo = Grupovehiculo::all();
        return view('configurar-vehiculo', ['gruposVehiculo' => $gruposVehiculo]);
    }
    public function edit(string $id)
    {
        $itbis = Marcavehiculo::findOrFail($id);
        return view('estado_compras.edit', compact('itbis'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'Descripcion' => 'required|string',
            'Status' => 'required|boolean',
        ]);

        $itbis = Marcavehiculo::findOrFail($id);
        $itbis->update($request->all());

        return redirect()->route('estado_compras.index');
    }

    public function destroy(string $id)
    {
        $itbis = Marcavehiculo::findOrFail($id);
        $itbis->delete();

        return redirect()->route('estado_compras.index');
    }
}
