<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use App\Models\Aceite;

class TipoaceiteController extends Controller
{
    public function index()
    {
        $aceites = Aceite::all();
        return view('components.vehiculo.configurar-vehiculo',compact('aceites'));
    }

    public function create()
    {
        return view('components.vehiculo.configurar-vehiculo');
    }

    public function store(Request $request)
    {
        $request->validate([
            'descripcion' => 'required|string',
            'kilometraje' => 'requiered|int',
            'status' => 'boolean',
        ]);

        // Creating a new instance of Aceite
        $tipoAceite = new Aceite();
        $tipoAceite->Descripcion = $request->descripcion; // Correcting the field name for 'Descripcion'
        $tipoAceite->KilometrajeAceite = $request->kilometraje;
        $tipoAceite->Status = $request->status ? 1 : 0;

        $tipoAceite->save();

        // Redirect the user to the Marcavehiculo index page with a success message
        return redirect('vehicle-configuration')->with('success', 'Guardado con exito');
    }

    public function show(Aceite $aceite)
    {
        return view('tipoaceite.show', compact('aceite'));
    }

    public function edit(Aceite $aceite)
    {
        return view('tipoaceite.edit', compact('aceite'));
    }

    public function update(Request $request, Aceite $aceite)
    {
        $request->validate([
            'descripcion' => 'required|string|max:255',
            'kilometraje' => 'requiered|int',
            'status' => 'required|boolean',
        ]);

        $aceite->update($request->only(['descripcion', 'status']));

        return redirect()->route('Tipoaceite')->with('success', 'Aceite actualizado con éxito.');
    }

    public function destroy(Aceite $aceite)
    {
        $aceite->delete();

        return redirect()->route('Tipoaceite')->with('success', 'Aceite eliminado con éxito.');
    }
}
