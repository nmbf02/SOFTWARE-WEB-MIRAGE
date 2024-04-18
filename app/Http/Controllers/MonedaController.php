<?php

namespace App\Http\Controllers;

use App\Models\Moneda;
use Illuminate\Http\Request;

class MonedaController extends Controller
{
    public function index()
    {
        $monedas = Moneda::all();
        return view('components.configuracion.configuracion-general', compact('monedas'));
    }

    public function create()
    {
        return view('components.configuracion.configuracion-general');
    }

    public function store(Request $request)
    {
        $request->validate([
            'descripcion' => 'required|string',
            'tasa' => 'required|numeric',
            'status' => 'sometimes|boolean',
        ]);

        $moneda = new Moneda();
        $moneda->Descripcion = $request->descripcion;
        $moneda->Tasa = $request->tasa;
        $moneda->Status = $request->status ? 1 : 0;

        if ($moneda->save()) {
            return redirect()->route('Moneda')->with('success', 'Moneda creada con éxito.');
        } else {
            return back()->withInput()->withErrors(['msg' => 'Error al crear la moneda.']);
        }
    }

    public function show($id)
    {
        $moneda = Moneda::findOrFail($id);
        return view('monedas.show', compact('moneda'));
    }

    public function edit($id)
    {
        $moneda = Moneda::findOrFail($id);
        return view('monedas.edit', compact('moneda'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'descripcion' => 'required|string|max:255',
            'tasa' => 'required|numeric',
            'status' => 'required|boolean',
        ]);

        $moneda = Moneda::findOrFail($id);

        if ($moneda->update($validatedData)) {
            return redirect()->route('monedas.index')->with('success', 'Moneda actualizada con éxito.');
        } else {
            return back()->withInput()->withErrors(['msg' => 'Error al actualizar la moneda.']);
        }
    }

    public function destroy($id)
    {
        if (Moneda::destroy($id)) {
            return redirect()->route('monedas.index')->with('success', 'Moneda eliminada con éxito.');
        } else {
            return back()->withErrors(['msg' => 'Error al eliminar la moneda.']);
        }
    }
}
