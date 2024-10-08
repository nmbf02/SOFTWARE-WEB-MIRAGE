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
use App\Models\Empresa;
use App\Models\Sector;
use App\Models\Banco;
use App\Models\CoberturaSeguro;
use App\Models\Companiaseguro;
use App\Models\lapsotiempo;
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
        $sectoraseguradora = Sector::all();
        $sectorempresa = Sector::all();
        $empresasucursal = Empresa::all();
        $sectorsucursal = Sector::all();
        $sectorConfiguracion = Sector::all();
        $bancocuenta = Banco::all();
        $monedacuenta = Moneda::all();
        $garantialapsotiempo = lapsotiempo::all();
        $sectorcompania = Sector::all();
        $riesgoseguro = Tiporiesgo::all();
        $tiposeguro = Tiposeguro::all();
        $companiaseguro = Companiaseguro::all();
        $coberturaseguro = CoberturaSeguro::all();
        $estadopoliza = Estadopoliza::all();
        $condicionseguro = Condicionseguro::all();

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
            'provinciasectorconfigracion' => $provinciasectorconfigracion,
            'sectoraseguradora' => $sectoraseguradora,
            'sectorempresa' => $sectorempresa,
            'empresasucursal' => $empresasucursal,
            'sectorsucursal' => $sectorsucursal,
            'sectorConfiguracion' => $sectorConfiguracion,
            'bancocuenta' => $bancocuenta,
            'monedacuenta' => $monedacuenta,
            'garantialapsotiempo' => $garantialapsotiempo,
            'sectorcompania' => $sectorcompania,
            'riesgoseguro' => $riesgoseguro,
            'tiposeguro' => $tiposeguro,
            'companiaseguro' => $companiaseguro,
            'coberturaseguro' => $coberturaseguro,
            'estadopoliza' => $estadopoliza,
            'condicionseguro' => $condicionseguro,
        ]);
    }
}