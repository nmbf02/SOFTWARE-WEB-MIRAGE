<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ ('Sugerencia de mantenimiento') }}
        </h2>
    </x-slot>
    @include ('aside')

    <div>
        <div class="flex overflow-hidden bg-white">
            <div class="bg-gray-900 opacity-50 hidden fixed inset-0 z-10" id="sidebarBackdrop"></div>
            <div id="main-content" class="h-full w-full bg-white relative overflow-y-auto lg:ml-64">
                <div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8 ">

                    {{--Titulo--}}
                    <div class="mb-4 flex items-center justify-between">
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Sugerencia de Mantenimeinto</h3>
                            <span class="text-base font-normal muted text-gray-500">Esta sección está diseñada para visualizar de manera rápida y efectiva los mantenimientos específicos que corresponden a cada vehículo, en lugar de proporcionar una visión holística.</span>
                        </div>
                    </div>

                    {{--Datos del prospecto--}}
                    <div class="grid grid-cols-1 md:grid-cols-1 gap-4 mb-4">
                        <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                            <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Datos del solicitante</h6>
                            <div class="grid grid-cols-1 md:grid-cols-6 gap-4 mb-4">
                                <div>
                                    <label for="color"
                                           class="block text-sm font-medium text-gray-700">Nombre</label>
                                    <input type="text" placeholder="¿Cómo es tu nombre?"
                                           class="border p-2 rounded w-full">
                                </div>
                                <div>
                                    <label for="color"
                                           class="block text-sm font-medium text-gray-700">Teléfono</label>
                                    <input type="number" placeholder="Digite su teléfono"
                                           class="border p-2 rounded w-full">
                                </div>
                                <div>
                                    <label for="color"
                                           class="block text-sm font-medium text-gray-700">Correo electrónico</label>
                                    <input type="email" placeholder="Mail" min="0"
                                           class="border p-2 rounded w-full">
                                </div>
                            </div>
                        </div>
                    </div>

                    {{--Filtro para sugerencia segun las condiciones del vehiculo--}}
                    <div class="grid grid-cols-1 md:grid-cols-1 gap-4 mb-4">
                        <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                            <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Datos del vehículo</h6>
                            <div class="grid grid-cols-1 md:grid-cols-6 gap-4 mb-4">
                                <div>
                                    <label for="kilometraje" class="block text-sm font-medium text-gray-700">Kilometraje</label>
                                    <input type="number" id="kilometraje" placeholder="Kilometraje" min="0" class="border p-2 rounded w-full">
                                </div>
                                <div>
                                    <label for="yearInput" class="block text-sm font-medium text-gray-700">Año</label>
                                    <input type="number" id="yearInput" placeholder="Año" min="0" class="border p-2 rounded w-full">
                                    <script>
                                        // Obtén el año actual
                                        const currentYear = new Date().getFullYear();
                                        // Establece el valor máximo del input al año actual
                                        document.getElementById('yearInput').max = currentYear;
                                    </script>
                                </div>
                                <div>
                                    <label for="marcaVehiculo" class="block text-sm font-medium text-gray-700">Marca</label>
                                    <select name="marcaVehiculo" id="marcaVehiculo" class="border-0 px-3 py-3 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                        <option disabled selected>Seleccione una marca</option>
                                        @foreach ($marcaVehiculo as $marca)
                                            <option value="{{ $marca->IdMarcaVehiculo }}">{{ $marca->Descripcion }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div>
                                    <label for="modeloVehiculo" class="block text-sm font-medium text-gray-700">Modelo</label>
                                    <select name="modeloVehiculo" id="modeloVehiculo" class="border-0 px-3 py-3 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                        <option disabled selected>Seleccione un modelo</option>
                                        @foreach ($modeloVehiculo as $modelo)
                                            <option value="{{ $modelo->IdModeloVehiculo }}">{{ $modelo->Descripcion }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div>
                                    <label for="aceiteVehiculo" class="block text-sm font-medium text-gray-700">Aceite</label>
                                    <select name="aceiteVehiculo" id="aceiteVehiculo" class="border-0 px-3 py-3 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                        <option disabled selected>Seleccione un aceite</option>
                                        @foreach ($aceiteVehiculo as $aceite)
                                            <option value="{{ $aceite->IdAceiteVehiculo }}">{{ $aceite->Descripcion }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div>
                                    <label for="motorVehiculo" class="block text-sm font-medium text-gray-700">Tipo de motor</label>
                                    <select name="motorVehiculo" id="motorVehiculo" class="border-0 px-3 py-3 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                        <option disabled selected>Seleccione un tipo de motor</option>
                                        @foreach ($motorVehiculo as $motor)
                                            <option value="{{ $motor->IdMotorVehiculo }}">{{ $motor->Descripcion }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{--Tabla donde se visualiza los mantenimientos que le tocará a ese vehículo--}}
                    <table class="table table-bordered w-full border-collapse bg-white text-left text-sm text-gray-500">
                        <thead class="bg-white">
                        <tr>
                            <th scope="col" class="px-6 py-4 font-bold text-gray-900">Tarea de mantenimiento</th>
                            <th scope="col" class="px-6 py-4 font-bold text-gray-900">Kilometraje inicial</th>
                            <th scope="col" class="px-6 py-4 font-bold text-gray-900">Kilometraje final</th>
                            <th scope="col" class="px-6 py-4 font-bold text-gray-900">Desde</th>
                            <th scope="col" class="px-6 py-4 font-bold text-gray-900">Hasta</th>
                            <th scope="col" class="px-6 py-4 font-bold text-gray-900">Tipo de motor</th>
                            <th scope="col" class="px-6 py-4 font-bold text-gray-900">Año inicial</th>
                            <th scope="col" class="px-6 py-4 font-bold text-gray-900">Año final</th>
                        </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100 border-t border-gray-100">
                        {{--Las filas se generarán dinámicamente--}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @include ('footer')
</x-app-layout>
