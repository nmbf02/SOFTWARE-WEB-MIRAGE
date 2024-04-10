<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Registrar orden de compra') }}
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
                                    <h1 class="text-xl font-semibold mb-4 text-gray-900 dark:text-gray-100">Orden de
                                        compra
                                    </h1>
                                </div>
                                {{-- <div class="inline-flex items-center justify-center space-x-2 mr-3">
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
                                                                {{ __('Venta') }}
                                                            </x-dropdown-link>
                                                            <x-dropdown-link
                                                                href="{{ route('teams.show', Auth::user()->currentTeam->id) }}">
                                                                {{ __('Cotización') }}
                                                            </x-dropdown-link>
                                                            <x-dropdown-link
                                                                href="{{ route('teams.show', Auth::user()->currentTeam->id) }}">
                                                                {{ __('Préstamo de solicitud') }}
                                                            </x-dropdown-link>
                                                        </div>
                                                    </x-slot>
                                                </x-dropdown>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                            <hr style="border-color: #FF914D" class="p-2">
                            {{-- <p class="text-gray-600 dark:text-gray-300 mb-6">Use a permanent address where you can
                                receive mail.</p> --}}
                            <form>
                                <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                    <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Datos del suplidor</h6>
                                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Código</label>
                                            <input type="text" placeholder="Código"
                                                class="border p-2 rounded w-full">
                                        </div>
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Nombre</label>
                                            <input type="text" placeholder="Nombre"
                                                class="border p-2 rounded w-full">
                                        </div>
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Condición</label>
                                            <select id="porcentajeMora" name="porcentajeMora"
                                                class="border p-2 rounded w-full">
                                                <option value="">Selecciona una condición</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-2"></div>
                                <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                    <h6 class="text-sm mt-3 mb-6 font-bold uppercase">VEHÍCULO</h6>
                                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">VIN</label>
                                            <input type="text" placeholder="VIN" class="border p-2 rounded w-full">
                                        </div>
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Descripción</label>
                                            <input type="text" placeholder="Nombre del vehículo"
                                                class="border p-2 rounded w-full">
                                        </div>
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                                            <div>
                                                <label for="color"
                                                    class="block text-sm font-medium text-gray-700">Cantidad</label>
                                                <input type="number" placeholder="Cant."
                                                    class="border p-2 rounded w-full">
                                            </div>
                                            <div>
                                                <label for="color"
                                                    class="block text-sm font-medium text-gray-700">Precio</label>
                                                <input type="number" placeholder="Precio"
                                                    class="border p-2 rounded w-full">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-2"></div>
                                <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                    <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Detalle</h6>
                                    <div class="grid grid-cols-1 md:grid-cols-1 gap-4 mb-4">
                                        <div>
                                            <table id="example" class="table table-striped table-bordered"
                                                style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Position</th>
                                                        <th>Office</th>
                                                        <th>Age</th>
                                                        <th>Start date</th>
                                                        <th>Salary</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Tiger Nixon</td>
                                                        <td>System Architect</td>
                                                        <td>Edinburgh</td>
                                                        <td>61</td>
                                                        <td>2011-04-25</td>
                                                        <td>$320,800</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Garrett Winters</td>
                                                        <td>Accountant</td>
                                                        <td>Tokyo</td>
                                                        <td>63</td>
                                                        <td>2011-07-25</td>
                                                        <td>$170,750</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Ashton Cox</td>
                                                        <td>Junior Technical Author</td>
                                                        <td>San Francisco</td>
                                                        <td>66</td>
                                                        <td>2009-01-12</td>
                                                        <td>$86,000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Cedric Kelly</td>
                                                        <td>Senior Javascript Developer</td>
                                                        <td>Edinburgh</td>
                                                        <td>22</td>
                                                        <td>2012-03-29</td>
                                                        <td>$433,060</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Airi Satou</td>
                                                        <td>Accountant</td>
                                                        <td>Tokyo</td>
                                                        <td>33</td>
                                                        <td>2008-11-28</td>
                                                        <td>$162,700</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Brielle Williamson</td>
                                                        <td>Integration Specialist</td>
                                                        <td>New York</td>
                                                        <td>61</td>
                                                        <td>2012-12-02</td>
                                                        <td>$372,000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Herrod Chandler</td>
                                                        <td>Sales Assistant</td>
                                                        <td>San Francisco</td>
                                                        <td>59</td>
                                                        <td>2012-08-06</td>
                                                        <td>$137,500</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Rhona Davidson</td>
                                                        <td>Integration Specialist</td>
                                                        <td>Tokyo</td>
                                                        <td>55</td>
                                                        <td>2010-10-14</td>
                                                        <td>$327,900</td>
                                                    </tr>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Position</th>
                                                        <th>Office</th>
                                                        <th>Age</th>
                                                        <th>Start date</th>
                                                        <th>Salary</th>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-2"></div>
                                <x-button class="px-4 py-2">
                                    {{ __('Registrar orden de compra') }}
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

@section('js')
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/2.0.3/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.0.3/js/dataTables.bootstrap4.js"></script>
<script>
    $('#example').DataTable();
</script>

@endsection