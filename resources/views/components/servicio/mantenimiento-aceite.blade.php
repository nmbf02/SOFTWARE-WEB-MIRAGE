<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Configuración de servicios de aceite') }}
        </h2>
    </x-slot>
    @include ('aside')
    <div>
        <div class="flex overflow-hidden bg-white">
            <div class="bg-gray-900 opacity-50 hidden fixed inset-0 z-10" id="sidebarBackdrop"></div>
            <div id="main-content" class="h-full w-full bg-white relative overflow-y-auto lg:ml-64">
                <div class="bg-white dark:bg-gray-800 transition-colors duration-300">
                    <div class="containerh-full w-full bg-white relative overflow-y-auto lg:ml">
                        <div class="bg-white dark:bg-gray-700 p-6">
                            <div class="flex flex-wrap items-center justify-between">
                                <div class="flex items-center justify-start">
                                    <h1 class="text-xl font-semibold mb-4 text-gray-900 dark:text-gray-100 hover:text-blue-700">
                                        Asignacion de servicio | (Aceite)
                                    </h1>
                                </div>
                            </div>
                            <hr style="border-color: #FF914D" class="p-2">
                            <form method="GET" action="{{ route('ServicioAceite') }}">
                                <div class="grid grid-cols-1 md:grid-cols-1 gap-4 mb-4">
                                    <div>
                                        <label for="tipoAceite" class="block text-sm font-medium text-gray-700">Tipo de Aceite</label>
                                        <select name="tipoAceite" id="tipoAceite"
                                                class="border-0 px-3 py-3 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                placeholder="Seleccione un tipo de aceite"
                                                onchange="this.form.submit()">
                                            <option value="">Seleccione un tipo de Aceite</option>
                                            @foreach ($tipoAceites as $Aceite)
                                                <option value="{{ $Aceite->IdAceite }}"{{ $requestTipoAceite == $Aceite->IdAceite ? 'selected' : '' }}>
                                                    {{ $Aceite->Descripcion }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </form>
                            <form method="POST" action="{{route('RegistrarServicioMantenimiento.store')}}"
                                  class="grid grid-cols-1 md:grid-cols-1 gap-4 mb-4">
                                @csrf
                                <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                    <div class="inline-flex justify-between items-center w-full">
                                        <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Tareas de aceite</h6>
                                        <button type="button"
                                                class="toggle-button inline-flex items-center px-3 py-2 transition ease-in-out duration-150">
                                            <div class="icon">
                                                @include('icons/show')
                                            </div>
                                        </button>
                                    </div>
                                    <div>
                                        <label for="tipoAceite"
                                               class="block text-sm font-medium text-gray-700">Nombre del
                                            servicio</label>
                                        <input type="hidden" name="tipoAceite"
                                               value="{{ isset($typeAceite->IdAceite) ? $typeAceite->IdAceite : '' }}"
                                               readonly>
                                        <input type="text" id="tipoAceite"
                                               value="{{ isset($typeAceite->Descripcion) ? $typeAceite->Descripcion : '' }}"
                                               class="border-0 px-3 py-3 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                               readonly>
                                    </div>
                                    <br>
                                    {{-- Mostrar los servicios obtenidos en una tabla --}}
                                    <div class="mt-6">
                                        <h2 class="text-lg font-semibold text-gray-900 dark:text-gray-100">Servicios Disponibles</h2>
                                        <div class="overflow-x-auto">
                                            <table class="min-w-full bg-white dark:bg-gray-700">
                                                <thead>
                                                    <tr>
                                                        <th class="py-2 px-4 border-b">Seleccionar</th>
                                                        <th class="py-2 px-4 border-b">Descripción del Servicio</th>
                                                        <th class="py-2 px-4 border-b">Tipo de Aceite</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($servicios as $servicio)
                                                        <tr>
                                                            <td class="py-2 px-4 border-b text-center">
                                                                <input type="checkbox" name="servicios[]" value="{{ $servicio->IdServicio }}" class="rounded">
                                                            </td>
                                                            <td class="py-2 px-4 border-b">{{ $servicio->Descripcion }}</td>
                                                            <td class="py-2 px-4 border-b">{{ $servicio->tipoAceite->Descripcion ?? 'Sin tipo de aceite' }}</td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <br>
                                    <div>
                                        <div>
                                            <input type="checkbox" id="estado" name="estado"
                                                   class="rounded">
                                            <label for="estado"
                                                   class="text-sm font-medium text-gray-700">Estado</label>
                                        </div>
                                        <br>
                                        <div class="grid grid-cols-1 md:grid-cols-1 gap-4 mb-4">
                                            <x-button class="px-4 py-2">
                                                {{ __('Salvar Aceite') }}
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#tipoAceite').select2({
                placeholder: "Seleccione un tipo de Aceite",
                allowClear: true
            });
        });
    </script>
    @include ('footer')
</x-app-layout>
