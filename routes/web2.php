<?php

/**
 * Archivo de rutas para el software web Mirage.
 */

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\registrarRentaController;
use App\Http\Controllers\registrarClienteController;
use App\Http\Controllers\registrarUsuarioController;
use App\Http\Controllers\registrarSuplidorController;
use App\Http\Controllers\registrarvehiculoController;
use App\Http\Controllers\registrarFacturaController;
use App\Http\Controllers\registrarCotizacionFacturaController;
use App\Http\Controllers\registrarCotizacionRentaController;
use App\Http\Controllers\registrarSubastaController;
use App\Http\Controllers\registrarSolicitudcitaController;
use App\Http\Controllers\registrarPruebaConduccionController;
use App\Http\Controllers\registrarOrdenReparacionController;
use App\Http\Controllers\registrarMantenimientoVehiculoController;
use App\Http\Controllers\registrarInventarioController;
use App\Http\Controllers\registrarOrdenCompraController;
use App\Http\Controllers\registrarCompraController;
use App\Http\Controllers\consultarClienteController;
use App\Http\Controllers\consultarFacturaController;
use App\Http\Controllers\consultarCotizacionController;
use App\Http\Controllers\consultarRetroalimentacionController;
use App\Http\Controllers\consultarSubastaController;
use App\Http\Controllers\consultarNominaController;
use App\Http\Controllers\consultarRentaController;
use App\Http\Controllers\consultarVehiculoController;
use App\Http\Controllers\consultarOrdenCompraController;
use App\Http\Controllers\consultarCompraController;
use App\Http\Controllers\consultarcotizacionRentaController;
use App\Http\Controllers\consultarSuplidorController;
use App\Http\Controllers\historialPagosController;
use App\Http\Controllers\solicitudPrestamoVehiculoController;
use App\Http\Controllers\retroalimentacionClienteController;
use App\Http\Controllers\retroalimentacionEmpleadoController;
use App\Http\Controllers\configurarVehiculoController;
use App\Http\Controllers\configuracionGeneralController;
use App\Http\Controllers\prestamosVehiculoController;
use App\Http\Controllers\abonoPrestamosVehiculoController;
use App\Http\Controllers\configuracionCXPController;
use App\Http\Controllers\configurarNominaController;
use App\Http\Controllers\registrarEmpleadoController;
use App\Http\Controllers\consultarEmpleadoController;
use App\Http\Controllers\configurarInventarioController;
use App\Http\Controllers\consultarInventarioController;
use App\Http\Controllers\configuracionMantenimientoController;
use App\Http\Controllers\ManualDeUsuarioController;
use App\Http\Controllers\EstadocompraController;
use App\Http\Controllers\TipovehiculoconcesionarioController;
use App\Http\Controllers\TipoitbisController;
use App\Http\Controllers\ClasificacionvehiculoController;
use App\Http\Controllers\SegmentomercadoController;
use App\Http\Controllers\TipovehiculoController;
use App\Http\Controllers\TraccionvehiculoController;
use App\Http\Controllers\TransmisionvehiculoController;
use App\Http\Controllers\EstadovehiculoController;
use App\Http\Controllers\AcabadocolorvehiculoController;
use App\Http\Controllers\GrupovehiculoController;
use App\Http\Controllers\MarcavehiculoController;
use App\Http\Controllers\paisController;
use App\Http\Controllers\TiposeguroController;
use App\Http\Controllers\TiporiesgoController;
use App\Http\Controllers\EstadopolizaController;
use App\Http\Controllers\CondicionseguroController;
use App\Http\Controllers\MonedaController;
use App\Http\Controllers\CanalcomunicacionController;
use App\Http\Controllers\CondicionfacturaController;
use App\Http\Controllers\MetodopagoController;
use App\Http\Controllers\VehiculoController;
use App\Http\Controllers\ModelovehiculoController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\ColorexteriorvehiculoController;
use App\Http\Controllers\ProvinciaController;
use App\Http\Controllers\CiudadController;
use App\Http\Controllers\SectorController;
use App\Http\Controllers\AseguradoraVehiculoController;
use App\Http\Controllers\AseguradoraController;
use App\Http\Controllers\AlmacenController;
use App\Http\Controllers\UbicacionController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\SucursalController;
use App\Http\Controllers\BancoController;
use App\Http\Controllers\CuentabancoController;
use App\Http\Controllers\GarantiaController;
use App\Http\Controllers\CoberturaseguroController;
use App\Http\Controllers\CompaniaseguroController;
use App\Http\Controllers\consultaMantenimientoController;
use App\Http\Controllers\EstadoOrdenReparacionController;
use App\Http\Controllers\EstadoSolicitudCitaController;
use App\Http\Controllers\FrecuenciaController;
use App\Http\Controllers\MotivoOrdenReparacionController;
use App\Http\Controllers\seguroconfiguracionController;
use App\Http\Controllers\RegitrarVehiculoController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\RegitrarFacturaController;
use App\Http\Controllers\consultarMantenimientoVehiculoController;
use App\Http\Controllers\consultarSugerenciaController;
use App\Http\Controllers\TipoaceiteController;
use App\Http\Controllers\TipomotorController;
use App\Http\Controllers\EdadvehiculoController;
use App\Http\Controllers\TipoEmpleadoController;
use App\Http\Controllers\RegistrarServicioMantenimientoController;
use App\Http\Controllers\ServicioMantenimientoController;
use App\Http\Controllers\MantenimientoMantenimientoController;
use App\Http\Controllers\ServicioAceiteController;
use App\Http\Controllers\AceiteController;
use App\Http\Controllers\AceiteMotorController;
use App\Http\Controllers\SugerenciaController;
use App\Http\Controllers\TipoMantenimientoController;
use App\Http\Controllers\AceiteSugerenciaController;
use App\Http\Controllers\MotorSugerenciaControllerr;
use App\Models\EstadoOrdenReparacion;


/**
 * Ruta para descargar el manual de usuario.
 */
Route::get('/download-manual', [ManualDeUsuarioController::class, 'downloadFile']);

/**
 * Ruta de inicio.
 */
Route::get('/', function () {
    return view('welcome');
});

/**
 * Grupo de rutas que requieren autenticación y verificación.
 */
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    /**
     * Ruta del panel de control.
     */
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/consultar-factura/{numerofactura?}', [consultarFacturaController::class, 'consultarFactura'])
    ->middleware(['auth'])
    ->name('consultar-factura');

Route::get('/consultar-cotizacion/{numerocotizacion?}', [consultarCotizacionController::class, 'consultarCotizacion'])
    ->middleware(['auth'])
    ->name('consultar-cotizacion-factura');

Route::get('/registrar-vehiculo/{vehiculo?}', [registrarVehiculoController::class, 'registrarVehiculo'])
    ->middleware(['auth'])
    ->name('registrar-vehiculo');

Route::get('/consultar-subasta/{numerosubasta?}', [consultarSubastaController::class, 'consultarSubasta'])
    ->middleware(['auth'])
    ->name('consultar-subasta');

Route::get('/consultar-renta/{numerorenta?}', [consultarRentaController::class, 'consultarRenta'])
    ->middleware(['auth'])
    ->name('consultar-renta');

Route::get('/consultar-nomina/{numeronomina?}', [consultarNominaController::class, 'consultarNomina'])
    ->middleware(['auth'])
    ->name('consultar-nomina');

Route::get('/registro-renta', [registrarRentaController::class, 'registroRenta'])
    ->middleware(['auth'])
    ->name('registro-renta');

Route::get('/registro-cliente', [registrarClienteController::class, 'registroCliente'])
    ->middleware(['auth'])
    ->name('registro-cliente');

Route::get('/registro-usuario', [registrarUsuarioController::class, 'registroUsuario'])
    ->middleware(['auth'])
    ->name('registro-usuario');

Route::get('/registro-suplidor', [registrarSuplidorController::class, 'registrosuplidor'])
    ->middleware(['auth'])
    ->name('registro-suplidor');

Route::get('/consultar-cotizacion/{numerocotizacion?}', [consultarCotizacionController::class, 'consultarCotizacion'])
    ->middleware(['auth'])
    ->name('consultar-cotizacion-factura');

Route::get('/consultar-subasta/{numerosubasta?}', [consultarSubastaController::class, 'consultarSubasta'])
    ->middleware(['auth'])
    ->name('consultar-subasta');

Route::get('/consultar-renta/{numerorenta?}', [consultarRentaController::class, 'consultarRenta'])
    ->middleware(['auth'])
    ->name('consultar-renta');

Route::get('/consultar-nomina/{numeronomina?}', [consultarNominaController::class, 'consultarNomina'])
    ->middleware(['auth'])
    ->name('consultar-nomina');

Route::get('/consultavehiculo/{numerovehiculo?}', [consultarVehiculoController::class, 'consultarVehiculo'])
    ->middleware(['auth'])
    ->name('consultavehiculo');

Route::get('/consultar-renta-cotizacion/{numerocotizacionRenta?}', [consultarcotizacionRentaController::class, 'consultarcotizacionRenta'])
    ->middleware(['auth'])
    ->name('consultar-renta-cotizacion');

Route::get('/factura/{factura?}', [registrarFacturaController::class, 'registrarFactura'])
    ->middleware(['auth'])
    ->name('factura');

Route::get('/registrarCotizacionFactura/{numerocotizacionfactura?}', [registrarCotizacionFacturaController::class, 'registrarCotizacionFactura'])
    ->middleware(['auth'])
    ->name('registrarCotizacionFactura');

Route::get('/cotizacion-renta', [registrarCotizacionRentaController::class, 'index'])
    ->middleware(['auth'])
    ->name('cotizacion-renta');

Route::get('/subasta', [registrarSubastaController::class, 'registrarSubasta'])
    ->middleware(['auth'])
    ->name('registrarSubasta');

Route::get('/consultar-cliente/{datocliente?}', [consultarClienteController::class, 'consultarCliente'])
    ->middleware(['auth'])
    ->name('consultar-cliente');

Route::get('/consultar-suplidor/{datosuplidor?}', [consultarSuplidorController::class, 'consultarsuplidor'])
    ->middleware(['auth'])
    ->name('consultar-suplidor');

Route::get('/historial-pagos/{numeropago?}', [historialPagosController::class, 'historialpagos'])
    ->middleware(['auth'])
    ->name('historial-pagos');

Route::get('/solicitud-prestamos-vehiculo/{numerosolicitudprestamo?}', [solicitudPrestamoVehiculoController::class, 'solicitudPrestamoVehiculo'])
    ->middleware(['auth'])
    ->name('solicitud-prestamos-vehiculo');

Route::get('/retroalimentacion-cliente/{documentocliente?}', [retroalimentacionClienteController::class, 'documentoCliente'])
    ->middleware(['auth'])
    ->name('retroalimentacion-cliente');

Route::get('/retroalimentacion-empleado/{documentoempleado?}', [retroalimentacionEmpleadoController::class, 'documentoEmpleado'])
    ->middleware(['auth'])
    ->name('retroalimentacion-empleado');

Route::get('/consultar-retroalimentacion/{casoretroalimentacion?}', [consultarRetroalimentacionController::class, 'casoRetroalimentacion'])
    ->middleware(['auth'])
    ->name('consultar-retroalimentacion');

Route::post('/logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');
Route::get('/configurar-vehiculo/{configuracionvehiculo?}', [configurarVehiculoController::class, 'configuracionVehiculo'])
    ->middleware(['auth'])
    ->name('configurar-vehiculo');

Route::get('/configuracion-general/{configuraciongeneral?}', [configuracionGeneralController::class, 'configuracionGeneral'])
    ->middleware(['auth'])
    ->name('configuracion-general');

Route::get('/consultar-orden-compra/{codigoordencompra?}', [consultarOrdenCompraController::class, 'codigoOrdenCompra'])
    ->middleware(['auth'])
    ->name('consultar-orden-compra');

Route::get('/consultar-compra/{codigocompra?}', [consultarCompraController::class, 'codigoCompra'])
    ->middleware(['auth'])
    ->name('consultar-compra');

Route::get('/mantenimiento-prestamos-vehiculo{mantenimientoPrestamosVehiculo?}', [prestamosVehiculoController::class, 'mantenimientoPrestamosVehiculo'])
    ->middleware(['auth'])
    ->name('mantenimiento-prestamos-vehiculo');

Route::get('/Abonar-prestamo{abonarprestamo?}', [abonoPrestamosVehiculoController::class, 'abonarPrestamo'])
    ->middleware(['auth'])
    ->name('Abonar-prestamo');

Route::get('/registrar-orden-compra{numeroordencompra?}', [registrarOrdenCompraController::class, 'registrarOrdenCompra'])
    ->middleware(['auth'])
    ->name('registrar-orden-compra');

Route::get('/registrar-compra{numerocompra?}', [registrarCompraController::class, 'registrarCompra'])
    ->middleware(['auth'])
    ->name('registrar-compra');

Route::get('/configuracion-cxp/{configuracioncxp?}', [configuracionCXPController::class, 'configuracionCXP'])
    ->middleware(['auth'])
    ->name('configuracion-cxp');

Route::get('/configurar-nomina/{configurarnomina?}', [configurarNominaController::class, 'configurarNomina'])
    ->middleware(['auth'])
    ->name('configurar-nomina');

//Route::get('/registrar-empleado{codigoempleado?}', [registrarEmpleadoController::class, 'codigoEmpleado'])
//    ->middleware(['auth'])
//    ->name('registrar-empleado');

Route::get('/consultar-empleado/{datoempleado?}', [consultarEmpleadoController::class, 'consultarEmpleado'])
    ->middleware(['auth'])
    ->name('consultar-empleado');

Route::get('/configurar-inventario/{vehiculo?}', [configurarInventarioController::class, 'configurarInventario'])
    ->middleware(['auth'])
    ->name('configurar-inventario');

Route::get('/registrar-inventario/{vehiculo?}', [registrarInventarioController::class, 'registrarInventario'])
    ->middleware(['auth'])
    ->name('registrar-inventario');

Route::get('/consultar-inventario/{vehiculo?}', [consultarInventarioController::class, 'consultarInventario'])
    ->middleware(['auth'])
    ->name('consultar-inventario');

Route::get('/solicitud-cita/{solicitudcita?}', [registrarSolicitudcitaController::class, 'solicitudCita'])
    ->middleware(['auth'])
    ->name('solicitud-cita');

Route::get('/prueba-conduccion/{pruebaconduccion?}', [registrarPruebaConduccionController::class, 'pruebaConduccion'])
    ->middleware(['auth'])
    ->name('prueba-conduccion');

Route::get('/orden-reparacion/{ordenreparacion?}', [registrarOrdenReparacionController::class, 'ordenReparacion'])
    ->middleware(['auth'])
    ->name('orden-reparacion');

Route::get('/mantenimiento-vehiculo/{mantenimientovehiculo?}', [registrarMantenimientoVehiculoController::class, 'mantenimientoVehiculo'])
    ->middleware(['auth'])
    ->name('mantenimiento-vehiculo');

Route::get('/configuracion-mantenimiento/{configuracionmantenimiento?}', [configuracionMantenimientoController::class, 'configuracionMantenimiento'])
    ->middleware(['auth'])
    ->name('configuracion-mantenimiento');

Route::get('/consulta-mantenimiento/{consultamantenimiento?}', [consultaMantenimientoController::class, 'consultaMantenimiento'])
->middleware(['auth'])
->name('consulta-mantenimiento');

Route::Post('/Estadocompras/create', [EstadocompraController::class, 'store'])
    ->middleware(['auth'])
    ->name('Estadocompras.store');

Route::get('/Estadocompras', [EstadocompraController::class, 'index'])
    ->middleware(['auth'])
    ->name('Estadocompras');

Route::Post('/Tipovehiculoconcesionario/create', [TipovehiculoconcesionarioController::class, 'store'])
    ->middleware(['auth'])
    ->name('Tipovehiculoconcesionario.store');

Route::get('/Tipovehiculoconcesionario', [TipovehiculoconcesionarioController::class, 'index'])
    ->middleware(['auth'])
    ->name('Tipovehiculoconcesionario');

Route::Post('/Tipoitbis/create', [TipoitbisController::class, 'store'])
    ->middleware(['auth'])
    ->name('Tipoitbis.store');

Route::get('/Tipoitbis', [TipoitbisController::class, 'index'])
    ->middleware(['auth'])
    ->name('Tipoitbis');

Route::Post('/Clasificacionvehiculo/create', [ClasificacionvehiculoController::class, 'store'])
    ->middleware(['auth'])
    ->name('Clasificacionvehiculo.store');

Route::get('/Clasificacionvehiculo', [ClasificacionvehiculoController::class, 'index'])
    ->middleware(['auth'])
    ->name('Clasificacionvehiculo');

Route::Post('/Segmentomercado/create', [SegmentomercadoController::class, 'store'])
    ->middleware(['auth'])
    ->name('Segmentomercado.store');

Route::get('/Segmentomercado', [SegmentomercadoController::class, 'index'])
    ->middleware(['auth'])
    ->name('Segmentomercado');

Route::Post('/Tipovehiculo/create', [TipovehiculoController::class, 'store'])
    ->middleware(['auth'])
    ->name('Tipovehiculo.store');

Route::get('/Tipovehiculo', [TipovehiculoController::class, 'index'])
    ->middleware(['auth'])
    ->name('Tipovehiculo');

Route::Post('/Traccionvehiculo/create', [TraccionvehiculoController::class, 'store'])
    ->middleware(['auth'])
    ->name('Traccionvehiculo.store');

Route::get('/Traccionvehiculo', [TraccionvehiculoController::class, 'index'])
    ->middleware(['auth'])
    ->name('Traccionvehiculo');

Route::Post('/Transmisionvehiculo/create', [TransmisionvehiculoController::class, 'store'])
    ->middleware(['auth'])
    ->name('Transmisionvehiculo.store');

Route::get('/Transmisionvehiculo', [TransmisionvehiculoController::class, 'index'])
    ->middleware(['auth'])
    ->name('Transmisionvehiculo');

Route::Post('/Estadovehiculo/create', [EstadovehiculoController::class, 'store'])
    ->middleware(['auth'])
    ->name('Estadovehiculo.store');

Route::get('/Estadovehiculo', [EstadovehiculoController::class, 'index'])
    ->middleware(['auth'])
    ->name('Estadovehiculo');

Route::Post('/Acabadocolorvehiculo/create', [AcabadocolorvehiculoController::class, 'store'])
    ->middleware(['auth'])
    ->name('Acabadocolorvehiculo.store');

Route::get('/Acabadocolorvehiculo', [AcabadocolorvehiculoController::class, 'index'])
    ->middleware(['auth'])
    ->name('Acabadocolorvehiculo');

Route::Post('/Grupovehiculo/create', [GrupovehiculoController::class, 'store'])
    ->middleware(['auth'])
    ->name('Grupovehiculo.store');

Route::get('/Grupovehiculo', [GrupovehiculoController::class, 'index'])
    ->middleware(['auth'])
    ->name('Grupovehiculo');

Route::Post('/Marcavehiculo/create', [MarcavehiculoController::class, 'store'])
    ->middleware(['auth'])
    ->name('Marcavehiculo.store');

Route::get('/Marcavehiculo', [MarcavehiculoController::class, 'index'])
    ->middleware(['auth'])
    ->name('Marcavehiculo');

Route::Post('/pais/create', [paisController::class, 'store'])
    ->middleware(['auth'])
    ->name('pais.store');

Route::get('/pais', [paisController::class, 'index'])
    ->middleware(['auth'])
    ->name('pais');

Route::Post('/Tiposeguro/create', [TiposeguroController::class, 'store'])
    ->middleware(['auth'])
    ->name('Tiposeguro.store');

Route::get('/Tiposeguro', [TiposeguroController::class, 'index'])
    ->middleware(['auth'])
    ->name('Tiposeguro');

Route::Post('/Tiporiesgo/create', [TiporiesgoController::class, 'store'])
    ->middleware(['auth'])
    ->name('Tiporiesgo.store');

Route::get('/Tiporiesgo', [TiporiesgoController::class, 'index'])
    ->middleware(['auth'])
    ->name('Tiporiesgo');

Route::Post('/Estadopoliza/create', [EstadopolizaController::class, 'store'])
    ->middleware(['auth'])
    ->name('Estadopoliza.store');

Route::get('/Estadopoliza', [EstadopolizaController::class, 'index'])
    ->middleware(['auth'])
    ->name('Estadopoliza');

Route::Post('/Condicionseguro/create', [CondicionseguroController::class, 'store'])
    ->middleware(['auth'])
    ->name('Condicionseguro.store');

Route::get('/Condicionseguro', [CondicionseguroController::class, 'index'])
    ->middleware(['auth'])
    ->name('Condicionseguro');

Route::Post('/Moneda/create', [MonedaController::class, 'store'])
    ->middleware(['auth'])
    ->name('Moneda.store');

Route::get('/Moneda', [MonedaController::class, 'index'])
    ->middleware(['auth'])
    ->name('Moneda');

// CANAL DE COMUNICACION
Route::Post('/Canalcomunicacion/create', [CanalcomunicacionController::class, 'store'])
    ->middleware(['auth'])
    ->name('Canalcomunicacion.store');

Route::get('/Canalcomunicacion', [CanalcomunicacionController::class, 'index'])
    ->middleware(['auth'])
    ->name('Canalcomunicacion');

// CONDICION DE LA FACTURA
Route::Post('/Condicionfactura/create', [CondicionfacturaController::class, 'store'])
    ->middleware(['auth'])
    ->name('Condicionfactura.store');

Route::get('/Condicionfactura', [CondicionfacturaController::class, 'index'])
    ->middleware(['auth'])
    ->name('Condicionfactura');

// METODO DE PAGO
Route::Post('/Metodopago/create', [MetodopagoController::class, 'store'])
    ->middleware(['auth'])
    ->name('Metodopago.store');

Route::get('/Metodopago', [MetodopagoController::class, 'index'])
    ->middleware(['auth'])
    ->name('Metodopago');

Route::get('/configurar-vehiculo', [VehiculoController::class, 'showConfigurarVehiculo']);
Route::apiResource('vehiculos', consultarVehiculoController::class);

Route::Post('/Modelovehiculo/create', [ModelovehiculoController::class, 'store'])
    ->middleware(['auth'])
    ->name('Modelovehiculo.store');

Route::get('/Modelovehiculo', [ModelovehiculoController::class, 'index'])
    ->middleware(['auth'])
    ->name('Modelovehiculo');

Route::Post('/configurar-vehiculo/create', [configurarVehiculoController::class, 'store'])
    ->middleware(['auth'])
    ->name('configurar-vehiculo.store');

Route::get('/configurar-vehiculo', [configurarVehiculoController::class, 'index'])
    ->middleware(['auth'])
    ->name('configurar-vehiculo');

Route::Post('/Clientes/create', [ClientesController::class, 'store'])
    ->middleware(['auth'])
    ->name('Clientes.store');

Route::Post('/Colorexteriorvehiculo/create', [ColorexteriorvehiculoController::class, 'store'])
    ->middleware(['auth'])
    ->name('Colorexteriorvehiculo.store');

Route::Post('/provincia/create', [ProvinciaController::class, 'store'])
    ->middleware(['auth'])
    ->name('provincia.store');

Route::Post('/ciudad/create', [CiudadController::class, 'store'])
    ->middleware(['auth'])
    ->name('ciudad.store');

Route::Post('/sector/create', [SectorController::class, 'store'])
    ->middleware(['auth'])
    ->name('sector.store');

Route::Post('/aseguradora/create', [AseguradoraController::class, 'store'])
    ->middleware(['auth'])
    ->name('aseguradora.store');

Route::Post('/aseguradoravehiculo/create', [AseguradoraVehiculoController::class, 'store'])
    ->middleware(['auth'])
    ->name('aseguradoravehiculo.store');

Route::Post('/Ubicacion/create', [UbicacionController::class, 'store'])
    ->middleware(['auth'])
    ->name('Ubicacion.store');

Route::Post('/Almacen/create', [AlmacenController::class, 'store'])
    ->middleware(['auth'])
    ->name('Almacen.store');

Route::Post('/empresa/create', [EmpresaController::class, 'store'])
    ->middleware(['auth'])
    ->name('empresa.store');

Route::Post('/sucursal/create', [SucursalController::class, 'store'])
    ->middleware(['auth'])
    ->name('sucursal.store');

Route::Post('/Banco/create', [BancoController::class, 'store'])
    ->middleware(['auth'])
    ->name('Banco.store');

Route::Post('/Cuentabanco/create', [CuentabancoController::class, 'store'])
    ->middleware(['auth'])
    ->name('Cuentabanco.store');

Route::Post('/Garantia/create', [GarantiaController::class, 'store'])
    ->middleware(['auth'])
    ->name('Garantia.store');

Route::Post('/Coberturaseguro/create', [CoberturaseguroController::class, 'store'])
    ->middleware(['auth'])
    ->name('Coberturaseguro.store');

Route::Post('/companiaseguro/create', [CompaniaseguroController::class, 'store'])
    ->middleware(['auth'])
    ->name('companiaseguro.store');

Route::Post('/seguroconfiguracion/create', [seguroconfiguracionController::class, 'store'])
    ->middleware(['auth'])
    ->name('seguroconfiguracion.store');

Route::Post('/RegitrarVehiculo/create', [RegitrarVehiculoController::class, 'store'])
    ->middleware(['auth'])
    ->name('RegitrarVehiculo.store');

Route::Put('/EditarVehiculo/{IdVehiculo}', [RegitrarVehiculoController::class, 'update'])
    ->middleware(['auth'])
    ->name('RegitrarVehiculo.update');

Route::Delete('/EliminarVehiculo/{IdVehiculo}', [RegitrarVehiculoController::class, 'destroy'])
->middleware(['auth'])
->name('RegitrarVehiculo.destroy');

Route::get('/DescargarFactura/{IdVenta}', [PDFController::class, 'generatePDF']);

Route::Post('/RegitrarFactura/create', [RegitrarFacturaController::class, 'store'])
    ->middleware(['auth'])
    ->name('RegitrarFactura.store');

Route::get('/consultar-mantenimiento-vehiculo/{mantenimiento?}', [consultarMantenimientoVehiculoController::class, 'consultarMantenimientoVehiculo'])
    ->middleware(['auth'])
    ->name('consultar-mantenimiento-vehiculo');

Route::get('/consultar-sugerencia/{sugerenciamantenimiento?}', [consultarSugerenciaController::class, 'consultarSugerencia'])
    ->middleware(['auth'])
    ->name('consultar-sugerencia');
Route::Post('/EstadoSolicitudCita/create', [EstadoSolicitudCitaController::class, 'store'])
->middleware(['auth'])
->name('EstadoSolicitudCita.store');

Route::Post('/EstadoOrdenReparacion/create', [EstadoOrdenReparacionController::class, 'store'])
->middleware(['auth'])
->name('EstadoOrdenReparacion.store');

Route::Post('/Frecuencia/create', [FrecuenciaController::class, 'store'])
->middleware(['auth'])
->name('Frecuencia.store');

Route::Post('/TipoMantenimiento/create', [TipoMantenimientoController::class, 'store'])
->middleware(['auth'])
->name('TipoMantenimiento.store');

Route::Post('/MotivoOrdenReparacion/create', [MotivoOrdenReparacionController::class, 'store'])
->middleware(['auth'])
->name('MotivoOrdenReparacion.store');

Route::Post('/Tipoaceite/create', [TipoaceiteController::class, 'store'])
    ->middleware(['auth'])
    ->name('Tipoaceite.store');

Route::Post('/Aceite/create', [AceiteController::class, 'store'])
    ->middleware(['auth'])
    ->name('Aceite.store');


//Route::get('/Tipoaceite', [TipoaceiteController::class, 'index'])
//    ->middleware(['auth'])
//    ->name('Tipoaceite');

Route::Post('/Tipomotor/create', [TipomotorController::class, 'store'])
    ->middleware(['auth'])
    ->name('Tipomotor.store');

Route::Post('/Edadvehiculo/create', [EdadvehiculoController::class, 'store'])
    ->middleware(['auth'])
    ->name('Edadvehiculo.store');

//Leudy
Route::Post('/TipoEmpleado/create', [TipoEmpleadoController::class, 'store'])
    ->middleware(['auth'])
    ->name('TipoEmpleado.store');

Route::get('/TipoEmpleado', [TipoEmpleadoController::class, 'index'])
    ->middleware(['auth'])
    ->name('TipoEmpleado');

// Registro de empleado
Route::Post('/RegistrarEmpleado/create', [RegistrarEmpleadoController::class, 'store'])
    ->middleware(['auth'])
    ->name('RegistrarEmpleado.store');

//Route::get('/mantenimiento-servicio/{mantenimientoservicio?}', [registrarMantenimientoServicioController::class, 'mantenimientoservicio'])
//    ->middleware(['auth'])
//    ->name('mantenimiento-servicio');
//
//Route::get('/ServicioMantenimiento/{serviciomantenimiento?}', [ServicioMantenimientoController::class, 'serviciomantenimiento'])
//    ->middleware(['auth'])
//    ->name('ServicioMantenimiento');

Route::Post('/servicio-mantenimiento/create', [ServicioMantenimientoController::class, 'store'])
    ->middleware(['auth'])
    ->name('servicio-mantenimiento.store');

Route::get('/servicio-mantenimiento', [ServicioMantenimientoController::class, 'index'])
    ->middleware(['auth'])
    ->name('servicio-mantenimiento');

Route::Post('/mantenimiento-mantenimiento/create', [MantenimientoMantenimientoController::class, 'store'])
    ->middleware(['auth'])
    ->name('mantenimiento-mantenimiento.store');

Route::Post('/RegistrarServicioMantenimiento/create', [RegistrarServicioMantenimientoController::class, 'store'])
    ->middleware(['auth'])
    ->name('RegistrarServicioMantenimiento.store');

Route::Post('/servicio-aceite/create', [ServicioAceiteController::class, 'store'])
->middleware(['auth'])
->name('servicio-aceite.store');

Route::get('/suggestion', [SugerenciaController::class, 'index'])
    ->middleware(['auth'])
    ->name('suggestion');

Route::Post('/AceiteMotor/create', [AceiteMotorController::class, 'store'])
    ->middleware(['auth'])
    ->name('AceiteMotor.store');

// Leudy Was here