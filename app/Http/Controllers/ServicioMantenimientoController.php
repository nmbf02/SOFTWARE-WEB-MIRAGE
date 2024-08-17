<?php

namespace App\Http\Controllers;

use App\Models\Aceite;
use App\Models\Servicio;
use App\Models\TipoMantenimiento;
use App\Models\Motor; // Asegúrate de importar el modelo Motor
use Illuminate\Http\Request;

class ServicioMantenimientoController extends Controller
{
    public function index(Request $request)
    {
        $typeMaintenance = new TipoMantenimiento();
        $typeMotor = new Motor();

        if (isset($request->tipoMantenimiento)) {
            $typeMaintenance = TipoMantenimiento::findOrFail($request->tipoMantenimiento);
        }
        if (isset($request->tipoMotor)) {
            $typeMotor = Motor::findOrFail($request->tipoMotor);
        }

        $tipoMantenimientos = TipoMantenimiento::all();
        $tipoMotor =  Motor::all();
        $servicios = Servicio::with('tipoMantenimiento')->get();
        $motores = Motor::all();
        $TAceite = Aceite::all();
        $motorVehiculo = Motor::all();
        $Aceites = Aceite::all();


        return view('components.mantenimiento.configuracion-mantenimiento', [
            'typeMaintenance' => $typeMaintenance,
            'typeMotor' => $typeMotor,
            'tipoMantenimientos' => $tipoMantenimientos,
            'tipoMotor' => $tipoMotor,
            'servicios' => $servicios,
            'requestTipoServicio' => $request->tipoMantenimiento,
            'requestTipoMotor' => $request->tipoMotor,
            'TAceite' => $TAceite,
            'motorVehiculo' => $motorVehiculo,
            'Aceites' => $Aceites,
        ]);
    }
}
