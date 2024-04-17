<?php

namespace App\Http\Controllers;
use App\Models\Tipovehiculoconcesionario;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class TipovehiculoconcesionarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $estados = Tipovehiculoconcesionario::all();
        // return view('estado_compras.index', compact('estados'));
        return view('components.vehiculo.configurar-vehiculo', compact('estados'));
        
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('components.vehiculo.configurar-vehiculo');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd("HOla");
        try{

            $request->validate([
                'descripcion' => 'required|string', // La columna 'Descripcion' debe ser validada
                'status' => 'sometimes|boolean', // 'Status' es un bit que se manejará como booleano
            ]);
    
            // Crear una nueva instancia del modelo Tipovehiculoconcesionario
            $estadoCompra = new Tipovehiculoconcesionario();
            $estadoCompra->Descripcion = $request->descripcion;
            if($request->status=="on"){
                $estadoCompra->Status = 1; 
                
            }else{
                
                $estadoCompra->Status = 0; 
            }
    
            // Guardar el nuevo Tipovehiculoconcesionario en la base de datos
            $estadoCompra->save();
    
            // Redirigir al usuario a la vista index con un mensaje de éxito
            return redirect()->route('Tipovehiculoconcesionario')->with('success', 'Estado de compra guardado con éxito.');

        }catch(QueryException $ex){
            dd($ex);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $estadoCompra = Tipovehiculoconcesionario::findOrFail($id);
        return view('estado_compras.show', compact('estadoCompra'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $estadoCompra = Tipovehiculoconcesionario::findOrFail($id);
        return view('estado_compras.edit', compact('estadoCompra'));
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

        $estadoCompra = Tipovehiculoconcesionario::findOrFail($id);
        $estadoCompra->update($request->all());

        return redirect()->route('estado_compras.index');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $estadoCompra = Tipovehiculoconcesionario::findOrFail($id);
        $estadoCompra->delete();

        return redirect()->route('estado_compras.index');
    }
}