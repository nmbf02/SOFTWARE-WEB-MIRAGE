<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Consulta de Cotizacion Subasta') }}
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
                                <label for="topbar-search" class="sr-only">Buscar</label>
                                <div class="mt-1 relative lg:w-64">
                                    <input type="text" name="email" id="topbar-search"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full pl-2 p-2.5"
                                        placeholder="Número de cotizacion Subasta">
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
                                    onmouseup="this.style.backgroundColor='#E7814D'">
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
                                                            cotizacion Subasta</span>
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
                            <div class="flex-end flex flex-col space-y-0.3 justify-end">
                                <button type="button"
                                    class="inline-flex items-center px-3 py-2 border border-black text-sm leading-4 font-medium rounded-md text-black bg-white hover:bg-gray-50 focus:outline-none focus:bg-gray-50 active:bg-gray-100 transition ease-in-out duration-150">
                                    @include('icons/imprimir')
                                    <span class="ml-2 hidden sm:inline-block">Imprimir</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <hr>

                <div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8 ">
                    <div class="mb-4 flex items-center justify-between">
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Latest Transactions</h3>
                            <span class="text-base font-normal text-gray-500">This is a list of latest
                                transactions</span>
                        </div>
                        <div class="flex-shrink-0">
                            <a href="#"
                                class="text-sm font-medium text-cyan-600 hover:bg-gray-100 rounded-lg p-2">View
                                all</a>
                        </div>
                    </div>
                    <div class="flex flex-col mt-8">
                        <div class="overflow-x-auto rounded-lg">
                            <div class="align-middle inline-block min-w-full">
                                <div class="shadow overflow-hidden sm:rounded-lg">
                                    <table class="min-w-full divide-y divide-gray-200">
                                        <thead class="bg-gray-50">
                                            <tr>
                                                <th scope="col"
                                                    class="p-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                    Transaction
                                                </th>
                                                <th scope="col"
                                                    class="p-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                    Date & Time
                                                </th>
                                                <th scope="col"
                                                    class="p-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                    Amount
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
                                                <td class="p-4 whitespace-nowrap text-sm font-semibold text-gray-900">
                                                    $2300
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
                                                <td class="p-4 whitespace-nowrap text-sm font-semibold text-gray-900">
                                                    -$670
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-900">
                                                    Payment failed from <span class="font-semibold">#087651</span>
                                                </td>
                                                <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-500">
                                                    Apr 18 ,2021
                                                </td>
                                                <td class="p-4 whitespace-nowrap text-sm font-semibold text-gray-900">
                                                    $234
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
                                                <td class="p-4 whitespace-nowrap text-sm font-semibold text-gray-900">
                                                    $5000
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-900">
                                                    Payment from <span class="font-semibold">Jese Leos</span>
                                                </td>
                                                <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-500">
                                                    Apr 15 ,2021
                                                </td>
                                                <td class="p-4 whitespace-nowrap text-sm font-semibold text-gray-900">
                                                    $2300
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
                                                <td class="p-4 whitespace-nowrap text-sm font-semibold text-gray-900">
                                                    $560
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-900">
                                                    Payment from <span class="font-semibold">Lana Lysle</span>
                                                </td>
                                                <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-500">
                                                    Apr 6 ,2021
                                                </td>
                                                <td class="p-4 whitespace-nowrap text-sm font-semibold text-gray-900">
                                                    $1437
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
                                                <td class="p-4 whitespace-nowrap text-sm font-semibold text-gray-900">
                                                    $560
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-900">
                                                    Payment from <span class="font-semibold">Lana Lysle</span>
                                                </td>
                                                <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-500">
                                                    Apr 6 ,2021
                                                </td>
                                                <td class="p-4 whitespace-nowrap text-sm font-semibold text-gray-900">
                                                    $1437
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
                                                <td class="p-4 whitespace-nowrap text-sm font-semibold text-gray-900">
                                                    $560
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-900">
                                                    Payment from <span class="font-semibold">Lana Lysle</span>
                                                </td>
                                                <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-500">
                                                    Apr 6 ,2021
                                                </td>
                                                <td class="p-4 whitespace-nowrap text-sm font-semibold text-gray-900">
                                                    $1437
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
