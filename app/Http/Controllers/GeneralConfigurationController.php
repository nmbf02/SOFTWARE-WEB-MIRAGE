<?php

namespace App\Http\Controllers;

use App\Models\Pais;
use App\Models\Moneda;
use App\Models\Condicionseguro;
use App\Models\Estadopoliza;
use App\Models\Tiporiesgo;
use App\Models\Tiposeguro;
use App\Models\Provincia;
use App\Models\Canalcomunicacion;
use App\Models\Metodopago;
use App\Models\Condicionfactura;

use App\Models\Ciudad;

use Illuminate\Http\Request;

class GeneralConfigurationController extends Controller
{
    public function index(Request $request)
    {
        $paisConfiguracion = Pais::all();
        $monedas = Moneda::all();
        $condiciones = Condicionseguro::all();
        $estados = Estadopoliza::all();
        $estadosriesgos = Tiporiesgo::all();
        $estadostiposeguro = Tiposeguro::all();
        $provinciageneral = Provincia::all();
        $metodospago = Metodopago::all();
        $condiconfactura = Condicionfactura::all();
        $canalcomunicaciontipo = Canalcomunicacion::all();
        $provinciaciudadconfiguracion = Provincia::all();
        $provinciasectorconfigracion = Provincia::all();
        // dd($request->all());
        return view('components.configuracion.configuracion-general', [
            'paisConfiguracion' => $paisConfiguracion,
            'monedas' => $monedas,
            'condiciones' => $condiciones,
            'estados' => $estados,
            'estadosriesgos' => $estadosriesgos,
            'estadostiposeguro' => $estadostiposeguro,
            'provinciageneral' => $provinciageneral,
            'canalcomunicaciontipo' => $canalcomunicaciontipo,
            'metodospago' => $metodospago,
            'condiconfactura' => $condiconfactura,
            'provinciaciudadconfiguracion' => $provinciaciudadconfiguracion,
            'provinciasectorconfigracion' => $provinciasectorconfigracion
        ]);
    }
}