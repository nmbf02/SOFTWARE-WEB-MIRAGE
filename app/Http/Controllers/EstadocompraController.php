<?php

namespace App\Http\Controllers;

use App\Models\EstadoCompra;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log; 

class EstadocompraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        Log::info('La función fue ejecutada por el usuario:');
        $estados = EstadoCompra::all();
        // return view('estado_compras.index', compact('estados'));
        return view('components.cxp.configuracion-cxp', compact('estados'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('components.cxp.consultar-compra');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Log::info('La función fue ejecutada por el usuario:');
        try{

            $request->validate([
                'descripcion' => 'required|string', // La columna 'Descripcion' debe ser validada
                'status' => 'sometimes|boolean', // 'Status' es un bit que se manejará como booleano
            ]);
    
            // Crear una nueva instancia del modelo EstadoCompra
            $estadoCompra = new EstadoCompra();
            $estadoCompra->Descripcion = $request->descripcion;
            if($request->status=="on"){
                $estadoCompra->Status = 1; 
                
            }else{
                
                $estadoCompra->Status = 0; 
            }
    
            // Guardar el nuevo EstadoCompra en la base de datos
            $estadoCompra->save();
    
            // Redirigir al usuario a la vista index con un mensaje de éxito
            return redirect()->route('Estadocompras')->with('success', 'Estado de compra guardado con éxito.');

        }catch(QueryException $ex){
            dd($ex);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $estadoCompra = EstadoCompra::findOrFail($id);
        return view('estado_compras.show', compact('estadoCompra'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $estadoCompra = EstadoCompra::findOrFail($id);
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

        $estadoCompra = EstadoCompra::findOrFail($id);
        $estadoCompra->update($request->all());

        return redirect()->route('estado_compras.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $estadoCompra = EstadoCompra::findOrFail($id);
        $estadoCompra->delete();

        return redirect()->route('estado_compras.index');
    }
}