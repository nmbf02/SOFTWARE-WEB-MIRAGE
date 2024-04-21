<?php

namespace App\Http\Controllers;

use App\Models\Condicionseguro;
use Illuminate\Http\Request;

class CondicionseguroController extends Controller
{
    // Display a listing of the resource.
    public function index(Request $request)
    {
        //dd($request);
        $condiciones = Condicionseguro::all();
        return view('components.configuracion.configuracion-general', compact('condiciones'));
    }

    // Show the form for creating a new resource.
    public function create()
    {
        return view('components.configuracion.create-condicionseguro');
    }

    // Store a newly created resource in storage.
    public function store(Request $request)
    {
        try {

            $request->validate([
                'descripcion' => 'required|string|max:255',
                'fechaEfectiva' => 'required|date',
                'status' => 'sometimes|boolean',
            ]);

            $condicion = new Condicionseguro();
            $condicion->Descripcion = $request->descripcion;
            $condicion->FechaEfectiva = $request->fechaEfectiva;
            $condicion->Status = $request->status ? 1 : 0;

            $condicion->save();

            return redirect('general-configuration')->with('success', 'Guardado con exito');
        } catch (\Exception $e) {
            return back()->withErrors('Error al guardar la condición de seguro: ' . $e->getMessage());
        }
    }

    public function show($id)
    {
        $condicion = Condicionseguro::findOrFail($id);
        return view('components.configuracion.show-condicionseguro', compact('condicion'));
    }

    public function edit($id)
    {
        $condicion = Condicionseguro::findOrFail($id);
        return view('components.configuracion.edit-condicionseguro', compact('condicion'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'descripcion' => 'required|string|max:255',
            'fechaEfectiva' => 'required|date',
            'status' => 'required|boolean',
        ]);

        $condicion = Condicionseguro::findOrFail($id);
        $condicion->update($validatedData);

        return redirect()->route('condicionseguro.index')->with('success', 'Condición de seguro actualizada con éxito.');
    }

    public function destroy($id)
    {
        $condicion = Condicionseguro::findOrFail($id);
        $condicion->delete();

        return redirect()->route('condicionseguro.index')->with('success', 'Condición de seguro eliminada con éxito.');
    }
}
