<?php

namespace App\Http\Controllers;

use App\Models\Servicio;
use App\Models\TipoMantenimiento;
use App\Models\Motor; // Asegúrate de importar el modelo Motor
use Illuminate\Http\Request;

class ServicioMantenimientoController extends Controller
{
    public function index(Request $request)
    {
        // Inicializar la variable para almacenar el TipoMantenimiento seleccionado
        $typeMaintenance = new TipoMantenimiento();

        // Si se ha enviado un `tipoMantenimiento`, buscar el registro en `TipoMantenimiento`
        if (isset($request->tipoMantenimiento)) {
            $typeMaintenance = TipoMantenimiento::findOrFail($request->tipoMantenimiento);
        }

        // Obtener todos los registros de TipoMantenimiento, Servicio, y Motor
        $tipoMantenimientos = TipoMantenimiento::all();
        $servicios = Servicio::with('tipoMantenimiento')->get(); // Cargar la relación tipoMantenimiento
        $motores = Motor::all(); // Obtener todos los registros de Motor

        // Retornar la vista con las variables adecuadas
        return view('components.servicio.mantenimiento-servicio', [
            'typeMaintenance' => $typeMaintenance,
            'tipoMantenimientos' => $tipoMantenimientos, // Todos los registros de TipoMantenimiento
            'servicios' => $servicios, // Todos los registros de Servicio con su relación
            'motores' => $motores, // Todos los registros de Motor
            'requestTipoServicio' => $request->tipoMantenimiento
        ]);
    }
}

//namespace App\Http\Controllers;
//
//use App\Models\Servicio;
//use App\Models\TipoMantenimiento;
//use Illuminate\Http\Request;
//
//class ServicioMantenimientoController extends Controller
//{
//    public function index(Request $request)
//    {
//        // Inicializar la variable para almacenar el TipoMantenimiento seleccionado
//        $typeMaintenance = new TipoMantenimiento();
//
//        // Si se ha enviado un `tipoMantenimiento`, buscar el registro en `TipoMantenimiento`
//        if(isset($request->tipoMantenimiento)) {
//            $typeMaintenance = TipoMantenimiento::findOrFail($request->tipoMantenimiento);
//        }
//
//        // Obtener todos los registros de TipoMantenimiento y Servicio
//        $tipoMantenimientos = TipoMantenimiento::all();
//        $servicios = Servicio::with('tipoMantenimiento')->get(); // Cargar la relación tipoMantenimiento
//
//        // Retornar la vista con las variables adecuadas
//        return view('components.servicio.mantenimiento-servicio', [
//            'typeMaintenance' => $typeMaintenance,
//            'tipoMantenimientos' => $tipoMantenimientos, // Todos los registros de TipoMantenimiento
//            'servicios' => $servicios, // Todos los registros de Servicio con su relación
//            'requestTipoServicio' => $request->tipoMantenimiento
//        ]);
//    }
//}
