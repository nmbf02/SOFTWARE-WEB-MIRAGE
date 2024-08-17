<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Sugerencia para mantenimiento') }}
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
                        <div class="bg-white dark:bg-gray-700 {{-- shadow rounded-lg --}} p-6">
                            <div class="flex flex-wrap items-center justify-between">
                                <div class="flex items-center justify-start">
                                    <h1 class="text-xl font-semibold mb-4 text-gray-900 dark:text-gray-100">
                                        Sugerencia para mantenimiento</h1>
                                </div>
                            </div>
                            <hr style="border-color: #FF914D" class="p-2">
                            <form>
                                {{-- Orden de mantenimiento --}}
                                <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                    <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Documento</h6>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                                        <div>
                                            <label for="color" class="block text-sm font-medium text-gray-700">Factura</label>
                                            <input type="text" placeholder="Número de factura"
                                                   class="border p-2 rounded w-full">
                                        </div>
                                        <div>
                                            <label for="color" class="block text-sm font-medium text-gray-700">Mantenimiento</label>
                                            <input type="text" placeholder="Número de mantenimiento"
                                                   class="border p-2 rounded w-full">
                                        </div>
                                    </div>
                                    <div class="mt-5">
                                        <label for="color" class="block text-sm font-medium text-gray-700">Fecha
                                            del documento</label>
                                        <input type="text"
                                               class="border p-2 rounded w-full" readonly>
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
                                                        Desde que fecha
                                                    </th>
                                                    <th style="border: 1px solid #ddd; padding: 8px; background-color: #f2f2f2;">
                                                        Kilometraje
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
</x-app-layout>
