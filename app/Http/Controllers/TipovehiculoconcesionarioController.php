<?php

namespace App\Http\Controllers;
use App\Models\Tipovehiculoconcesionario;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;


use function Laravel\Prompts\alert;

class TipovehiculoconcesionarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $estados = Tipovehiculoconcesionario::all();
        return view('components.vehiculo.configurar-vehiculo', compact('estados'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('components.vehiculo.consultavehiculo');
    }

    /**
     * Store a newly created resource in storage.
     */
    
    public function store(Request $request)
    {
        alert('Hola');
        try{

            $request->validate([
                'descripcion' => 'required|string', // La columna 'Descripcion' debe ser validada
                'estadomodelo' => 'sometimes|boolean', // 'estadomodelo' es un bit que se manejará como booleano
            ]);
    
            // Crear una nueva instancia del modelo Tipovehiculoconcesionario
            $tipoVehiculoConcesionario = new Tipovehiculoconcesionario();
            $tipoVehiculoConcesionario->Descripcion = $request->descripcion;
            if($request->estadomodelo=="on"){
                $tipoVehiculoConcesionario->Status = 1; 
                
            }else{
                
                $tipoVehiculoConcesionario->Status = 0; 
            }
    
            // Guardar el nuevo Tipovehiculoconcesionario en la base de datos
            $tipoVehiculoConcesionario->save();
            // alert('Hola');
            // Redirigir al usuario a la vista index con un mensaje de éxito
            // $this->index();
            return redirect()->route('Tipovehiculoconcesionario')->with('success', 'Tipo del destino guardado.');

        }catch(QueryException $ex){
            dd($ex);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $tipoVehiculoConcesionario = Tipovehiculoconcesionario::findOrFail($id);
        return view('estado_compras.show', compact('tipoVehiculoConcesionario'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $tipoVehiculoConcesionario = Tipovehiculoconcesionario::findOrFail($id);
        return view('estado_compras.edit', compact('tipoVehiculoConcesionario'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'Descripcion' => 'required|string',
            'Status' => 'required|boolean',
        ]);

        $tipoVehiculoConcesionario = Tipovehiculoconcesionario::findOrFail($id);
        $tipoVehiculoConcesionario->update($request->all());

        return redirect()->route('estado_compras.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tipoVehiculoConcesionario = Tipovehiculoconcesionario::findOrFail($id);
        $tipoVehiculoConcesionario->delete();

        return redirect()->route('estado_compras.index');
    }
}