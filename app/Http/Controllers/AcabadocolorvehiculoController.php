<?php

// Models aqui
namespace App\Http\Controllers;

use App\Models\Acabadocolorvehiculo;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class AcabadocolorvehiculoController extends Controller
{
    public function index()
    {
        $estados = Acabadocolorvehiculo::all();
        return view('components.vehiculo.configurar-vehiculo', compact('estados'));
    }

    public function create()
    {
        return view('components.vehiculo.configurar-vehiculo');
    }

    public function store(Request $request)
    {
        // dd('hola');
        try {
            $request->validate([
                'descripcion' => 'required|string',
                'status' => 'sometimes|boolean',
            ]);

            $itbis = new Acabadocolorvehiculo();
            $itbis->Descripcion = $request->descripcion;

            $itbis->Status = $request->status ? 1 : 0;

            $itbis->save();

            return redirect()->route('Acabadocolorvehiculo')->with('success', 'Estado de ITBIS guardado con éxito.');
        } catch (QueryException $ex) {
            dd($ex);
        }
    }

    public function show(string $id)
    {
        $itbis = Acabadocolorvehiculo::findOrFail($id);
        return view('estado_compras.show', compact('itbis'));
    }

    public function edit(string $id)
    {
        $itbis = Acabadocolorvehiculo::findOrFail($id);
        return view('estado_compras.edit', compact('itbis'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'Descripcion' => 'required|string',
            'Status' => 'required|boolean',
        ]);

        $itbis = Acabadocolorvehiculo::findOrFail($id);
        $itbis->update($request->all());

        return redirect()->route('estado_compras.index');
    }

    public function destroy(string $id)
    {
        $itbis = Acabadocolorvehiculo::findOrFail($id);
        $itbis->delete();

        return redirect()->route('estado_compras.index');
    }
}
