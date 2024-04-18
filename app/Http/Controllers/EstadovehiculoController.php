<?php

// Models aqui
namespace App\Http\Controllers;

use App\Models\Estadovehiculo;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class EstadovehiculoController extends Controller
{
    public function index()
    {
        $estados = Estadovehiculo::all();
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

            $itbis = new Estadovehiculo();
            $itbis->Descripcion = $request->descripcion; 

            $itbis->Status = $request->status ? 1 : 0;

            $itbis->save();

            return redirect()->route('Estadovehiculo')->with('success', 'Estado de ITBIS guardado con éxito.');
        } catch (QueryException $ex) {
            dd($ex);
        }
    }

    public function show(string $id)
    {
        $itbis = Estadovehiculo::findOrFail($id);
        return view('estado_compras.show', compact('itbis'));
    }

    public function edit(string $id)
    {
        $itbis = Estadovehiculo::findOrFail($id);
        return view('estado_compras.edit', compact('itbis'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'Descripcion' => 'required|string',
            'Status' => 'required|boolean',
        ]);

        $itbis = Estadovehiculo::findOrFail($id);
        $itbis->update($request->all());

        return redirect()->route('estado_compras.index');
    }

    public function destroy(string $id)
    {
        $itbis = Estadovehiculo::findOrFail($id);
        $itbis->delete();

        return redirect()->route('estado_compras.index');
    }
}
