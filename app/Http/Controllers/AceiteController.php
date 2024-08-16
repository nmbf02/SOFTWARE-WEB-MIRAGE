<?php

namespace App\Http\Controllers;

use App\Models\ConfiguracionAceite;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class AceiteController extends Controller
{

    /**
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'descripcion' => 'required|string',
            'TAceite'=> 'required|exists:Aceite,IdAceite',
            'kilomentraje' => 'required|numeric',
            'lapsoDeTiempo' => 'required|numeric',
            'precio' => 'required|numeric',
            'status' => 'nullable|boolean',
        ]);

        $Aceite = new ConfiguracionAceite();

        // Assign the request data to the provinciageneral instance
        $Aceite->Descripcion = $request->descripcion;
        $Aceite->IdAceite = $request->TAceite;
        $Aceite->Kilometraje = $request->kilomentraje;
        $Aceite->LapsoDeTiempo = $request->lapsoDeTiempo;
        $Aceite->Precio = $request->precio;
        $Aceite->Status = $request->status ? 1 : 0;
        $Aceite->save();

        return redirect('maintenance-configuration')->with('success', 'Guardado con exito');
    }
}
