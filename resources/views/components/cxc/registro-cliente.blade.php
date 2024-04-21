<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Registrar cliente') }}
        </h2>
    </x-slot>
    @include ('aside')
    <!-- component -->
    {{-- <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
    <link rel="stylesheet"
        href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css"> --}}

    <div>
        <div class="flex overflow-hidden bg-white">
            <div class="bg-gray-900 opacity-50 hidden fixed inset-0 z-10" id="sidebarBackdrop"></div>
            <div id="main-content" class="h-full w-full bg-white relative overflow-y-auto lg:ml-64">
                <div class="bg-white dark:bg-gray-800 transition-colors duration-300">
                    <div class="containerh-full w-full bg-white relative overflow-y-auto lg:ml">
                        <div class="bg-white dark:bg-gray-700 {{-- shadow rounded-lg --}} p-6">
                            <h1 class="text-xl font-semibold mb-4 text-gray-900 dark:text-gray-100">Registro de clientes
                            </h1>
                            <hr style="border-color: #FF914D" class="p-2">
                            <form method="POST" action="{{ route('Clientes.store') }}">
                                @csrf 
                                <h6 class="text-sm mt-3 mb-6 font-bold uppercase">
                                    Información del Cliente
                                </h6>
                                {{-- Codigo del cliente --}}
                                {{-- <div class="w-full lg:w-4/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <div class="w-full lg:w-6/12">
                                            <div class="relative w-full mb-3">
                                                <label class="block uppercase text-xs font-bold mb-2"
                                                    for=" ">
                                                    Código del cliente
                                                </label>
                                                <input type="text"
                                                    class="border-0 px-1 py-3 placeholder-blueGray-300 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                    value="" placeholder="Código del cliente">
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                                <div class="flex flex-wrap">
                                    <div class="w-full lg:w-6/12 px-4">
                                        <div class="relative w-full mb-3">
                                            <label class="block uppercase text-xs font-bold mb-2" for="">
                                                Nombre
                                            </label>
                                            <input name="nombrecliente" type="text"
                                                class="border-0 px-3 py-3 placeholder-blueGray-300 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                value="" placeholder="Nombre">
                                        </div>
                                    </div>
                                    <div class="w-full lg:w-6/12 px-4">
                                        <div class="relative w-full mb-3">
                                            <label class="block uppercase text-xs font-bold mb-2" for="">
                                                Apellido
                                            </label>
                                            <input name="apellidocliente" type="text"
                                                class="border-0 px-3 py-3 placeholder-blueGray-300 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                value="" placeholder="Apellido">
                                        </div>
                                    </div>
                                    <div class="w-full lg:w-6/12 px-4">
                                        <div class="relative w-full mb-3">
                                            <label class="block uppercase text-xs font-bold mb-2" for="">
                                                Fecha de nacimiento
                                            </label>
                                            <input name="fechanacimientocliente" type="date"
                                                class="border-0 px-3 py-3 placeholder-blueGray-300  bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                value="Fecha de nacimiento">
                                        </div>
                                    </div>
                                    <div>
                                        <label class="block uppercase text-xs font-bold mb-2" for="seguroPersona">
                                            Seguro
                                        </label>
                                        <select name="seguroPersona" id="seguroPersona"
                                            class="border-0 px-3 py-3 placeholder-blueGray-300 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                            placeholder="Seleccione un seguro">
                                            @foreach ($seguroPersona as $seguro)
                                                <option value="{{ $seguro->IdSeguro }}">
                                                    {{ $seguro->IdSeguro }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <hr class="mt-6 border-b-1 border-blueGray-300">

                                <h6 class="text-sm mt-3 mb-6 font-bold uppercase">
                                    Contacto
                                </h6>
                                <div class="flex flex-wrap">
                                    <div class="w-full lg:w-12/12 px-4">
                                        <div class="relative w-full mb-3">
                                            <label class="block uppercase text-xs font-bold mb-2" for="">
                                                Dirección
                                            </label>
                                            <input name="direccionpersona" type="text"
                                                class="border-0 px-3 py-3 placeholder-blueGray-300 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                placeholder="direcionPersona">
                                        </div>
                                    </div>
                                    <div class="w-full lg:w-4/12 px-4">
                                        <div class="relative w-full mb-3">
                                            <label class="block uppercase text-xs font-bold mb-2" for="">
                                                Casa
                                            </label>
                                            <input name="casapersona" type="text"
                                                class="border-0 px-3 py-3 placeholder-blueGray-300  bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                placeholder="Casa">
                                        </div>
                                    </div>
                                    <div class="w-full lg:w-4/12 px-4">
                                        <div class="relative w-full mb-3">
                                            <label class="block uppercase text-xs font-bold mb-2" for="">
                                                Calle
                                            </label>
                                            <input name="callepersona" type="text"
                                                class="border-0 px-3 py-3 placeholder-blueGray-300 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                value="" placeholder="Calle">
                                        </div>
                                    </div>
                                    <div class="w-full lg:w-4/12 px-4">
                                        <div>
                                            <label class="block uppercase text-xs font-bold mb-2" for="sectorPersona">
                                                Sector
                                            </label>
                                            <select name="sectorPersona" id="sectorPersona"
                                                class="border-0 px-3 py-3 placeholder-blueGray-300 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                placeholder="Seleccione un sector">
                                                @foreach ($sectorPersona as $sector)
                                                    <option value="{{ $sector->IdSector }}">
                                                        {{ $sector->Descripcion }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="w-full lg:w-4/12 px-4">
                                        <div class="relative w-full mb-3">
                                            <label class="block uppercase text-xs font-bold mb-2" for=" ">
                                                Teléfono
                                            </label>
                                            <input type="text" name="telefonocliente"
                                                class="border-0 px-3 py-3 placeholder-blueGray-300  bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                placeholder="Teléfono">
                                        </div>
                                    </div>
                                    <div class="w-full lg:w-4/12 px-4">
                                        <div class="relative w-full mb-3">
                                            <label class="block uppercase text-xs font-bold mb-2" for=" ">
                                                Email
                                            </label>
                                            <input type="email" name="emailcliente"
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
                                    <div class="w-full lg:w-4/12 px-4">
                                        <div class="relative w-full mb-3">
                                            <label class="block uppercase text-xs font-bold mb-2" for=" ">
                                                Clasificación
                                            </label>
                                            <div class="flex gap-2 items-center">
                                                <select name="clasificaionCliente" id="clasificaionCliente"
                                                    class="border-0 px-3 py-3 placeholder-blueGray-300 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                    placeholder="Seleccione una clasificación">
                                                    @foreach ($clasificaionCliente as $clasificacion)
                                                        <option value="{{ $clasificacion->IdTipoPersona }}">
                                                            {{ $clasificacion->Descripcion }}
                                                        </option>
                                                    @endforeach
                                                </select>

                                                {{-- Aqui me quede y, falta --}}

                                                <div class="flex-end flex flex-col space-y-0.3 justify-end">
                                                    <button
                                                        onclick="document.getElementById('authentication-modal').showModal()"
                                                        type="button"
                                                        class="group inline-flex items-center px-3 py-2 text-sm leading-4 font-medium rounded-md text-black bg-white hover:text-white focus:outline-none focus:text-white transition ease-in-out duration-150">
                                                        <div class="group-hover:hidden">
                                                            @include('icons/adiccion')
                                                        </div>
                                                        <div class="hidden group-hover:block">
                                                            @include('icons/adiccionazul')
                                                        </div>
                                                    </button>
                                                    @include('modals.agregar-clasificacion-tipopersona')
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    {{-- categoría --}}
                                    <div class="w-full lg:w-4/12 px-4">
                                        <div class="relative w-full mb-3">
                                            <label class="block uppercase text-xs font-bold mb-2" for=" ">
                                                Categoría
                                            </label>
                                            <div class="flex gap-2 items-center">
                                                <select name="categoriaCliente" id="categoriaCliente"
                                                    class="border-0 px-3 py-3 placeholder-blueGray-300 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                    placeholder="Seleccione una categoría">
                                                    @foreach ($categoriaCliente as $categoria)
                                                        <option value="{{ $categoria->IdCategoriaLicencia }}">
                                                            {{ $categoria->Descripcion }}
                                                        </option>
                                                    @endforeach
                                                </select>

                                                {{-- Aqui me quede y, falta --}}

                                                <div class="flex-end flex flex-col space-y-0.3 justify-end">
                                                    <button
                                                        onclick="document.getElementById('authentication-modal').showModal()"
                                                        type="button"
                                                        class="group inline-flex items-center px-3 py-2 text-sm leading-4 font-medium rounded-md text-black bg-white hover:text-white focus:outline-none focus:text-white transition ease-in-out duration-150">
                                                        <div class="group-hover:hidden">
                                                            @include('icons/adiccion')
                                                        </div>
                                                        <div class="hidden group-hover:block">
                                                            @include('icons/adiccionazul')
                                                        </div>
                                                    </button>
                                                    @include('modals.agregar-clasificacion-categorialicencia')
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-full lg:w-4/12 px-4">
                                        <div class="relative w-full mb-3">
                                            <label class="block uppercase text-xs font-bold mb-2" for=" ">
                                                Condición de la factura
                                            </label>
                                            <select name="condicionFactura" id="condicionFactura"
                                                class="border-0 px-3 py-3 placeholder-blueGray-300 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                placeholder="Seleccione una condición">
                                                @foreach ($condicionFactura as $condicion)
                                                    <option value="{{ $condicion->IdCondicionFactura }}">
                                                        {{ $condicion->Descripcion }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-2"></div>
                                <x-button class="px-4 py-2 mb-3">
                                    {{ __('Registrar cliente') }}
                                </x-button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    @include ('footer')
</x-app-layout>
