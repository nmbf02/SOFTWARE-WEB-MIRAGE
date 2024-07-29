<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Consulta de Renta') }}
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

                    {{--Filtro para sugerencia segun las condiciones del vehiculo--}}
                    {{-- Datos de factura --}}
                    <div class="grid grid-cols-1 md:grid-cols-1 gap-4 mb-4">
                        <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                            <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Datos del vehículo</h6>
                            <div class="grid grid-cols-1 md:grid-cols-6 gap-4 mb-4">
                                <div>
                                    <label for="color"
                                           class="block text-sm font-medium text-gray-700">kilometraje</label>
                                    <input type="number" placeholder="kilometraje" min="0"
                                           class="border p-2 rounded w-full">
                                </div>
                                <div>
                                    <label for="color" class="block text-sm font-medium text-gray-700">Año</label>
                                    <input type="number" placeholder="Año" min="0" max=""
                                           class="border p-2 rounded w-full">
                                </div>
                                <div>
                                    <label for="marcaVehiculo"
                                           class="block text-sm font-medium text-gray-700">Marca </label>
                                    <select name="marcaVehiculo" id="marcaVehiculo"
                                            class="border-0 px-3 py-3 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                            placeholder="Seleccione una marca">
                                        @foreach ($marcaVehiculo as $marca)
                                            <option value="{{ $marca->IdMarcaVehiculo }}">
                                                {{ $marca->Descripcion }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div>
                                    <label for="modeloVehiculo"
                                           class="block text-sm font-medium text-gray-700">Modelo</label>
                                    <select name="modeloVehiculo" id="modeloVehiculo"
                                            class="border-0 px-3 py-3 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                            placeholder="Seleccione un modelo">
                                        @foreach (modeloVehiculo as $modelo)
                                            <option value="{{ $modelo->IdModeloVehiculo }}">
                                                {{ $modelo->Descripcion }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
{{--                            {{--Me quede aqui--}}
                                <div>
                                    <label for="modeloVehiculo"
                                           class="block text-sm font-medium text-gray-700">Modelo</label>
                                    <select name="modeloVehiculo" id="modeloVehiculo"
                                            class="border-0 px-3 py-3 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                            placeholder="Seleccione un modelo">
                                        @foreach (modeloVehiculo as $modelo)
                                            <option value="{{ $modelo->IdModeloVehiculo }}">
                                                {{ $modelo->Descripcion }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div>
                                    <label for="modeloVehiculo"
                                           class="block text-sm font-medium text-gray-700">Modelo</label>
                                    <select name="modeloVehiculo" id="modeloVehiculo"
                                            class="border-0 px-3 py-3 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                            placeholder="Tipo">
                                        @foreach (modeloVehiculo as $modelo)
                                            <option value="{{ $modelo->IdModeloVehiculo }}">
                                                {{ $modelo->Descripcion }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div>
                                    <label for="color"
                                           class="block text-sm font-medium text-gray-700">Kilometraje</label>
                                    <input readonly type="text" placeholder="Kilometraje "
                                           class="border p-2 rounded w-full">
                                </div>
                            </div>
                        </div>
                    </div>


                    {{--Tabla donde se visualiza los mantenimientos que le tocara a ese vehiculo--}}
                    <div class="flex flex-col mt-8">
                        <div class="overflow-x-auto rounded-lg">
                            <div class="align-middle inline-block min-w-full">
                                <div class="shadow overflow-hidden sm:rounded-lg">
                                    <table class="min-w-full divide-y divide-gray-200">
                                        <thead class="bg-gray-50">
                                        <tr>
                                            <th scope="col"
                                                class="p-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Mantenimiento
                                            </th>
                                            <th scope="col"
                                                class="p-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Fecha
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody class="bg-white">
                                        <tr>
                                            <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-900">
                                                Payment from <span class="font-semibold">Bonnie Green</span>
                                            </td>
                                            <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-500">
                                                Apr 23 ,2021
                                            </td>
                                        </tr>
                                        <tr class="bg-gray-50">
                                            <td
                                                class="p-4 whitespace-nowrap text-sm font-normal text-gray-900 rounded-lg rounded-left">
                                                Payment refund to <span class="font-semibold">#00910</span>
                                            </td>
                                            <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-500">
                                                Apr 23 ,2021
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-900">
                                                Payment failed from <span class="font-semibold">#087651</span>
                                            </td>
                                            <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-500">
                                                Apr 18 ,2021
                                            </td>
                                        </tr>
                                        <tr class="bg-gray-50">
                                            <td
                                                class="p-4 whitespace-nowrap text-sm font-normal text-gray-900 rounded-lg rounded-left">
                                                Payment from <span class="font-semibold">Lana Byrd</span>
                                            </td>
                                            <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-500">
                                                Apr 15 ,2021
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-900">
                                                Payment from <span class="font-semibold">Jese Leos</span>
                                            </td>
                                            <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-500">
                                                Apr 15 ,2021
                                            </td>
                                        </tr>
                                        <tr class="bg-gray-50">
                                            <td
                                                class="p-4 whitespace-nowrap text-sm font-normal text-gray-900 rounded-lg rounded-left">
                                                Payment from <span class="font-semibold">THEMESBERG
                                                        LLC</span>
                                            </td>
                                            <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-500">
                                                Apr 11 ,2021
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="flex pt-6 pagination-controls justify-evenly">
                                    <button onclick="previousPage()">@include('icons/anterior')</button>
                                    <button onclick="nextPage()">@include('icons/siguiente')</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include ('footer')
    <script src="/js/paginacion.js"></script>
</x-app-layout>
