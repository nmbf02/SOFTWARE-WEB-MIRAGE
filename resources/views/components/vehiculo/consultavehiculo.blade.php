<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Consulta de vehículos') }}
        </h2>
    </x-slot>
    @include ('aside')

    <div>
        <div class="flex overflow-hidden bg-white">
            <div class="bg-gray-900 opacity-50 hidden fixed inset-0 z-10" id="sidebarBackdrop"></div>
            <div id="main-content" class="h-full w-full bg-white relative overflow-y-auto lg:ml-64">
                <div class="shadow rounded px-3 py-3 lg:px-5 lg:pl-3">
                    <div class="flex flex-wrap items-center justify-between">
                        <div class="flex items-center justify-start">
                            <form action="#" method="GET" class="lg:block lg:pl">
                                <label for="topbar-search" class="sr-only">Buscar vehículo</label>
                                <div class="mt-1 relative lg:w-64">
                                    <input type="text" name="email" id="topbar-search"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full pl-2 p-2.5"
                                        placeholder="VIN del vehículo">
                                </div>
                            </form>
                        </div>
                        <div class="inline-flex items-center justify-center space-x-2 mr-3">
                            <div class="flex-end flex flex-col space-y-0.3 justify-end">
                                <button type="button"
                                    class="inline-flex items-center px-3 py-2 border text-sm leading-4 font-medium rounded-md text-black transition ease-in-out duration-150"
                                    style="background-color: #FF914D; border-color: white;"
                                    onmouseover="this.style.backgroundColor='#E7814D'"
                                    onmouseout="this.style.backgroundColor='#FF914D'"
                                    onfocus="this.style.backgroundColor='#E7814D'"
                                    onblur="this.style.backgroundColor='#FF914D'"
                                    onmousedown="this.style.backgroundColor='#CC6C3B'"
                                    onmouseup="this.style.backgroundColor='#E7814D'"
                                    onclick="window.location='{{ route('registerVehicle') }}'">
                                    @include('icons/registrar')
                                </button>
                            </div>
                            <div class="flex-end flex flex-col space-y-0.3 justify-end">
                                <div class="sm:flex sm:items-center ">
                                    <div class="relative">
                                        <x-dropdown align="right" width="60">
                                            <x-slot name="trigger">
                                                <span class="inline-flex rounded-md">
                                                    <button type="button"
                                                        class="inline-flex items-center px-3 py-2 border border-black text-sm leading-4 font-medium rounded-md text-black bg-white hover:bg-gray-50 focus:outline-none focus:bg-gray-50 active:bg-gray-100 transition ease-in-out duration-150">
                                                        <span class="ml-2 hidden sm:inline-block">Descargar
                                                            datos del vehículo</span>
                                                        <svg class="ml-2 -mr-0.5 h-4 w-4 hidden sm:inline-block"
                                                            xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke-width="1.5"
                                                            stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9" />
                                                        </svg>
                                                        <div class="block sm:hidden">
                                                            @include('icons/descargar')
                                                        </div>
                                                    </button>
                                                </span>
                                            </x-slot>

                                            <x-slot name="content">
                                                <div class="w-60">
                                                    <!-- Team Management -->
                                                    <div class="block px-4 py-2 text-xs text-gray-400">
                                                        {{ __('Formatos') }}
                                                    </div>

                                                    <!-- Team Settings -->
                                                    <x-dropdown-link
                                                        href="{{ route('teams.show', Auth::user()->currentTeam->id) }}">
                                                        {{ __('PDF') }}
                                                    </x-dropdown-link>
                                                    <x-dropdown-link
                                                        href="{{ route('teams.show', Auth::user()->currentTeam->id) }}">
                                                        {{ __('Compartir') }}
                                                    </x-dropdown-link>
                                                </div>
                                            </x-slot>
                                        </x-dropdown>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-end flex flex-col space-y-0.3 justify-end">
                                <button type="button"
                                    class="inline-flex items-center px-3 py-2 border border-black text-sm leading-4 font-medium rounded-md text-black bg-white hover:bg-gray-50 focus:outline-none focus:bg-gray-50 active:bg-gray-100 transition ease-in-out duration-150">
                                    @include('icons/imprimir')
                                    <span class="ml-2 hidden sm:inline-block">Imprimir</span>
                                </button>
                            </div>
                            <div class="flex-end flex flex-col space-y-0.3 justify-end">
                                <button type="button"
                                    class="group inline-flex items-center px-3 py-2 border border-black text-sm leading-4 font-medium rounded-md text-black bg-white hover:bg-red-600 hover:border-red-600 hover:text-white focus:outline-none focus:bg-red-600 focus:border-red-600 focus:text-white active:bg-red-700 active:border-red-700 transition ease-in-out duration-150">
                                    <div class="group-hover:hidden">
                                        @include('icons/borrar-negro') <!-- Icono visible por defecto -->
                                    </div>
                                    <div class="hidden group-hover:block">
                                        @include('icons/borrar-blanco') <!-- Icono que se muestra en hover -->
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <hr>

                <div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8 ">
                    <div class="mb-4 flex items-center justify-between">
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Gestión de Vehículos</h3>
                            <span class="text-base font-normal text-gray-500">Consulta</span>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <table class="table table-bordered w-full border-collapse bg-white text-left text-sm text-gray-500 ">
                        <thead  class="bg-white">
                            <tr>
                                <th  scope="col" class="px-6 py-4 font-bold text-gray-900 scope=">ID</th>
                                <th scope="col" class="px-6 py-4 font-bold text-gray-900">VIN</th>
                                <th scope="col" class="px-6 py-4 font-bold text-gray-900">Precio</th>
                                <th scope="col" class="px-6 py-4 font-bold text-gray-900">Año</th>
                                <th scope="col" class="px-6 py-4 font-bold text-gray-900">Placa</th>
                                <th scope="col" class="px-6 py-4 font-bold text-gray-900">Acciones</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100 border-t border-gray-100">
                            @foreach ($vehiculos as $vehiculo)
                                <tr class="hover:bg-gray-50">
                                    <td class="px-6 py-4">{{ $vehiculo->IdVehiculo }}</td>
                                    <td class="px-6 py-4">{{ $vehiculo->VIN }}</td>
                                    <td class="px-6 py-4">{{ $vehiculo->Precio }}</td>
                                    <td class="px-6 py-4">{{ $vehiculo->AnoVehiculo }}</td>
                                    <td>{{ $vehiculo->Placa }}</td>
                                    <td class="px-6 py-4">
                                        {{-- <a href="{{ route('vehiculos.edit', $vehiculo->IdVehiculo) }}"
                                            class="btn btn-primary">Editar</a>
                                        <form action="{{ route('vehiculos.destroy', $vehiculo->IdVehiculo) }}"
                                            method="POST" style="display: inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Eliminar</button>
                                        </form> --}}
                                        <a href="{{ route('editVehicle', ['id' => $vehiculo->IdVehiculo]) }}" class="btn btn-primary">Editar</a>
                                         
                                            <form action="{{ route('RegitrarVehiculo.destroy', $vehiculo->IdVehiculo) }}"
                                                method="POST" >
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Eliminar</button> 
                                            </form> 
                                        
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                     
                </div>
            </div>
        </div>
    </div>
    @include ('footer')
    <script src="/js/paginacion.js"></script>
</x-app-layout>
