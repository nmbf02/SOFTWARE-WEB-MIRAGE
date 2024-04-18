<?php

// Models aqui
namespace App\Http\Controllers;

use App\Models\Traccionvehiculo;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class TraccionvehiculoController extends Controller
{
    public function index()
    {
        $estados = Traccionvehiculo::all();
        return view('components.vehiculo.configurar-vehiculo', compact('estados'));
    }

    public function create()
    {
        return view('components.vehiculo.configurar-vehiculo');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        try {
            $request->validate([
                'descripcion' => 'required|string',
                'status' => 'nullable|boolean',
            ]);

            $itbis = new Traccionvehiculo();
            $itbis->Descripcion = $request->descripcion; 

            $itbis->Status = $request->status ? 1 : 0;

            $itbis->save();

            return redirect()->route('Traccionvehiculo')->with('success', 'Estado de ITBIS guardado con éxito.');
        } catch (QueryException $ex) {
            dd($ex);
        }
    }

    public function show(string $id)
    {
        $itbis = Traccionvehiculo::findOrFail($id);
        return view('estado_compras.show', compact('itbis'));
    }

    public function edit(string $id)
    {
        $itbis = Traccionvehiculo::findOrFail($id);
        return view('estado_compras.edit', compact('itbis'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'Descripcion' => 'required|string',
            'Status' => 'required|boolean',
        ]);

        $itbis = Traccionvehiculo::findOrFail($id);
        $itbis->update($request->all());

        return redirect()->route('estado_compras.index');
    }

    public function destroy(string $id)
    {
        $itbis = Traccionvehiculo::findOrFail($id);
        $itbis->delete();

        return redirect()->route('estado_compras.index');
    }
}
