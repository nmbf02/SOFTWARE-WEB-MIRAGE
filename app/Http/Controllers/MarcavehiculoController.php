<?php

namespace App\Http\Controllers;

use App\Models\Marcavehiculo;
// use App\Models\Grupovehiculo;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

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

    public function create()
    {
        try {
            $gruposVehiculo = Marcavehiculo::all() ?? collect(); // Ensures it's never null
            return view('components.vehiculo.configurar-vehiculo', ['gruposVehiculo' => $gruposVehiculo]);
        } catch (QueryException $ex) {
            dd($ex);
        }
    }


    public function store(Request $request)
    {
        try {
            $request->validate([
                'descripcion' => 'required|string',
                'status' => 'nullable|boolean',
            ]);

            $itbis = new Marcavehiculo();
            $itbis->Descripcion = $request->descripcion;

            $itbis->Status = $request->status ? 1 : 0;

            $itbis->save();

            $gruposVehiculo = Marcavehiculo::all();
            return redirect()->route('Marcavehiculo.create')->with('gruposVehiculo', $gruposVehiculo);
            return redirect()->route('Marcavehiculo')->with('success', 'Guardado con exito');
        } catch (QueryException $ex) {
            dd($ex);
        }
    }

    public function show(string $id)
    {
        $itbis = Marcavehiculo::findOrFail($id);
        return view('estado_compras.show', compact('itbis'));
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
