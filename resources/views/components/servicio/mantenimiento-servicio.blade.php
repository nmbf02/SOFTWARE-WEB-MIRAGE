<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Configuración de servicios de mantenimiento') }}
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
                            {{--Titulo--}}
                            <div class="flex flex-wrap items-center justify-between">
                                <div class="flex items-center justify-start">
                                    <h1 class="text-xl font-semibold mb-4 text-gray-900 dark:text-gray-100 hover:text-blue-700">
                                        Configuración de servicios | (Mantenimiento)
                                    </h1>
                                </div>
                            </div>
                            <hr style="border-color: #FF914D" class="p-2">
                            {{--Formulario de seleccion de servicio--}}
                            <form method="GET" action="{{ route('ServicioMantenimiento') }}">
                                <div class="grid grid-cols-1 md:grid-cols-1 gap-4 mb-4">
                                    <div>
                                        <label for="tipoMantenimiento" class="block text-sm font-medium text-gray-700">Tipo
                                            de mantenimiento</label>
                                        <select name="tipoMantenimiento" id="tipoMantenimiento"
                                                class="border-0 px-3 py-3 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                placeholder="Seleccione un tipo de mantenimiento"
                                                onchange="this.form.submit()">
                                            <option value="">Seleccione un tipo de mantenimiento</option>
                                            @foreach ($tipoMantenimientos as $Mantenimiento)
                                                <option
                                                    value="{{ $Mantenimiento->IdTipoMantenimiento }}"{{ $requestTipoServicio == $Mantenimiento->IdTipoMantenimiento ? 'selected' : '' }}>
                                                    {{ $Mantenimiento->Descripcion }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </form>
                            {{--Formulario de registro de servicio--}}
                            <form method="POST" action="{{route('RegistrarServicioMantenimiento.store')}}"
                                  class="grid grid-cols-1 md:grid-cols-1 gap-4 mb-4">
                                {{-- Tareas de mantenimiento --}}
                                @csrf
                                <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                    <div class="inline-flex justify-between items-center w-full">
                                        <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Tareas de mantenimiento</h6>
                                        <button type="button"
                                                class="toggle-button inline-flex items-center px-3 py-2 transition ease-in-out duration-150">
                                            <div class="icon">
                                                @include('icons/show') <!-- Icono visible por defecto -->
                                            </div>
                                        </button>
                                    </div>
                                    <div>
                                        <div class="grid grid-cols-1 md:grid-cols-1 gap-4 mb-4">
                                            {{--Nombre del servicio--}}
                                            <div>
                                                <label for="tipoMantenimiento"
                                                       class="block text-sm font-medium text-gray-700">Nombre del
                                                    servicio</label>

                                                {{-- Campo oculto para enviar el ID del tipo de mantenimiento seleccionado --}}
                                                <input type="hidden" name="tipoMantenimiento"
                                                       value="{{ isset($typeMaintenance->IdTipoMantenimiento) ? $typeMaintenance->IdTipoMantenimiento : '' }}"
                                                       readonly>

                                                {{-- Campo de texto para mostrar la descripción del tipo de mantenimiento --}}
                                                <input type="text" id="tipoMantenimiento"
                                                       value="{{ isset($typeMaintenance->Descripcion) ? $typeMaintenance->Descripcion : '' }}"
                                                       class="border-0 px-3 py-3 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                       readonly>
                                            </div>
                                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                                                <div>
                                                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
                                                        <div>
                                                            <label for="millas"
                                                                   class="block text-sm font-medium text-gray-700">Ingrese
                                                                la distancia en millas:</label>
                                                            <input type="number" id="millas" name="millas"
                                                                   class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                                   placeholder="Millas">
                                                        </div>
                                                        <div>
                                                            <label for="kilometros"
                                                                   class="block text-sm font-medium text-gray-700">Distancia
                                                                en
                                                                kilómetros:</label>
                                                            <input type="text" id="kilometros" name="kilometros"
                                                                   class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                                   placeholder="Kilómetros" readonly>
                                                        </div>
                                                        <button type="button" onclick="convertirMillasAKilometros()"
                                                                class="mt-2 px-4 py-2 bg-blue-500 border-amber-700 text-orange-500 rounded-md shadow-sm hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                                                            Convertir
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                                                    <div>
                                                        <label for="kilomentrajeInicial"
                                                               class="block text-sm font-medium text-gray-700">Kilometraje
                                                            inicial</label>
                                                        <input type="number" placeholder="Kilometraje inicial"
                                                               id="kilomentrajeInicial"
                                                               name="kilomentrajeInicial" min="0"
                                                               class="border p-2 rounded w-full">
                                                    </div>
                                                    <div>
                                                        <label for="kilomentrajeFinal"
                                                               class="block text-sm font-medium text-gray-700">Kilometraje
                                                            final</label>
                                                        <input type="number" placeholder="Kilometraje final"
                                                               id="kilomentrajeFinal"
                                                               name="kilomentrajeFinal" min="0"
                                                               class="border p-2 rounded w-full">
                                                    </div>
                                                </div>
                                            </div>
                                            {{--Datos de fecha de mantenimiento en lapso--}}
                                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                                                <div>
                                                    <label for="fechaInicial"
                                                           class="block text-sm font-medium text-gray-700">Rango de
                                                        fecha inicial</label>
                                                    <input type="number" placeholder="Fecha manejada en meses"
                                                           id="fechaInicial"
                                                           name="fechaInicial" min="1" max="24"
                                                           class="border p-2 rounded w-full">
                                                </div>
                                                <div>
                                                    <label for="fechaFinal"
                                                           class="block text-sm font-medium text-gray-700">Rango de
                                                        fecha final</label>
                                                    <input type="number" placeholder="Fecha manejada en meses"
                                                           id="fechaFinal"
                                                           name="fechaFinal" min="1" max="24"
                                                           class="border p-2 rounded w-full">
                                                </div>
                                            </div>
                                            {{--                                            Seleccionar uno o varios servicio--}}
                                            <div>
                                                <label for="tipoMotor" class="block text-sm font-medium text-gray-700">Seleccione
                                                    el tipo de motor que aplica para esta tarea de mantenimiento</label>
                                                <div id="tipoMotor" class="mt-2">
                                                    @foreach($motores as $motor)
                                                        <div class="flex items-center">
                                                            <input
                                                                type="checkbox"
                                                                id="motor-{{ $motor->IdMotor }}"
                                                                name="tipoMotor[]"
                                                                value="{{ $motor->IdMotor }}"
                                                                class="form-checkbox h-4 w-4 text-indigo-600 transition duration-150 ease-in-out"
                                                                {{ (in_array($motor->IdMotor, old('tipoMotor', []))) ? 'checked' : '' }}>
                                                            <label for="motor-{{ $motor->IdMotor }}"
                                                                   class="ml-2 block text-sm text-gray-900">
                                                                {{ $motor->Descripcion }}
                                                            </label>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>

                                            {{--                                            Nota del servicio--}}
                                            <div>
                                                <label for="nota"
                                                       class="block text-sm font-medium text-gray-700">Nota</label>
                                                <textarea name="nota" id="nota"
                                                          class="border p-2 rounded w-full">{{ old('Descripcion') }}</textarea>
                                                @error('Descripcion')
                                                <div>{{ $message }}</div>
                                                @enderror
                                            </div>
                                            {{--                                            Estado del servicio--}}
                                            <div>
                                                <input type="checkbox" id="estado" name="estado"
                                                       class="rounded">
                                                <label for="estado"
                                                       class="text-sm font-medium text-gray-700">Estado</label>
                                            </div>
                                            {{--                                            Boton de salvar el servicio--}}
                                            <x-button class="px-4 py-2">
                                                {{ __('Salvar servicio') }}
                                            </x-button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/show-hidden.js') }}"></script>
    {{--    Script para filtro de tipo de servicio--}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#tipoMantenimiento').select2({
                placeholder: "Seleccione un tipo de mantenimiento",
                allowClear: true
            });
        });
    </script>
    {{-- Conversion de millas a kilometros --}}
    <script>
        function convertirMillasAKilometros() {
            // Obtener el valor ingresado en millas
            var millas = document.getElementById('millas').value;

            // Convertir a kilómetros (1 milla = 1.60934 kilómetros)
            var kilometros = millas * 1.60934;

            // Mostrar el resultado en la casilla de kilómetros
            document.getElementById('kilometros').value = kilometros.toFixed(2);
        }
    </script>

    @include ('footer')
</x-app-layout>
