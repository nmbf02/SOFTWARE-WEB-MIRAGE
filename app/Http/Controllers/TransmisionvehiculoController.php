<?php

// Models aqui
namespace App\Http\Controllers;

use App\Models\Transmisionvehiculo;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class TransmisionvehiculoController extends Controller
{
    public function index()
    {
        $estados = Transmisionvehiculo::all();
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

            $itbis = new Transmisionvehiculo();
            $itbis->Descripcion = $request->descripcion; 

            $itbis->Status = $request->status ? 1 : 0;

            $itbis->save();

            return redirect()->route('Transmisionvehiculo')->with('success', 'Estado de ITBIS guardado con éxito.');
        } catch (QueryException $ex) {
            dd($ex);
        }
    }

    public function show(string $id)
    {
        $itbis = Transmisionvehiculo::findOrFail($id);
        return view('estado_compras.show', compact('itbis'));
    }

    public function edit(string $id)
    {
        $itbis = Transmisionvehiculo::findOrFail($id);
        return view('estado_compras.edit', compact('itbis'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'Descripcion' => 'required|string',
            'Status' => 'required|boolean',
        ]);

        $itbis = Transmisionvehiculo::findOrFail($id);
        $itbis->update($request->all());

        return redirect()->route('estado_compras.index');
    }

    public function destroy(string $id)
    {
        $itbis = Transmisionvehiculo::findOrFail($id);
        $itbis->delete();

        return redirect()->route('estado_compras.index');
    }
}
