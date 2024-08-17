<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Mantenimiento de vehículo') }}
        </h2>
    </x-slot>
    @include ('aside')
    @section('css')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/2.0.3/css/dataTables.bootstrap4.css">
    @endsection
    <div>
        <div class="flex overflow-hidden bg-white">
            <div class="bg-gray-900 opacity-50 hidden fixed inset-0 z-10" id="sidebarBackdrop"></div>
            <div id="main-content" class="h-full w-full bg-white relative overflow-y-auto lg:ml-64">
                <div class="bg-white dark:bg-gray-800 transition-colors duration-300">
                    <div class="containerh-full w-full bg-white relative overflow-y-auto lg:ml">
                        <form class="bg-white dark:bg-gray-700 {{-- shadow rounded-lg --}} p-6">
                            {{--Titulo--}}
                            <div class="flex flex-wrap items-center justify-between">
                                <div class="flex items-center justify-start">
                                    <h1 class="text-xl font-semibold mb-4 text-gray-900 dark:text-gray-100">
                                        Registrar mantenimiento de vehículo</h1>
                                </div>
                            </div>
                            <hr style="border-color: #FF914D" class="p-2">
                            {{--Formulario de seleccion--}}
                            <form method="GET" action="{{ route('SeleccionMantenimiento') }}">
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                                    <div>
                                        <label for="factura" class="block text-sm font-medium text-gray-700">Num. Factura</label>
                                        <select name="factura" id="factura"
                                                class="border-0 px-3 py-3 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                placeholder="Ingrese num. factura"
                                                onchange="this.form.submit()">
                                            <option value="">Seleccione una factura</option>
                                            @foreach ($mantenimientoFactura as $mt)
                                                <option
                                                    value="{{ $mt->IdVenta }}"{{ $requestmt == $mt->Idventa ? 'selected' : '' }}>
                                                    {{ $mt->IdVenta }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div>
                                        <label for="mantenimiento" class="block text-sm font-medium text-gray-700">Num. Mantenimiento</label>
                                        <select name="mantenimiento" id="mantenimiento"
                                                class="border-0 px-3 py-3 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                placeholder="Ingrese num. mantenimiento"
                                                onchange="this.form.submit()">
                                            <option value="">Seleccione un mantenimiento</option>
                                            @foreach ($mantenimientoMantenimiento as $mm)
                                                <option
                                                    value="{{ $mm->IdMantenimiento }}"{{ $requestmm == $mm->IdMantenimiento ? 'selected' : '' }}>
                                                    {{ $mm->IdMantenimiento }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </form>
                            {{--Vista de informacion--}}
                            <form method="POST" action="{{route('RegistrarMantenimientoVehiculo.store')}}"
                                  class="grid grid-cols-1 md:grid-cols-1 gap-4 mb-4">
                                {{-- Tareas de mantenimiento --}}
                                @csrf
                                {{-- Informacion documento --}}
                                <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                    <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Documento</h6>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                                        {{--Factura--}}
                                        <div>
                                            <label for="factura"
                                                   class="block text-sm font-medium text-gray-700">Factura</label>

                                            {{-- Campo oculto para enviar el ID del tipo de mantenimiento seleccionado --}}
                                            <input type="hidden" name="factura"
                                                   value="{{ isset($typeSales->IdFactura) ? $typeSales->IdFactura : '' }}"
                                                   readonly>

                                            {{-- Campo de texto para mostrar la descripción del tipo de mantenimiento --}}
                                            <input type="text" id="factura"
                                                   value="{{ isset($typeSales->IdFactura) ? $typeSales->IdFactura : '' }}"
                                                   class="border-0 px-3 py-3 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                   readonly>
                                        </div>
                                        {{--Mantenimiento--}}
                                        <div>
                                            <label for="mantenimiento"
                                                   class="block text-sm font-medium text-gray-700">Mantenimiento</label>

                                            {{-- Campo oculto para enviar el ID del tipo de mantenimiento seleccionado --}}
                                            <input type="hidden" name="mantenimiento"
                                                   value="{{ isset($typeMaintenance->IdMantenimiento) ? $typeMaintenance->IdMantenimiento : '' }}"
                                                   readonly>

                                            {{-- Campo de texto para mostrar la descripción del tipo de mantenimiento --}}
                                            <input type="text" id="mantenimiento"
                                                   value="{{ isset($typeMaintenance->IdMantenimiento) ? $typeMaintenance->IdMantenimiento : '' }}"
                                                   class="border-0 px-3 py-3 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                   readonly>
                                        </div>
                                        {{--Fecha--}}
                                        <div>
                                            <label for="fechaRegistr"
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
                                    </div>
                                </div>
                                <div class="p-2"></div>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                                    {{-- Datos de Cliente --}}
                                    <div class="grid grid-cols-1 md:grid-cols-1 gap-4 mb-4">
                                        <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                            <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Datos Cliente</h6>
                                            <div class="grid grid-cols-1 md:grid-cols-1 gap-4 mb-4">
                                                <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-4">
                                                    <div>
                                                        <label for="color"
                                                               class="block text-sm font-medium text-gray-700">Nombre
                                                            del cliente</label>
                                                        <input type="text" placeholder="Nombre del cliente"
                                                               class="border p-2 rounded w-full" readonly>
                                                    </div>
                                                    <div>
                                                        <label for="color"
                                                               class="block text-sm font-medium text-gray-700">Cedula</label>
                                                        <input type="text" placeholder="Cedula"
                                                               class="border p-2 rounded w-full" readonly>
                                                    </div>
                                                    <div>
                                                        <label for="color"
                                                               class="block text-sm font-medium text-gray-700">Telefono</label>
                                                        <input type="text" placeholder="Telefono"
                                                               class="border p-2 rounded w-full" readonly>
                                                    </div>
                                                    <div>
                                                        <label for="color"
                                                               class="block text-sm font-medium text-gray-700">Email</label>
                                                        <input type="text" placeholder="Email"
                                                               class="border p-2 rounded w-full" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Datos de vehiculo --}}
                                    <div class="grid grid-cols-1 md:grid-cols-1 gap-4 mb-4">
                                        <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                            <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Datos Vehiculo</h6>
                                            <div class="grid grid-cols-1 md:grid-cols-1 gap-4 mb-4">
                                                <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-4">
                                                    <div>
                                                        <label for="color"
                                                               class="block text-sm font-medium text-gray-700">VIN</label>
                                                        <input type="text" placeholder="VIN"
                                                               class="border p-2 rounded w-full" readonly>
                                                    </div>
                                                    <div>
                                                        <label for="color"
                                                               class="block text-sm font-medium text-gray-700">Motor</label>
                                                        <input type="text" placeholder="Motor"
                                                               class="border p-2 rounded w-full" readonly>
                                                    </div>
                                                    <div>
                                                        <label for="color"
                                                               class="block text-sm font-medium text-gray-700">Aceite</label>
                                                        <input type="text" placeholder="Aceite"
                                                               class="border p-2 rounded w-full" readonly>
                                                    </div>
                                                    <div>
                                                        <label for="color"
                                                               class="block text-sm font-medium text-gray-700">Kilometaje
                                                            actual</label>
                                                        <input type="text" placeholder="Kilometraje actual"
                                                               class="border p-2 rounded w-full" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            {{--TODO: Faltan asignacion de mantenimiento--}}
                            <form>
                                {{-- Asignacion de mantenimientos --}}
                                <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                    <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Tareas de Mantenimiento</h6>
                                    <div class="grid grid-cols-1 md:grid-cols-1 gap-4 mb-4">
                                        <form>
                                            {{-- @csrf --}}
                                            <table style="width: 100%; border-collapse: collapse;">
                                                <thead>
                                                <tr>
                                                    <th style="border: 1px solid #ddd; padding: 8px; background-color: #f2f2f2;">
                                                        Nombre
                                                    </th>
                                                    <th style="border: 1px solid #ddd; padding: 8px; background-color: #f2f2f2;">
                                                        Desde
                                                    </th>
                                                    <th style="border: 1px solid #ddd; padding: 8px; background-color: #f2f2f2;">
                                                        Hasta
                                                    </th>
                                                    <th style="border: 1px solid #ddd; padding: 8px; background-color: #f2f2f2;">
                                                        Kilometraje inicial
                                                    </th>
                                                    <th style="border: 1px solid #ddd; padding: 8px; background-color: #f2f2f2;">
                                                        Kilometraje final
                                                    </th>
                                                    <th style="border: 1px solid #ddd; padding: 8px; background-color: #f2f2f2;">
                                                        Precio
                                                    </th>
                                                    <th style="border: 1px solid #ddd; padding: 8px; background-color: #f2f2f2;">
                                                        Seleccionar
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                {{-- @foreach($mantenimientos as $mantenimiento) --}}
                                                <tr>
                                                    {{-- <td>{{ $mantenimiento->nombre }}</td>
                                                    <td>{{ $mantenimiento->fecha }}</td>
                                                    <td>{{ $mantenimiento->kilometraje }}</td>
                                                    <td>{{ $mantenimiento->precio }}</td> --}}
                                                    <td style="border: 1px solid #ddd; padding: 8px;"></td>
                                                    <td style="border: 1px solid #ddd; padding: 8px;"></td>
                                                    <td style="border: 1px solid #ddd; padding: 8px;"></td>
                                                    <td style="border: 1px solid #ddd; padding: 8px;"></td>
                                                    <td style="border: 1px solid #ddd; padding: 8px;"></td>
                                                    <td style="border: 1px solid #ddd; padding: 8px;"></td>
                                                    <td style="border: 1px solid #ddd; padding: 8px; text-align: center;">
                                                        <input type="checkbox" name="mantenimiento_id"
                                                               style="display: block; margin: 0 auto;">
                                                    </td>
                                                </tr>
                                                {{-- @endforeach --}}
                                                </tbody>
                                            </table>
                                        </form>
                                    </div>
                                </div>
                                {{-- Asignacion del mecanico --}}
                                <br>
                                <div class="p-2"></div>
                                <x-button class="px-4 py-2">
                                    {{ __('Registrar mantenimiento') }}
                                </x-button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include ('footer')

    {{-- Script para filtro --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#factura').select2({
                placeholder: "Ingrese num. factura",
                allowClear: true
            });
        });
    </script>

    <script>
        $(document).ready(function () {
            $('#mantenimiento').select2({
                placeholder: "Ingrese num. mantenimiento",
                allowClear: true
            });
        });
    </script>
</x-app-layout>
