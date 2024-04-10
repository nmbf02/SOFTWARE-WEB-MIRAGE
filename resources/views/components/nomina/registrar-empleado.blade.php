<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Registrar empleado') }}
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
                            <h1 class="text-xl font-semibold mb-4 text-gray-900 dark:text-gray-100">Registrar empleado
                            </h1>

                            <hr style="border-color: #FF914D" class="p-2">
                            {{-- <p class="text-gray-600 dark:text-gray-300 mb-6">Use a permanent address where you can
                        receive mail.</p> --}}
                            <form>
                                <h6 class="text-sm mt-3 mb-6 font-bold uppercase">
                                    Información del empleado
                                </h6>
                                <div class="w-full lg:w-4/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <div class="w-full lg:w-6/12">
                                            <div class="relative w-full mb-3">
                                                <label class="block uppercase text-xs font-bold mb-2"
                                                    htmlfor="grid-password">
                                                    Código del empleado
                                                </label>
                                                <input type="text"
                                                    class="border-0 px-1 py-3 placeholder-blueGray-300 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                    value="" placeholder="Código del suplidor">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex flex-wrap">
                                    <div class="w-full lg:w-6/12 px-4">
                                        <div class="relative w-full mb-3">
                                            <label class="block uppercase text-xs font-bold mb-2"
                                                htmlfor="grid-password">
                                                Nombre
                                            </label>
                                            <input type="text"
                                                class="border-0 px-3 py-3 placeholder-blueGray-300 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                value="" placeholder="Nombre">
                                        </div>
                                    </div>
                                    <div class="w-full lg:w-6/12 px-4">
                                        <div class="relative w-full mb-3">
                                            <label class="block uppercase text-xs font-bold mb-2"
                                                htmlfor="grid-password">
                                                Apellido
                                            </label>
                                            <input type="text"
                                                class="border-0 px-3 py-3 placeholder-blueGray-300 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                value="" placeholder="Apellido">
                                        </div>
                                    </div>
                                    <div class="w-full lg:w-6/12 px-4">
                                        <div class="relative w-full mb-3">
                                            <label class="block uppercase text-xs font-bold mb-2"
                                                htmlfor="grid-password">
                                                Fecha de nacimiento
                                            </label>
                                            <input type="date"
                                                class="border-0 px-3 py-3 placeholder-blueGray-300  bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                value="Fecha de nacimiento">
                                        </div>
                                    </div>
                                    <div class="w-full lg:w-6/12 px-4">
                                        <div class="relative w-full mb-3">
                                            <label class="block uppercase text-xs font-bold mb-2"
                                                htmlfor="grid-password">
                                                Seguro
                                            </label>
                                            <input type="text"
                                                class="border-0 px-3 py-3 placeholder-blueGray-300 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                value="" placeholder="Seguro">
                                        </div>
                                    </div>
                                </div>
                                <hr class="mt-6 border-b-1 border-blueGray-300">
                                <h6 class="text-sm mt-3 mb-6 font-bold uppercase">
                                    Contacto
                                </h6>
                                <div class="flex flex-wrap">
                                    <div class="w-full lg:w-12/12 px-4">
                                        <div class="relative w-full mb-3">
                                            <label class="block uppercase text-xs font-bold mb-2"
                                                htmlfor="grid-password">
                                                Direccion
                                            </label>
                                            {{-- <input type="text"
                                              class="border-0 px-3 py-3 placeholder-blueGray-300 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                              value="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09"> --}}
                                        </div>
                                    </div>
                                    <div class="w-full lg:w-4/12 px-4">
                                        <div class="relative w-full mb-3">
                                            <label class="block uppercase text-xs font-bold mb-2"
                                                htmlfor="grid-password">
                                                Casa
                                            </label>
                                            <input type="text"
                                                class="border-0 px-3 py-3 placeholder-blueGray-300  bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                placeholder="Casa">
                                        </div>
                                    </div>
                                    <div class="w-full lg:w-4/12 px-4">
                                        <div class="relative w-full mb-3">
                                            <label class="block uppercase text-xs font-bold mb-2"
                                                htmlfor="grid-password">
                                                Calle
                                            </label>
                                            <input type="text"
                                                class="border-0 px-3 py-3 placeholder-blueGray-300 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                value="" placeholder="Calle">
                                        </div>
                                    </div>
                                    <div class="w-full lg:w-4/12 px-4">
                                        <div class="relative w-full mb-3">
                                            <label for="sector-select" class="block uppercase text-xs font-bold mb-2">
                                                Sector
                                            </label>
                                            <select id="sector-select" name="sector"
                                                class="border-0 px-3 py-3 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                                <option value="">Seleccione un sector</option>
                                                <option value="zona-colonial">Zona Colonial</option>
                                                <option value="piantini">Piantini</option>
                                                <option value="bella-vista">Bella Vista</option>
                                                <option value="naco">Naco</option>
                                                <option value="serralles">Serralles</option>
                                                <option value="gazcue">Gazcue</option>
                                                <option value="los-prados">Los Prados</option>
                                                <option value="ensanche-julia">Ensanche Julia</option>
                                                <option value="el-millón">El Millón</option>
                                                <option value="arroyo-hondo">Arroyo Hondo</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="w-full lg:w-4/12 px-4">
                                        <div class="relative w-full mb-3">
                                            <label class="block uppercase text-xs font-bold mb-2"
                                                htmlfor="grid-password">
                                                Teléfono
                                            </label>
                                            <input type="text"
                                                class="border-0 px-3 py-3 placeholder-blueGray-300  bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                placeholder="Teléfono">
                                        </div>
                                    </div>
                                    <div class="w-full lg:w-4/12 px-4">
                                        <div class="relative w-full mb-3">
                                            <label class="block uppercase text-xs font-bold mb-2"
                                                htmlfor="grid-password">
                                                Email
                                            </label>
                                            <input type="email"
                                                class="border-0 px-3 py-3 placeholder-blueGray-300 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                value="" placeholder="Email">
                                        </div>
                                    </div>
                                </div>
                                <hr class="mt-6 border-b-1 border-blueGray-300">
                                <h6 class="text-sm mt-3 mb-6 font-bold uppercase">
                                    Información Adicional
                                </h6>
                                <div class="flex flex-wrap">
                                    {{-- Tipo --}}
                                    <div class="w-full lg:w-4/12 px-4">
                                        <div class="relative w-full mb-3">
                                            <label class="block uppercase text-xs font-bold mb-2"
                                                htmlfor="grid-password">
                                                Tipo de empleado
                                            </label>
                                            <div class="flex gap-2 items-center">
                                                <select id="sector-select" name="sector"
                                                    class="border-0 px-3 py-3 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                    required>
                                                    <option value="">Seleccionar</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Contrato --}}
                                    <div class="w-full lg:w-4/12 px-4">
                                        <div class="relative w-full mb-3">
                                            <label class="block uppercase text-xs font-bold mb-2"
                                                htmlfor="grid-password">
                                                Contrato
                                            </label>
                                            <div class="flex gap-2 items-center">
                                                <select id="sector-select" name="sector"
                                                    class="border-0 px-3 py-3 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                    required>
                                                    <option value="">Seleccionar</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Cargo --}}
                                    <div class="w-full lg:w-4/12 px-4">
                                        <div class="relative w-full mb-3">
                                            <label class="block uppercase text-xs font-bold mb-2"
                                                htmlfor="grid-password">
                                                Cargo
                                            </label>
                                            <select id="sector-select" name="sector"
                                                class="border-0 px-3 py-3 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                required>
                                                <option value="">Seleccionar</option>
                                            </select>
                                        </div>
                                    </div>
                                    {{-- Departamento --}}
                                    <div class="w-full lg:w-4/12 px-4">
                                        <div class="relative w-full mb-3">
                                            <label class="block uppercase text-xs font-bold mb-2"
                                                htmlfor="grid-password">
                                                Departamento
                                            </label>
                                            <select id="sector-select" name="sector"
                                                class="border-0 px-3 py-3 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                required>
                                                <option value="">Seleccionar</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <hr class="mt-6 border-b-1 border-blueGray-300">
                                <h6 class="text-sm mt-3 mb-6 font-bold uppercase">
                                    Detalle de nomina
                                </h6>
                                <div class="flex flex-wrap">
                                    {{-- Fecha de ingreso --}}
                                    <div class="w-full lg:w-4/12 px-4">
                                        <div class="relative w-full mb-3">
                                            <label class="block uppercase text-xs font-bold mb-2"
                                                htmlfor="grid-password">
                                                Fecha de ingreso
                                            </label>
                                            <input type="date"
                                                class="border-0 px-3 py-3 placeholder-blueGray-300 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                value="" placeholder="Nombre">
                                        </div>
                                    </div>
                                    {{-- Salario base --}}
                                    <div class="w-full lg:w-4/12 px-4">
                                        <div class="relative w-full mb-3">
                                            <label class="block uppercase text-xs font-bold mb-2"
                                                htmlfor="grid-password">
                                                Salario
                                            </label>
                                            <input type="number"
                                                class="border-0 px-3 py-3 placeholder-blueGray-300 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                value="" placeholder="Sueldo">
                                        </div>
                                    </div>
                                    {{-- Pago por hora --}}
                                    <div class="w-full lg:w-4/12 px-4">
                                        <div class="relative w-full mb-3">
                                            <label class="block uppercase text-xs font-bold mb-2"
                                                htmlfor="grid-password">
                                                Pago por hora
                                            </label>
                                            <input type="number"
                                                class="border-0 px-3 py-3 placeholder-blueGray-300 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                value="" placeholder="Pago por hora">
                                        </div>
                                    </div>
                                    {{-- Horas semanales --}}
                                    <div class="w-full lg:w-4/12 px-4">
                                        <div class="relative w-full mb-3">
                                            <label class="block uppercase text-xs font-bold mb-2"
                                                htmlfor="grid-password">
                                                Horas semanales
                                            </label>
                                            <input type="number"
                                                class="border-0 px-3 py-3 placeholder-blueGray-300 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                value="" placeholder="Horas semanales">
                                        </div>
                                    </div>
                                    {{-- Nomina --}}
                                    <div class="w-full lg:w-4/12 px-4">
                                        <div class="relative w-full mb-3">
                                            <label class="block uppercase text-xs font-bold mb-2"
                                                htmlfor="grid-password">
                                                Nomina
                                            </label>
                                            <select id="sector-select" name="sector"
                                                class="border-0 px-3 py-3 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                required>
                                                <option value="">Seleccionar</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <hr class="mt-6 border-b-1 border-blueGray-300">
                                <h6 class="text-sm mt-3 mb-6 font-bold uppercase">
                                    Banco
                                </h6>
                                <div class="flex flex-wrap">
                                    {{-- Número de cuenta --}}
                                    <div class="w-full lg:w-4/12 px-4">
                                        <div class="relative w-full mb-3">
                                            <label class="block uppercase text-xs font-bold mb-2"
                                                htmlfor="grid-password">
                                                Número de cuenta
                                            </label>
                                            <input type="text"
                                                class="border-0 px-3 py-3 placeholder-blueGray-300 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                value="" placeholder="Cuenta de banco">
                                        </div>
                                    </div>
                                    {{-- Banco --}}
                                    <div class="w-full lg:w-4/12 px-4">
                                        <div class="relative w-full mb-3">
                                            <label class="block uppercase text-xs font-bold mb-2"
                                                htmlfor="grid-password">
                                                Banco
                                            </label>
                                            <select id="sector-select" name="sector"
                                                class="border-0 px-3 py-3 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                required>
                                                <option value="">Seleccionar</option>
                                            </select>
                                        </div>
                                    </div>
                                    {{-- Tipo --}}
                                    <div class="w-full lg:w-4/12 px-4">
                                        <div class="relative w-full mb-3">
                                            <label class="block uppercase text-xs font-bold mb-2"
                                                htmlfor="grid-password">
                                                Tipo
                                            </label>
                                            <select id="sector-select" name="sector"
                                                class="border-0 px-3 py-3 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                required>
                                                <option value="">Seleccionar</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="p-2"></div>
                            <x-button class="px-4 py-2 mb-3">
                                {{ __('Registrar empleado') }}
                            </x-button>
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
