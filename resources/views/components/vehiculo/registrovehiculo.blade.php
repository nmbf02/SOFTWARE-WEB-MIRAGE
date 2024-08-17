<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Registrar vehículo') }}
        </h2>
    </x-slot>
    @include ('aside')

    <div>
        <div class="flex overflow-hidden bg-white">
            <div class="bg-gray-900 opacity-50 hidden fixed inset-0 z-10" id="sidebarBackdrop"></div>
            <div id="main-content" class="h-full w-full bg-white relative overflow-y-auto lg:ml-64">
                <div class="bg-white dark:bg-gray-800 transition-colors duration-300">
                    <div class="containerh-full w-full bg-white relative overflow-y-auto lg:ml">
                        <div class="bg-white dark:bg-gray-700 {{-- shadow rounded-lg --}} p-6">
                            <h1 class="text-xl font-semibold mb-4 text-gray-900 dark:text-gray-100">Registrar vehículo
                            </h1>
                            <hr style="border-color: #FF914D" class="p-2">
                            {{-- <p class="text-gray-600 dark:text-gray-300 mb-6">Use a permanent address where you can
                                receive mail.</p> --}}

                            @if (request()->routeIs('registerVehicle' ))
                                <form method="POST" action="{{ route('RegitrarVehiculo.store') }}">
                                    @else
                                        <form method="POST"
                                              action="{{ route('RegitrarVehiculo.update',@$vehiculo->IdVehiculo) }}">
                                            @method("PUT")
                                            @endif

                                            @csrf
                                            <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                                <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Información
                                                    general</h6>
                                                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
                                                    <div>
                                                        <label for="color"
                                                               class="block text-sm font-medium text-gray-700">VIN</label>
                                                        <input name="VIN" value="{{@$vehiculo->VIN}}" type="text"
                                                               placeholder="VIN"
                                                               class="border p-2 rounded w-full">
                                                    </div>
                                                    <div>
                                                        <label for="color"
                                                               class="block text-sm font-medium text-gray-700">Descripción</label>
                                                        <input name="descripcion" value="{{@$vehiculo->Descripcion}}"
                                                               type="text" placeholder="Descripción"
                                                               class="border p-2 rounded w-full">
                                                    </div>
                                                    <div>
                                                        <label for="estadoVehiculo"
                                                               class="block text-sm font-medium text-gray-700">Estado</label>
                                                        <select value="{{@$vehiculo->IdEstadoVehiculo}}"
                                                                name="estadoVehiculo" id="estadoVehiculo"
                                                                class="border-0 px-3 py-3 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                                placeholder="Seleccione un estado">
                                                            @foreach ($estadoVehiculo as $vehiculoestado)
                                                                <option value="{{ $vehiculoestado->IdEstadoVehiculo }}">
                                                                    {{ $vehiculoestado->Descripcion }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="p-2"></div>
                                            <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                                <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Descripción
                                                    detallada</h6>
                                                <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-4">
                                                    {{-- <div>
                                                        <label for="marcaVehiculo"
                                                            class="block text-sm font-medium text-gray-700">Marca</label>
                                                        <select name="marcaVehiculo" id="marcaVehiculo"
                                                            class="border-0 px-3 py-3 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                            placeholder="Seleccione una marca">
                                                            @foreach ($marcaVehiculo as $vehiculomarca)
                                                                <option value="{{ $vehiculomarca->IdMarcaVehiculo }}">
                                                                    {{ $vehiculomarca->Descripcion }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div> --}}
                                                    <div>
                                                        <label for="modeloVehiculo"
                                                               class="block text-sm font-medium text-gray-700">Modelo</label>
                                                        <select value="{{@$vehiculo->IdModeloVehiculo}}"
                                                                name="modeloVehiculo" id="modeloVehiculo"
                                                                class="border-0 px-3 py-3 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                                placeholder="Seleccione un modelo">
                                                            @foreach ($modeloVehiculo as $vehiculomodelo)
                                                                <option value="{{ $vehiculomodelo->IdModeloVehiculo }}">
                                                                    {{ $vehiculomodelo->Descripcion }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div>
                                                        <label for="colorvehiculo"
                                                               class="block text-sm font-medium text-gray-700">Color</label>
                                                        <select value="{{@$vehiculo->IdColorVehiculo}}"
                                                                name="colorvehiculo" id="colorvehiculo"
                                                                class="border-0 px-3 py-3 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                                placeholder="Seleccione un color">
                                                            @foreach ($colorvehiculo as $vehiculocolor)
                                                                <option value="{{ $vehiculocolor->IdColorVehiculo }}">
                                                                    {{ $vehiculocolor->Descripcion }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    {{-- <div>
                                                        <label for="acabadoVehiculo"
                                                            class="block text-sm font-medium text-gray-700">Acabado</label>
                                                        <select name="acabadoVehiculo" id="acabadoVehiculo"
                                                            class="border-0 px-3 py-3 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                            placeholder="Seleccione un acabado">
                                                            @foreach ($acabadoVehiculo as $vehiculoacabado)
                                                                <option value="{{ $vehiculoacabado->IdAcabadoColorVehiculo }}">
                                                                    {{ $vehiculoacabado->Descripcion }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div> --}}
                                                    <div>
                                                        <label for="tipoVehiculo"
                                                               class="block text-sm font-medium text-gray-700">Tipo</label>
                                                        <select value="{{@$vehiculo->IdTipoVehiculo}}"
                                                                name="tipoVehiculo" id="tipoVehiculo"
                                                                class="border-0 px-3 py-3 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                                placeholder="Seleccione un tipo">
                                                            @foreach ($tipoVehiculo as $vehiculotipo)
                                                                <option value="{{ $vehiculotipo->IdTipoVehiculo }}">
                                                                    {{ $vehiculotipo->Descripcion }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div>
                                                        <label for="traccionVehiculo"
                                                               class="block text-sm font-medium text-gray-700">Tracción</label>
                                                        <select value="{{@$vehiculo->IdTraccionVehiculo}}"
                                                                name="traccionVehiculo" id="traccionVehiculo"
                                                                class="border-0 px-3 py-3 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                                placeholder="Seleccione una tracción">
                                                            @foreach ($traccionVehiculo as $vehiculotraccion)
                                                                <option
                                                                    value="{{ $vehiculotraccion->IdTraccionVehiculo }}">
                                                                    {{ $vehiculotraccion->Descripcion }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div>
                                                        <label for="trasnmisionVehiculo"
                                                               class="block text-sm font-medium text-gray-700">Transmisión</label>
                                                        <select value="{{@$vehiculo->IdTransmisionVehiculo}}"
                                                                name="trasnmisionVehiculo" id="trasnmisionVehiculo"
                                                                class="border-0 px-3 py-3 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                                placeholder="Seleccione una transmisión">
                                                            @foreach ($trasnmisionVehiculo as $vehiculotrasnmision)
                                                                <option
                                                                    value="{{ $vehiculotrasnmision->IdTransmisionVehiculo }}">
                                                                    {{ $vehiculotrasnmision->Descripcion }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div>
                                                        <label for="ClasificacionVehiculo"
                                                               class="block text-sm font-medium text-gray-700">Clasificación</label>
                                                        <select value="{{@$vehiculo->IdClasificacionVehiculo}}"
                                                                name="ClasificacionVehiculo" id="ClasificacionVehiculo"
                                                                class="border-0 px-3 py-3 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                                placeholder="Seleccione una clasificación">
                                                            @foreach ($ClasificacionVehiculo as $clasificacion)
                                                                <option
                                                                    value="{{ $clasificacion->IdClasificacionVehiculo }}">
                                                                    {{ $clasificacion->Descripcion }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    {{--kilometraje--}}
                                                    <div>
                                                        <label for="kilometraje"
                                                               class="block text-sm font-medium text-gray-700">Kilometraje</label>
                                                        <input value="{{@$vehiculo->kilometraje}}" name="kilometraje"
                                                               id="kilometraje"
                                                               type="number" min="0"
                                                               placeholder="kilometraje actual"
                                                               class="border p-2 rounded w-full">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="p-2"></div>
                                            <div>
                                                <label for="finalidadVehiculo"
                                                       class="block text-sm font-medium text-gray-700">Finalidad del
                                                    vehículo</label>
                                                <select value="{{@$vehiculo->IdTipoVehiculoConcesionario}}"
                                                        name="finalidadVehiculo" id="finalidadVehiculo"
                                                        class="border-0 px-3 py-3 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                        placeholder="Uso">
                                                    @foreach ($finalidadVehiculo as $vehiculofinalidad)
                                                        <option
                                                            value="{{ $vehiculofinalidad->IdTipoVehiculoConcesionario }}">
                                                            {{ $vehiculofinalidad->Descripcion }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="p-2"></div>
                                            <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                                <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Detalles del
                                                    motor</h6>
                                                <div>
                                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                                                            <!-- Motor del cilindro -->
                                                            <div>
                                                                <label for="motor-cilindro"
                                                                       class="block text-sm font-medium text-gray-700">Motor
                                                                    del
                                                                    cilindro</label>
                                                                <input value="{{@$vehiculo->MotorCilindro}}"
                                                                       name="motorcilindro"
                                                                       id="motor-cilindro" type="text"
                                                                       placeholder="Motor del cilindro"
                                                                       class="border p-2 rounded w-full">
                                                            </div>
                                                            <!-- Serie -->
                                                            <div>
                                                                <label for="serie"
                                                                       class="block text-sm font-medium text-gray-700">Serie</label>
                                                                <input value="{{@$vehiculo->Serie}}" name="serie"
                                                                       id="serie"
                                                                       type="text"
                                                                       placeholder="Serie"
                                                                       class="border p-2 rounded w-full">
                                                            </div>
                                                        </div>
                                                        <div
                                                        {{--Colocar el filtro de tipo de motor--}}
                                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                                                            {{--Tipo de motor--}}
                                                            <div class="mb-4">
                                                                <label for="MotorVehiculo"
                                                                       class="block text-sm font-medium text-gray-700">Tipo
                                                                    de motor según combustible</label>
                                                                <select value="{{@$vehiculo->IdMotor}}"
                                                                        name="MotorVehiculo" id="MotorVehiculo"
                                                                        class="border-0 px-3 py-3 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                                        placeholder="Seleccione un tipo de motor">
                                                                    @foreach ($MotorVehiculo as $motor)
                                                                        <option value="{{ $motor->IdMotor }}">
                                                                            {{ $motor->Descripcion }}
                                                                        </option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            {{--Tipo de aceite--}}
                                                            <div>
                                                                <label for="AceiteVehiculo"
                                                                       class="block text-sm font-medium text-gray-700">Tipo
                                                                    de aceite</label>
                                                                <select value="{{@$vehiculo->IdAceite}}"
                                                                        name="AceiteVehiculo" id="AceiteVehiculo"
                                                                        class="border-0 px-3 py-3 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                                        placeholder="Seleccione un tipo de aceite">
                                                                    @foreach ($AceiteVehiculo as $aceite)
                                                                        <option value="{{ $aceite->IdAceite }}">
                                                                            {{ $aceite->Descripcion }}
                                                                        </option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="p-2"></div>
                                            <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                                <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Inventario</h6>
                                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                                                    <div>
                                                        <label for="ubicacionInventario"
                                                               class="block text-sm font-medium text-gray-700">Ubicación</label>
                                                        <select value="{{@$vehiculo->IdUbicacion}}"
                                                                name="ubicacionInventario" id="ubicacionInventario"
                                                                class="border-0 px-3 py-3 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                                placeholder="Seleccione una ubicación">
                                                            @foreach ($ubicacionInventario as $ubicacion)
                                                                <option value="{{ $ubicacion->IdUbicacion }}">
                                                                    {{ $ubicacion->Descripcion }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="p-2"></div>
                                            <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                                <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Configuración
                                                    general</h6>
                                                <div>
                                                    <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-4">
                                                        <div class="mb-4">
                                                            <label for="anoVehiculo"
                                                                   class="block text-sm font-medium text-gray-700">Año
                                                                del
                                                                Vehículo</label>
                                                            <input value="{{@$vehiculo->AnoVehiculo}}"
                                                                   name="anoVehiculo" id="anoVehiculo" type="number"
                                                                   placeholder="2024" class="border p-2 rounded w-full">
                                                        </div>

                                                        <div class="mb-4">
                                                            <label for="precio"
                                                                   class="block text-sm font-medium text-gray-700">Precio</label>
                                                            <input value="{{@$vehiculo->Precio}}" name="precio"
                                                                   id="precio" type="number"
                                                                   placeholder="0.00" class="border p-2 rounded w-full">
                                                        </div>
                                                        <div class="mb-4">
                                                            <label for="SeguroVehiculo"
                                                                   class="block text-sm font-medium text-gray-700">Seguro
                                                                del
                                                                vehículo</label>
                                                            <select value="{{@$vehiculo->IdSeguroVehiculo}}"
                                                                    name="SeguroVehiculo" id="SeguroVehiculo"
                                                                    class="border-0 px-3 py-3 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                                    placeholder="Seleccione un seguro">
                                                                @foreach ($SeguroVehiculo as $seguro)
                                                                    <option value="{{ $seguro->IdSeguroVehiculo }}">
                                                                        {{ $seguro->MontoCosto }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="mb-4">
                                                            <label for="placa"
                                                                   class="block text-sm font-medium text-gray-700">Número
                                                                de
                                                                placa</label>
                                                            <input value="{{@$vehiculo->Placa}}" name="numeroplaca"
                                                                   id="placa" type="text"
                                                                   placeholder="Número de placa"
                                                                   class="border p-2 rounded w-full">
                                                        </div>

                                                        <div class="mb-4">
                                                            <label for="placaExhibicion"
                                                                   class="block text-sm font-medium text-gray-700">Placa
                                                                de
                                                                exhibición</label>
                                                            <input value="{{@$vehiculo->PlacaExhibicion}}"
                                                                   name="placaexhibicion" id="placaExhibicion"
                                                                   type="text"
                                                                   placeholder="Placa de Exhibición"
                                                                   class="border p-2 rounded w-full">
                                                        </div>

                                                        <div class="mb-4">
                                                            <label for="chasis"
                                                                   class="block text-sm font-medium text-gray-700">Chasis</label>
                                                            <input value="{{@$vehiculo->Chasis}}" name="chasis"
                                                                   id="chasis" type="text"
                                                                   placeholder="Chasis"
                                                                   class="border p-2 rounded w-full">
                                                        </div>

                                                        <div class="mb-4">
                                                            <label for="matricula"
                                                                   class="block text-sm font-medium text-gray-700">Matrícula</label>
                                                            <input value="{{@$vehiculo->Matricula}}" name="matricula"
                                                                   id="matricula" type="text"
                                                                   placeholder="Matrícula"
                                                                   class="border p-2 rounded w-full">
                                                        </div>

                                                        <div class="mb-4">
                                                            <label for="marbete"
                                                                   class="block text-sm font-medium text-gray-700">Marbete</label>
                                                            <input value="{{@$vehiculo->Marbete}}" name="marbete"
                                                                   id="marbete" type="text"
                                                                   placeholder="Marbete"
                                                                   class="border p-2 rounded w-full">
                                                        </div>

                                                        <div class="mb-4">
                                                            <label for="capacidadPasajeros"
                                                                   class="block text-sm font-medium text-gray-700">Capacidad
                                                                de
                                                                pasajeros</label>
                                                            <input value="{{@$vehiculo->CapacidadPasajeros}}"
                                                                   name="capacidadpasajeros" id="capacidadPasajeros"
                                                                   type="number" placeholder="Capacidad de Pasajeros"
                                                                   class="border p-2 rounded w-full">
                                                        </div>

                                                        <div class="mb-4">
                                                            <label for="fechaExpedicion"
                                                                   class="block text-sm font-medium text-gray-700">Fecha
                                                                de
                                                                expedición</label>
                                                            <input value="{{@$vehiculo->FechaExpedicion}}"
                                                                   name="fechaexpedicion" id="fechaExpedicion"
                                                                   type="date"
                                                                   class="border p-2 rounded w-full">
                                                        </div>

                                                        <!-- Dropdowns -->
                                                        <div class="mb-4">
                                                            <label for="SegmentoMercado"
                                                                   class="block text-sm font-medium text-gray-700">Segmento
                                                                de
                                                                mercado</label>
                                                            <select value="{{@$vehiculo->IdSegmentoMercado}}"
                                                                    name="SegmentoMercado" id="SegmentoMercado"
                                                                    class="border-0 px-3 py-3 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                                    placeholder="Seleccione un seguro">
                                                                @foreach ($SegmentoMercado as $segmento)
                                                                    <option value="{{ $segmento->IdSegmentoMercado }}">
                                                                        {{ $segmento->Descripcion }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>

                                                        <div class="mb-4">
                                                            <label for="TipoItbis"
                                                                   class="block text-sm font-medium text-gray-700">Tipo
                                                                ITBIS</label>
                                                            <select value="{{@$vehiculo->IdTipoItbis}}" name="TipoItbis"
                                                                    id="TipoItbis"
                                                                    class="border-0 px-3 py-3 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                                    placeholder="Seleccione un ITBIS">
                                                                @foreach ($TipoItbis as $itbis)
                                                                    <option value="{{ $itbis->IdTipoItbis }}">
                                                                        {{ $itbis->Porcentaje }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>

                                                        <div class="mb-4">
                                                            <label for="garantiaVehiculo"
                                                                   class="block text-sm font-medium text-gray-700">Garantía</label>
                                                            <select value="{{@$vehiculo->IdGarantia}}"
                                                                    name="garantiaVehiculo" id="garantiaVehiculo"
                                                                    class="border-0 px-3 py-3 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                                    placeholder="Seleccione una garantía">
                                                                @foreach ($garantiaVehiculo as $garantia)
                                                                    <option value="{{ $garantia->IdGarantia }}">
                                                                        {{ $garantia->Nombre }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="p-2"></div>
                                            {{-- <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                                <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Subir archivos</h6>
                                                <div class="mb-4">
                                                    <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-4">
                                                        <div>
                                                            <label for="Imagen"
                                                                class="block text-sm font-medium text-gray-700">Imagen</label>
                                                            <div
                                                                class="mt-1 flex justify-center px-6 pt- pb-6 border-2 border-gray-300 border-dashed rounded-md">
                                                                <div class="space-y-1 text-center">
                                                                    <svg class="mx-auto h-12 w-12 text-white"
                                                                        stroke="currentColor" fill="none" viewBox="0 0 48 48"
                                                                        aria-hidden="true">
                                                                        <path
                                                                            d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                    </svg>
                                                                    <div class="flex text-sm text-gray-600">
                                                                        <label for="file-upload"
                                                                            class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                                                            <span class=""><b>Archivos</b></span>
                                                                            <input id="file-upload" type="file"
                                                                                class="sr-only">
                                                                        </label>
                                                                        <p class="pl-1"> o arrastrar y soltar.</p>
                                                                    </div>
                                                                    <p class="text-xs text-white">
                                                                        PNG, JPG, GIF up to 10MB
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> --}}
                                            <div>
                                                <input checked="{{@$vehiculo->Status}}" type="checkbox"
                                                       id="Estado_modelo" name="Status" class="rounded">
                                                <label for="Estado_modelo"
                                                       class="text-sm font-medium text-gray-700">Estado</label>
                                            </div>
                                            <div class="p-2"></div>
                                            <x-button class="px-4 py-2">
                                                {{ __('Guardar') }}
                                            </x-button>
                                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include ('footer')
    <script src="/js/paginacion.js"></script>
</x-app-layout>
