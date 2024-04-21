<?php

namespace App\Http\Controllers;

use App\Models\Metodopago;
use Illuminate\Http\Request;

class MetodopagoController extends Controller
{
    public function index()
    {
    $metodospago = Metodopago::all();
    return view('components.configuracion.configuracion-general', compact('metodospago'));
    }

    public function create()
    {
        return view('components.configuracion.configuracion-general');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string',
            'descripcion' => 'required|string',
            'status' => 'sometimes|boolean',
        ]);

        $metodopago = new Metodopago();
        $metodopago->Nombre = $request->nombre;
        $metodopago->Descripcion = $request->descripcion;
        $metodopago->Status = $request->status ? 1 : 0;

        if ($metodopago->save()) {
            return redirect('general-configuration')->with('success', 'Guardado con exito');
            // return redirect()->route('Metodopago')->with('success', 'Metodopago creada con éxito.');
        } else {
            return back()->withInput()->withErrors(['msg' => 'Error al crear la metodopago.']);
        }
    }

    public function show($id)
    {
        $metodopago = Metodopago::findOrFail($id);
        return view('metodospago.show', compact('metodopago'));
    }

    public function edit($id)
    {
        $metodopago = Metodopago::findOrFail($id);
        return view('metodospago.edit', compact('metodopago'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'descripcion' => 'required|string',
            'status' => 'sometimes|boolean',
        ]);

        $metodopago = Metodopago::findOrFail($id);

        if ($metodopago->update($validatedData)) {
            return redirect()->route('metodospago.index')->with('success', 'Metodopago actualizada con éxito.');
        } else {
            return back()->withInput()->withErrors(['msg' => 'Error al actualizar la metodopago.']);
        }
    }

    public function destroy($id)
    {
        if (Metodopago::destroy($id)) {
            return redirect()->route('metodospago.index')->with('success', 'Metodopago eliminada con éxito.');
        } else {
            return back()->withErrors(['msg' => 'Error al eliminar la metodopago.']);
        }
    }
}
