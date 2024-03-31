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
                            <form>
                                <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                    <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Información general</h6>
                                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">VIN</label>
                                            <input type="text" placeholder="VIN" class="border p-2 rounded w-full">
                                        </div>
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Descripción</label>
                                            <input type="text" placeholder="Descripción"
                                                class="border p-2 rounded w-full">
                                        </div>
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Estado</label>
                                            <select id="color" class="border p-2 rounded w-full mt-1">
                                                <option>Activo</option>
                                                <option>Inactivo</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-2"></div>
                                <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                    <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Descripción detallada</h6>
                                    <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-4">
                                        <div>
                                            <label for="marca"
                                                class="block text-sm font-medium text-gray-700">Marca</label>
                                            <select id="marca" class="border p-2 rounded w-full mt-1">
                                                <option value="toyota">Toyota</option>
                                                <option value="ford">Ford</option>
                                                <option value="chevrolet">Chevrolet</option>
                                            </select>
                                        </div>
                                        <div>
                                            <label for="modelo"
                                                class="block text-sm font-medium text-gray-700">Modelo</label>
                                            <select id="modelo" class="border p-2 rounded w-full mt-1">
                                                <option value="corolla">Corolla</option>
                                                <option value="mustang">Mustang</option>
                                                <option value="camaro">Camaro</option>
                                            </select>
                                        </div>
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Color</label>
                                            <select id="color" class="border p-2 rounded w-full mt-1">
                                                <option value="blanco">Blanco</option>
                                                <option value="negro">Negro</option>
                                                <option value="rojo">Rojo</option>
                                            </select>
                                        </div>
                                        <div>
                                            <label for="acabado"
                                                class="block text-sm font-medium text-gray-700">Acabado</label>
                                            <select id="acabado" class="border p-2 rounded w-full mt-1">
                                                <option value="estandar">Estándar</option>
                                                <option value="premium">Premium</option>
                                                <option value="deportivo">Deportivo</option>
                                            </select>
                                        </div>
                                        <div>
                                            <label for="tipo"
                                                class="block text-sm font-medium text-gray-700">Tipo</label>
                                            <select id="tipo" class="border p-2 rounded w-full mt-1">
                                                <option value="sedan">Sedán</option>
                                                <option value="suv">SUV</option>
                                                <option value="hatchback">Hatchback</option>
                                            </select>
                                        </div>
                                        <div>
                                            <label for="traccion"
                                                class="block text-sm font-medium text-gray-700">Tracción</label>
                                            <select id="traccion" class="border p-2 rounded w-full mt-1">
                                                <option value="delantera">Delantera</option>
                                                <option value="trasera">Trasera</option>
                                                <option value="integral">Integral</option>
                                            </select>
                                        </div>
                                        <div>
                                            <label for="transmision"
                                                class="block text-sm font-medium text-gray-700">Transmisión</label>
                                            <select id="transmision" class="border p-2 rounded w-full mt-1">
                                                <option value="manual">Manual</option>
                                                <option value="automatica">Automática</option>
                                                <option value="cvt">CVT</option>
                                            </select>
                                        </div>
                                        <div>
                                            <label for="transmision"
                                                class="block text-sm font-medium text-gray-700">Condición</label>
                                            <select id="transmision" class="border p-2 rounded w-full mt-1">
                                                <option value="manual">Nuevo</option>
                                                <option value="automatica">Usado</option>
                                                <option value="cvt">Arreglado</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-2"></div>
                                <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                    <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Finalidad del vehículo</h6>
                                    <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-4">
                                        <div>
                                            <label for="transmision"
                                                class="block text-sm font-medium text-gray-700">Uso</label>
                                            <select id="transmision" class="border p-2 rounded w-full mt-1">
                                                <option value="manual">Renta</option>
                                                <option value="automatica">Venta</option>
                                                <option value="cvt">Subasta</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-2"></div>
                                <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                    <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Detalles del motor</h6>
                                    <div>
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                                            <!-- Motor del cilindro -->
                                            <div>
                                                <label for="motor-cilindro"
                                                    class="block text-sm font-medium text-gray-700">Motor del
                                                    cilindro</label>
                                                <input id="motor-cilindro" type="text"
                                                    placeholder="Motor del cilindro"
                                                    class="border p-2 rounded w-full">
                                            </div>
                                            <!-- Serie -->
                                            <div>
                                                <label for="serie"
                                                    class="block text-sm font-medium text-gray-700">Serie</label>
                                                <input id="serie" type="text" placeholder="Serie"
                                                    class="border p-2 rounded w-full">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-2"></div>
                                <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                    <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Inventario</h6>
                                    <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-4">
                                        <div>
                                            <label for="transmision"
                                                class="block text-sm font-medium text-gray-700">Ubicación</label>
                                            <select id="transmision" class="border p-2 rounded w-full mt-1">
                                                <option value="manual">A1</option>
                                                <option value="automatica">A2</option>
                                                <option value="cvt">A3</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-2"></div>
                                <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                    <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Configuración general</h6>
                                    <div>
                                        <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-4">
                                            <div class="mb-4">
                                                <label for="anoVehiculo"
                                                    class="block text-sm font-medium text-gray-700">Año del
                                                    Vehículo</label>
                                                <input id="anoVehiculo" type="number" placeholder="2024"
                                                    class="border p-2 rounded w-full">
                                            </div>

                                            <div class="mb-4">
                                                <label for="precio"
                                                    class="block text-sm font-medium text-gray-700">Precio</label>
                                                <input id="precio" type="number" placeholder="0.00"
                                                    class="border p-2 rounded w-full">
                                            </div>

                                            <div class="mb-4">
                                                <label for="SeguroVehiculo"
                                                    class="block text-sm font-medium text-gray-700">Seguro del
                                                    vehículo</label>
                                                <select id="SeguroVehiculo" class="border p-2 rounded w-full">
                                                    <option value="1">Seguro Básico - Cobertura limitada</option>
                                                    <option value="2">Seguro Total - Cobertura completa</option>
                                                    <option value="3">Seguro contra Terceros - Daños a terceros
                                                    </option>
                                                </select>
                                            </div>

                                            <div class="mb-4">
                                                <label for="placa"
                                                    class="block text-sm font-medium text-gray-700">Número de
                                                    placa</label>
                                                <input id="placa" type="text" placeholder="Número de placa"
                                                    class="border p-2 rounded w-full">
                                            </div>

                                            <div class="mb-4">
                                                <label for="placaExhibicion"
                                                    class="block text-sm font-medium text-gray-700">Placa de
                                                    exhibición</label>
                                                <input id="placaExhibicion" type="text"
                                                    placeholder="Placa de Exhibición"
                                                    class="border p-2 rounded w-full">
                                            </div>

                                            <div class="mb-4">
                                                <label for="chasis"
                                                    class="block text-sm font-medium text-gray-700">Chasis</label>
                                                <input id="chasis" type="text" placeholder="Chasis"
                                                    class="border p-2 rounded w-full">
                                            </div>

                                            <div class="mb-4">
                                                <label for="matricula"
                                                    class="block text-sm font-medium text-gray-700">Matrícula</label>
                                                <input id="matricula" type="text" placeholder="Matrícula"
                                                    class="border p-2 rounded w-full">
                                            </div>

                                            <div class="mb-4">
                                                <label for="marbete"
                                                    class="block text-sm font-medium text-gray-700">Marbete</label>
                                                <input id="marbete" type="text" placeholder="Marbete"
                                                    class="border p-2 rounded w-full">
                                            </div>

                                            <div class="mb-4">
                                                <label for="capacidadPasajeros"
                                                    class="block text-sm font-medium text-gray-700">Capacidad de
                                                    pasajeros</label>
                                                <input id="capacidadPasajeros" type="number"
                                                    placeholder="Capacidad de Pasajeros"
                                                    class="border p-2 rounded w-full">
                                            </div>

                                            <div class="mb-4">
                                                <label for="fechaExpedicion"
                                                    class="block text-sm font-medium text-gray-700">Fecha de
                                                    expedición</label>
                                                <input id="fechaExpedicion" type="date"
                                                    class="border p-2 rounded w-full">
                                            </div>

                                            <!-- Dropdowns -->
                                            <div class="mb-4">
                                                <label for="SegmentoMercado"
                                                    class="block text-sm font-medium text-gray-700">Segmento de
                                                    Mercado</label>
                                                <select id="SegmentoMercado" class="border p-2 rounded w-full">
                                                    <option value="1">Económico - Vehículos accesibles y
                                                        eficientes en combustible</option>
                                                    <option value="2">Lujo - Vehículos de alta gama con
                                                        características premium</option>
                                                    <option value="3">Deportivo - Vehículos con alto rendimiento y
                                                        diseño deportivo</option>
                                                </select>
                                            </div>

                                            <div class="mb-4">
                                                <label for="TipoItbis"
                                                    class="block text-sm font-medium text-gray-700">Tipo ITBIS</label>
                                                <select id="TipoItbis" class="border p-2 rounded w-full">
                                                    <option value="1">16% - Tasa General</option>
                                                    <option value="2">0% - Bienes y Servicios Exentos</option>
                                                    <option value="3">8% - Bienes y Servicios Reducidos</option>
                                                </select>
                                            </div>

                                            <div class="mb-4">
                                                <label for="Garantia"
                                                    class="block text-sm font-medium text-gray-700">Garantía</label>
                                                <select id="Garantia" class="border p-2 rounded w-full">
                                                    <option value="1">Garantía Limitada</option>
                                                    <option value="2">Garantía Extendida</option>
                                                    <option value="3">Garantía de Fábrica</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-2"></div>
                                <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                    <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Subir archivos</h6>
                                    <div class="mb-4">
                                        <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-4">
                                            <div>
                                                <label for="Imagen"
                                                    class="block text-sm font-medium text-gray-700">Imagen</label>
                                                <div class="mt-1 flex justify-center px-6 pt- pb-6 border-2 border-gray-300 border-dashed rounded-md">
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
                                                                <input id="file-upload" name="file-upload"
                                                                    type="file" class="sr-only">
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
