<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Facturación') }}
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
                            <div class="flex flex-wrap items-center justify-between">
                                <div class="flex items-center justify-start">
                                    <h1 class="text-xl font-semibold mb-4 text-gray-900 dark:text-gray-100">Facturación
                                    </h1>
                                </div>
                                <div class="inline-flex items-center justify-center space-x-2 mr-3">
                                    <div class="flex-end flex flex-col space-y-0.3 justify-end">
                                        <div class="sm:flex sm:items-center ">
                                            <div class="relative">
                                                <x-dropdown align="right" width="60">
                                                    <x-slot name="trigger">
                                                        <span class="inline-flex rounded-md">
                                                            <button type="button"
                                                                class="inline-flex items-center px-3 py-2 border border-black text-sm leading-4 font-medium rounded-md text-black bg-white hover:bg-gray-50 focus:outline-none focus:bg-gray-50 active:bg-gray-100 transition ease-in-out duration-150">
                                                                <span class="ml-2 hidden sm:inline-block">Cargar
                                                                    datos</span>
                                                                <svg class="ml-2 -mr-0.5 h-4 w-4 hidden sm:inline-block"
                                                                    xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 24 24" stroke-width="1.5"
                                                                    stroke="currentColor">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9" />
                                                                </svg>
                                                                <div class="block sm:hidden">
                                                                    @include('icons/subir')
                                                                </div>
                                                            </button>
                                                        </span>
                                                    </x-slot>

                                                    <x-slot name="content">
                                                        <div class="w-60">
                                                            <!-- Team Management -->
                                                            <div class="block px-4 py-2 text-xs text-gray-400">
                                                                {{ __('Cargar datos') }}
                                                            </div>

                                                            <!-- Team Settings -->
                                                            <x-dropdown-link
                                                                href="{{ route('teams.show', Auth::user()->currentTeam->id) }}">
                                                                {{ __('PDF') }}
                                                            </x-dropdown-link>
                                                            <x-dropdown-link
                                                                href="{{ route('teams.show', Auth::user()->currentTeam->id) }}">
                                                                {{ __('Excel') }}
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
                                </div>
                            </div>
                            <hr style="border-color: #FF914D" class="p-2">
                            {{-- <p class="text-gray-600 dark:text-gray-300 mb-6">Use a permanent address where you can
                                receive mail.</p> --}}
                            <form>
                                <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                    <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Datos del cliente</h6>
                                    <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-4">
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Genero</label>
                                            <input type="text" placeholder="VIN" class="border p-2 rounded w-full">
                                        </div>
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Cumpleanos</label>
                                                <input id="fechaExpedicion" type="date"
                                                class="border p-2 rounded w-full">
                                        </div>
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Edad</label>
                                            <input type="text" placeholder="Descripción"
                                                class="border p-2 rounded w-full">
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Telefono</label>
                                            <input type="text" placeholder="VIN" class="border p-2 rounded w-full">
                                        </div>
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Email</label>
                                            <input type="text" placeholder="Descripción"
                                                class="border p-2 rounded w-full">
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-4">
                                        <div>
                                            <label for="transmision"
                                                class="block text-sm font-medium text-gray-700">Member Status</label>
                                            <select id="transmision" class="border p-2 rounded w-full mt-1">
                                                <option value="manual">Activo</option>
                                                <option value="automatica">Inactivo</option>
                                            </select>
                                        </div>
                                        <div>
                                            <label for="color" class="block text-sm font-medium text-gray-700">Dia de
                                                registro</label>
                                            <input id="fechaExpedicion" type="date"
                                                class="border p-2 rounded w-full">
                                        </div>
                                    </div>
                                </div>
                                <div class="p-2"></div>
                                <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                    <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Vehiculo</h6>
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
                                    <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Forma de pago</h6>
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
                                <x-button class="px-4 py-2">
                                    {{ __('Registrar factura') }}
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
