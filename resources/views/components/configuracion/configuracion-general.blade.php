<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Configuración generales') }}
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
                                    <h1 class="text-xl font-semibold mb-4 text-gray-900 dark:text-gray-100">
                                        Configuración generales
                                    </h1>
                                </div>
                            </div>
                            <hr style="border-color: #FF914D" class="p-2">
                            {{-- <p class="text-gray-600 dark:text-gray-300 mb-6">Use a permanent address where you can
                                receive mail.</p> --}}
                            <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-4">
                                {{-- Sucursal --}}
                                <form method="POST" action="{{ route('sucursal.store') }}">
                                    @csrf
                                    <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                        <div class="inline-flex justify-between items-center w-full">
                                            <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Sucursal</h6>
                                            <button type="button"
                                                class="toggle-button inline-flex items-center px-3 py-2 transition ease-in-out duration-150"
                                                data-target="toggleContent1">
                                                <div class="icon">
                                                    @include('icons/show') <!-- Icono visible por defecto -->
                                                </div>
                                                <div class="icon hidden">
                                                    @include('icons/hidden') <!-- Icono oculto inicialmente -->
                                                </div>
                                            </button>
                                        </div>
                                        <!-- Sección a mostrar/ocultar -->
                                        <div id="toggleContent1" class="hidden">
                                            <div class="grid grid-cols-1 md:grid-cols-1 gap-4 mb-4">
                                                {{-- <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4 justify-between">
                                                <div>
                                                    <label for="color"
                                                        class="block text-sm font-medium text-gray-700">Código
                                                        de la sucursal</label>
                                                    <input type="text" placeholder="Código de la sucursal"
                                                        class="border p-2 rounded w-full">
                                                </div>
                                            </div> --}}
                                                <div>
                                                    <label for="color"
                                                        class="block text-sm font-medium text-gray-700">Nombre</label>
                                                    <input name="nombresucursal" type="text" placeholder="Nombre"
                                                        class="border p-2 rounded w-full">
                                                </div>
                                                <div>
                                                    <label for="empresasucursal"
                                                        class="block text-sm font-medium text-gray-700">Empresa</label>
                                                    <select name="empresasucursal" id="empresasucursal"
                                                        class="border-0 px-3 py-3 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                        placeholder="Seleccione una empresa">
                                                        @foreach ($empresasucursal as $empresa)
                                                            <option value="{{ $empresa->IdEmpresa }}">
                                                                {{ $empresa->Nombre }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4 justify-between">
                                                    <div>
                                                        <label for="color"
                                                            class="block text-sm font-medium text-gray-700">Calle</label>
                                                        <input name="callesucursal" type="text" placeholder="Calle"
                                                            class="border p-2 rounded w-full">
                                                    </div>
                                                    <div>
                                                        <label for="color"
                                                            class="block text-sm font-medium text-gray-700">Edificio</label>
                                                        <input name="edificiosucursal" type="text"
                                                            placeholder="Edificio" class="border p-2 rounded w-full">
                                                    </div>
                                                </div>
                                                <div>
                                                    <label for="sectorsucursal"
                                                        class="block text-sm font-medium text-gray-700">Sector</label>
                                                    <select name="sectorsucursal" id="sectorsucursal"
                                                        class="border-0 px-3 py-3 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                        placeholder="Seleccione un sector">
                                                        @foreach ($sectorsucursal as $sector)
                                                            <option value="{{ $sector->IdSector }}">
                                                                {{ $sector->Descripcion }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div>
                                                    <label for="color"
                                                        class="block text-sm font-medium text-gray-700">Telefono</label>
                                                    <input name="telefonosucursal" type="text" placeholder="Telefono"
                                                        class="border p-2 rounded w-full">
                                                </div>
                                                <div>
                                                    <label for="color"
                                                        class="block text-sm font-medium text-gray-700">Email</label>
                                                    <input name="emailsucursal" type="mail"
                                                        placeholder="Correo electrónico"
                                                        class="border p-2 rounded w-full">
                                                </div>
                                                <div>
                                                    <input name="status" type="checkbox" id="Estado_modelo"
                                                        class="rounded">
                                                    <label for="Estado_modelo"
                                                        class="text-sm font-medium text-gray-700">Estado</label>
                                                </div>
                                                <x-button class="px-4 py-2">
                                                    {{ __('Salvar sucursal') }}
                                                </x-button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                {{-- Empresa --}}
                                <form method="POST" action="{{ route('empresa.store') }}">
                                    @csrf
                                    <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                        <div class="inline-flex justify-between items-center w-full">
                                            <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Empresa</h6>
                                            <button type="button"
                                                class="toggle-button inline-flex items-center px-3 py-2 transition ease-in-out duration-150"
                                                data-target="toggleContent2">
                                                <div class="icon">
                                                    @include('icons/show') <!-- Icono visible por defecto -->
                                                </div>
                                                <div class="icon hidden">
                                                    @include('icons/hidden') <!-- Icono oculto inicialmente -->
                                                </div>
                                            </button>
                                        </div>
                                        <!-- Sección a mostrar/ocultar -->
                                        <div id="toggleContent2" class="hidden">
                                            <div class="grid grid-cols-1 md:grid-cols-1 gap-4 mb-4">
                                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4 justify-between">
                                                    {{-- <div>
                                                    <label for="color"
                                                        class="block text-sm font-medium text-gray-700">Código
                                                        de la empresa</label>
                                                    <input type="text" placeholder="Código de la empresa"
                                                        class="border p-2 rounded w-full">
                                                </div> --}}
                                                    <div>
                                                        <label for="color"
                                                            class="block text-sm font-medium text-gray-700">RUC</label>
                                                        <input name="RUC" type="text"
                                                            placeholder="Registro Único de Contribuyente"
                                                            class="border p-2 rounded w-full">
                                                    </div>
                                                </div>
                                                <div>
                                                    <label for="color"
                                                        class="block text-sm font-medium text-gray-700">Nombre</label>
                                                    <input name="nombreempresa" type="text" placeholder="Nombre"
                                                        class="border p-2 rounded w-full">
                                                </div>
                                                <div>
                                                    <label for="color"
                                                        class="block text-sm font-medium text-gray-700">Abreviatura del
                                                        nombre</label>
                                                    <input name="abreviaturaempresa" type="text"
                                                        placeholder="Abreviatura" class="border p-2 rounded w-full">
                                                </div>
                                                <div
                                                    class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4 justify-between">
                                                    <div>
                                                        <label for="color"
                                                            class="block text-sm font-medium text-gray-700">Calle</label>
                                                        <input name="calleempresa" type="text" placeholder="Calle"
                                                            class="border p-2 rounded w-full">
                                                    </div>
                                                    <div>
                                                        <label for="color"
                                                            class="block text-sm font-medium text-gray-700">Edificio</label>
                                                        <input name="edificioempresa" type="text"
                                                            placeholder="Edificio" class="border p-2 rounded w-full">
                                                    </div>
                                                </div>
                                                <div>
                                                    <label for="sectorempresa"
                                                        class="block text-sm font-medium text-gray-700">Sector</label>
                                                    <select name="sectorempresa" id="sectorempresa"
                                                        class="border-0 px-3 py-3 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                        placeholder="Seleccione un sector">
                                                        @foreach ($sectorempresa as $sector)
                                                            <option value="{{ $sector->IdSector }}">
                                                                {{ $sector->Descripcion }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div>
                                                    <label for="color"
                                                        class="block text-sm font-medium text-gray-700">Telefono</label>
                                                    <input name="telefonoempresa" type="text"
                                                        placeholder="Telefono" class="border p-2 rounded w-full">
                                                </div>
                                                <div>
                                                    <label for="color"
                                                        class="block text-sm font-medium text-gray-700">Email</label>
                                                    <input name="emailempresa" type="mail"
                                                        placeholder="Correo electrónico"
                                                        class="border p-2 rounded w-full">
                                                </div>
                                                <div>
                                                    <input name="status" type="checkbox" id="Estado_modelo"
                                                        class="rounded">
                                                    <label for="Estado_modelo"
                                                        class="text-sm font-medium text-gray-700">Estado</label>
                                                </div>
                                                <x-button class="px-4 py-2">
                                                    {{ __('Salvar empresa') }}
                                                </x-button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                {{-- Aseguradora --}}
                                <form method="POST" action="{{ route('aseguradora.store') }}">
                                    @csrf
                                    <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                        <div class="inline-flex justify-between items-center w-full">
                                            <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Aseguradora de vehículos
                                            </h6>
                                            <button type="button"
                                                class="toggle-button inline-flex items-center px-3 py-2 transition ease-in-out duration-150"
                                                data-target="toggleContent3">
                                                <div class="icon">
                                                    @include('icons/show') <!-- Icono visible por defecto -->
                                                </div>
                                                <div class="icon hidden">
                                                    @include('icons/hidden') <!-- Icono oculto inicialmente -->
                                                </div>
                                            </button>
                                        </div>
                                        <!-- Sección a mostrar/ocultar -->
                                        <div id="toggleContent3" class="hidden">
                                            <div class="grid grid-cols-1 md:grid-cols-1 gap-4 mb-4">
                                                {{-- <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4 justify-between">
                                                <div>
                                                    <label for="color"
                                                        class="block text-sm font-medium text-gray-700">Código
                                                        de la aseguradora</label>
                                                    <input type="text" placeholder="Código de la aseguradora"
                                                        class="border p-2 rounded w-full">
                                                </div>
                                            </div> --}}
                                                <div>
                                                    <label for="color"
                                                        class="block text-sm font-medium text-gray-700">Nombre</label>
                                                    <input name="nombreaseguradora" type="text"
                                                        placeholder="Nombre" class="border p-2 rounded w-full">
                                                </div>
                                                <div
                                                    class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4 justify-between">
                                                    <div>
                                                        <label for="color"
                                                            class="block text-sm font-medium text-gray-700">Calle</label>
                                                        <input name="calleaseguradora" type="text"
                                                            placeholder="Calle" class="border p-2 rounded w-full">
                                                    </div>
                                                    <div>
                                                        <label for="color"
                                                            class="block text-sm font-medium text-gray-700">Edificio</label>
                                                        <input name="edificioaseguradora" type="text"
                                                            placeholder="Edificio" class="border p-2 rounded w-full">
                                                    </div>
                                                </div>
                                                <div>
                                                    <label for="sectoraseguradora"
                                                        class="block text-sm font-medium text-gray-700">Sector</label>
                                                    <select name="sectoraseguradora" id="sectoraseguradora"
                                                        class="border-0 px-3 py-3 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                        placeholder="Seleccione un sector">
                                                        @foreach ($sectoraseguradora as $sector)
                                                            <option value="{{ $sector->IdSector }}">
                                                                {{ $sector->Descripcion }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div>
                                                    <label for="color"
                                                        class="block text-sm font-medium text-gray-700">Telefono</label>
                                                    <input name="telefonoaseguradora" type="text"
                                                        placeholder="Telefono" class="border p-2 rounded w-full">
                                                </div>
                                                <div>
                                                    <label for="color"
                                                        class="block text-sm font-medium text-gray-700">Email</label>
                                                    <input name="emailaseguradora" type="mail"
                                                        placeholder="Correo electrónico"
                                                        class="border p-2 rounded w-full">
                                                </div>
                                                <div>
                                                    <input name="status" type="checkbox" id="Estado_modelo"
                                                        name="Estado_modelo" class="rounded">
                                                    <label for="Estado_modelo"
                                                        class="text-sm font-medium text-gray-700">Estado</label>
                                                </div>
                                                <x-button class="px-4 py-2">
                                                    {{ __('Salvar aseguradora') }}
                                                </x-button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                {{-- Seguro --}}
                                <form method="POST" action="{{ route('seguroconfiguracion.store') }}">
                                    @csrf
                                    <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                        <div class="inline-flex justify-between items-center w-full">
                                            <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Seguro</h6>
                                            <button type="button"
                                                class="toggle-button inline-flex items-center px-3 py-2 transition ease-in-out duration-150"
                                                data-target="toggleContent4">
                                                <div class="icon">
                                                    @include('icons/show') <!-- Icono visible por defecto -->
                                                </div>
                                                <div class="icon hidden">
                                                    @include('icons/hidden') <!-- Icono oculto inicialmente -->
                                                </div>
                                            </button>
                                        </div>
                                        <!-- Sección a mostrar/ocultar -->
                                        <div id="toggleContent4" class="hidden">
                                            <div class="grid grid-cols-1 md:grid-cols-1 gap-4 mb-4">
                                                {{-- <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4 justify-between">
                                                <div>
                                                    <label for="color"
                                                        class="block text-sm font-medium text-gray-700">Código
                                                        de la aseguradora</label>
                                                    <input type="text" placeholder="Código de la aseguradora"
                                                        class="border p-2 rounded w-full">
                                                </div>
                                            </div> --}}
                                                <div>
                                                    <label for="tiposeguro"
                                                        class="block text-sm font-medium text-gray-700">Tipo de
                                                        Seguro</label>
                                                    <select name="tiposeguro" id="tiposeguro"
                                                        class="border-0 px-3 py-3 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                        placeholder="Seleccione un seguro">
                                                        @foreach ($tiposeguro as $seguro)
                                                            <option value="{{ $seguro->IdTipoSeguro }}">
                                                                {{ $seguro->Descripcion }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div>
                                                    <label for="companiaseguro"
                                                        class="block text-sm font-medium text-gray-700">Compañía del
                                                        seguro</label>
                                                    <select name="companiaseguro" id="companiaseguro"
                                                        class="border-0 px-3 py-3 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                        placeholder="Seleccione una compañía">
                                                        @foreach ($companiaseguro as $compania)
                                                            <option value="{{ $compania->IdCompaniaSeguro }}">
                                                                {{ $compania->Nombre }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div>
                                                    <label for="color"
                                                        class="block text-sm font-medium text-gray-700">Número de
                                                        poliza</label>
                                                    <input name="numeropoliza" type="text"
                                                        placeholder="Número de poliza"
                                                        class="border p-2 rounded w-full">
                                                </div>
                                                <div>
                                                    <label for="estadopoliza"
                                                        class="block text-sm font-medium text-gray-700">Estado de
                                                        poliza</label>
                                                    <select name="estadopoliza" id="estadopoliza"
                                                        class="border-0 px-3 py-3 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                        placeholder="Seleccione un estado">
                                                        @foreach ($estadopoliza as $poliza)
                                                            <option value="{{ $poliza->IdEstadoPoliza }}">
                                                                {{ $poliza->Descripcion }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div
                                                    class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4 justify-between">
                                                    <div>
                                                        <label for="color"
                                                            class="block text-sm font-medium text-gray-700">Fecha
                                                            inicio</label>
                                                        <input name="fechainicio" type="date"
                                                            placeholder="Fecha inicio"
                                                            class="border p-2 rounded w-full">
                                                    </div>
                                                    <div>
                                                        <label for="color"
                                                            class="block text-sm font-medium text-gray-700">Fecha
                                                            vencimiento</label>
                                                        <input name="fechavencimiento" type="date"
                                                            placeholder="Fecha vencimiento"
                                                            class="border p-2 rounded w-full">
                                                    </div>
                                                </div>
                                                <div>
                                                    <label for="coberturaseguro"
                                                        class="block text-sm font-medium text-gray-700">Cobertura</label>
                                                    <select name="coberturaseguro" id="coberturaseguro"
                                                        class="border-0 px-3 py-3 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                        placeholder="Seleccione una cobertura">
                                                        @foreach ($coberturaseguro as $cobertura)
                                                            <option value="{{ $cobertura->IdCoberturaSeguro }}">
                                                                {{ $cobertura->Descripcion }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div>
                                                    <label for="condicionseguro"
                                                        class="block text-sm font-medium text-gray-700">Condición del
                                                        seguro</label>
                                                    <select name="condicionseguro" id="condicionseguro"
                                                        class="border-0 px-3 py-3 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                        placeholder="Seleccione una condición">
                                                        @foreach ($condicionseguro as $condicion)
                                                            <option value="{{ $condicion->IdCondicionSeguro }}">
                                                                {{ $condicion->Descripcion }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div>
                                                    <label for="color"
                                                        class="block text-sm font-medium text-gray-700">Telefono</label>
                                                    <input name="telefono" type="text" placeholder="Telefono"
                                                        class="border p-2 rounded w-full">
                                                </div>
                                                <div>
                                                    <label for="color"
                                                        class="block text-sm font-medium text-gray-700">Email</label>
                                                    <input name="email" type="mail"
                                                        placeholder="Correo electrónico"
                                                        class="border p-2 rounded w-full">
                                                </div>
                                                <div>
                                                    <input name="status" type="checkbox" id="Estado_modelo"
                                                        class="rounded">
                                                    <label for="Estado_modelo"
                                                        class="text-sm font-medium text-gray-700">Estado</label>
                                                </div>
                                                <x-button class="px-4 py-2">
                                                    {{ __('Salvar seguro') }}
                                                </x-button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                {{-- Sector --}}
                                <form method="POST" action="{{ route('sector.store') }}">
                                    @csrf
                                    <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                        <div class="inline-flex justify-between items-center w-full">
                                            <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Sector</h6>
                                            <button type="button"
                                                class="toggle-button inline-flex items-center px-3 py-2 transition ease-in-out duration-150"
                                                data-target="toggleContent5">
                                                <div class="icon">
                                                    @include('icons/show') <!-- Icono visible por defecto -->
                                                </div>
                                                <div class="icon hidden">
                                                    @include('icons/hidden') <!-- Icono oculto inicialmente -->
                                                </div>
                                            </button>
                                        </div>
                                        <!-- Sección a mostrar/ocultar -->
                                        <div id="toggleContent5" class="hidden">
                                            <div class="grid grid-cols-1 md:grid-cols-1 gap-4 mb-4">
                                                {{-- <div>
                                                <label for="color"
                                                    class="block text-sm font-medium text-gray-700">Código
                                                    del sector</label>
                                                <input type="text" placeholder="Código del sector"
                                                    class="border p-2 rounded w-full">
                                            </div> --}}
                                                <div>
                                                    <label for="color"
                                                        class="block text-sm font-medium text-gray-700">Descripción</label>
                                                    <input name="descripcion" type="text"
                                                        placeholder="Descripción" class="border p-2 rounded w-full">
                                                </div>
                                                <div>
                                                    <label for="provinciasectorconfigracion"
                                                        class="block text-sm font-medium text-gray-700">Provincia</label>
                                                    <select name="provinciasectorconfigracion"
                                                        id="provinciasectorconfigracion"
                                                        class="border-0 px-3 py-3 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                        placeholder="Seleccione un provincia">
                                                        @foreach ($provinciasectorconfigracion as $provinciasector)
                                                            <option value="{{ $provinciasector->IdProvincia }}">
                                                                {{ $provinciasector->Descripcion }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div>
                                                    <input name="status" type="checkbox" id="Estado_modelo"
                                                        name="Estado_modelo" class="rounded">
                                                    <label for="Estado_modelo"
                                                        class="text-sm font-medium text-gray-700">Estado</label>
                                                </div>
                                                <x-button class="px-4 py-2">
                                                    {{ __('Salvar sector') }}
                                                </x-button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                {{-- Ciudad --}}
                                <form method="POST" action="{{ route('ciudad.store') }}">
                                    @csrf
                                    <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                        <div class="inline-flex justify-between items-center w-full">
                                            <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Ciudad</h6>
                                            <button type="button"
                                                class="toggle-button inline-flex items-center px-3 py-2 transition ease-in-out duration-150"
                                                data-target="toggleContent6">
                                                <div class="icon">
                                                    @include('icons/show') <!-- Icono visible por defecto -->
                                                </div>
                                                <div class="icon hidden">
                                                    @include('icons/hidden') <!-- Icono oculto inicialmente -->
                                                </div>
                                            </button>
                                        </div>
                                        <!-- Sección a mostrar/ocultar -->
                                        <div id="toggleContent6" class="hidden">
                                            <div class="grid grid-cols-1 md:grid-cols-1 gap-4 mb-4">
                                                {{-- <div>
                                                <label for="color"
                                                    class="block text-sm font-medium text-gray-700">Código
                                                    de la ciudad</label>
                                                <input type="text" placeholder="Código de la provincia"
                                                    class="border p-2 rounded w-full">
                                            </div> --}}
                                                <div>
                                                    <label for="color"
                                                        class="block text-sm font-medium text-gray-700">Descripción</label>
                                                    <input name="descripcion" type="text"
                                                        placeholder="Descripción" class="border p-2 rounded w-full">
                                                </div>
                                                <div>
                                                    <label for="provinciaciudadconfiguracion"
                                                        class="block text-sm font-medium text-gray-700">Provincia</label>
                                                    <select name="provinciaciudadconfiguracion"
                                                        id="provinciaciudadconfiguracion"
                                                        class="border-0 px-3 py-3 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                        placeholder="Seleccione un provincia">
                                                        @foreach ($provinciaciudadconfiguracion as $provinciaciudad)
                                                            <option value="{{ $provinciaciudad->IdProvincia }}">
                                                                {{ $provinciaciudad->Descripcion }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div>
                                                    <input name="status" type="checkbox" id="Estado_modelo"
                                                        class="rounded">
                                                    <label for="Estado_modelo"
                                                        class="text-sm font-medium text-gray-700">Estado</label>
                                                </div>
                                                <x-button class="px-4 py-2">
                                                    {{ __('Salvar ciudad') }}
                                                </x-button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                {{-- Provincia --}}
                                <form method="POST" action="{{ route('provincia.store') }}">
                                    @csrf
                                    <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                        <div class="inline-flex justify-between items-center w-full">
                                            <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Provincia</h6>
                                            <button type="button"
                                                class="toggle-button inline-flex items-center px-3 py-2 transition ease-in-out duration-150"
                                                data-target="toggleContent7">
                                                <div class="icon">
                                                    @include('icons/show') <!-- Icono visible por defecto -->
                                                </div>
                                                <div class="icon hidden">
                                                    @include('icons/hidden') <!-- Icono oculto inicialmente -->
                                                </div>
                                            </button>
                                        </div>
                                        <!-- Sección a mostrar/ocultar -->
                                        <div id="toggleContent7" class="hidden">
                                            <div class="grid grid-cols-1 md:grid-cols-1 gap-4 mb-4">
                                                {{-- <div>
                                                    <label for="color"
                                                        class="block text-sm font-medium text-gray-700">Código
                                                        de la provincia</label>
                                                    <input type="text" placeholder="Código de la provincia"
                                                        class="border p-2 rounded w-full">
                                                </div> --}}
                                                <div>
                                                    <label for="color"
                                                        class="block text-sm font-medium text-gray-700">Descripción</label>
                                                    <input name="descripcion" type="text"
                                                        placeholder="Descripción" class="border p-2 rounded w-full">
                                                </div>
                                                <div>
                                                    <label for="paisConfiguracion"
                                                        class="block text-sm font-medium text-gray-700">País</label>
                                                    <select name="paisConfiguracion" id="paisConfiguracion"
                                                        class="border-0 px-3 py-3 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                        placeholder="Seleccione un país">
                                                        @foreach ($paisConfiguracion as $pais)
                                                            <option value="{{ $pais->IdPais }}">
                                                                {{ $pais->Descripcion }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div>
                                                    <input name="status" type="checkbox" id="Estado_modelo"
                                                        name="Estado_modelo" class="rounded">
                                                    <label for="Estado_modelo"
                                                        class="text-sm font-medium text-gray-700">Estado</label>
                                                </div>
                                                <x-button class="px-4 py-2">
                                                    {{ __('Salvar provincia') }}
                                                </x-button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                {{-- pais --}}
                                <form method="POST" action="{{ route('pais.store') }}">
                                    @csrf
                                    <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                        <div class="inline-flex justify-between items-center w-full">
                                            <h6 class="text-sm mt-3 mb-6 font-bold uppercase">País</h6>
                                            <button type="button"
                                                class="toggle-button inline-flex items-center px-3 py-2 transition ease-in-out duration-150"
                                                data-target="toggleContent8">
                                                <div class="icon">
                                                    @include('icons/show') <!-- Icono visible por defecto -->
                                                </div>
                                                <div class="icon hidden">
                                                    @include('icons/hidden') <!-- Icono oculto inicialmente -->
                                                </div>
                                            </button>
                                        </div>
                                        <!-- Sección a mostrar/ocultar -->
                                        <div id="toggleContent8" class="hidden">
                                            <div class="grid grid-cols-1 md:grid-cols-1 gap-4 mb-4">
                                                {{-- <div>
                                                <label for="color"
                                                    class="block text-sm font-medium text-gray-700">Código
                                                    del país</label>
                                                <input type="text" placeholder="Código del grupo"
                                                    class="border p-2 rounded w-full">
                                            </div> --}}
                                                <div>
                                                    <label for="color"
                                                        class="block text-sm font-medium text-gray-700">Descripción</label>
                                                    <input name="descripcion" type="text"
                                                        placeholder="Descripción" class="border p-2 rounded w-full">
                                                </div>
                                                <div>
                                                    <input name="status" type="checkbox" class="rounded">
                                                    <label for="Estado_modelo"
                                                        class="text-sm font-medium text-gray-700">Estado</label>
                                                </div>
                                                <x-button class="px-4 py-2">
                                                    {{ __('Salvar país') }}
                                                </x-button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                {{-- Tipo de seguro --}}
                                <form method="POST" action="{{ route('Tiposeguro.store') }}">
                                    @csrf
                                    <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                        <div class="inline-flex justify-between items-center w-full">
                                            <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Tipos de seguros</h6>
                                            <button type="button"
                                                class="toggle-button inline-flex items-center px-3 py-2 transition ease-in-out duration-150"
                                                data-target="toggleContent9">
                                                <div class="icon">
                                                    @include('icons/show') <!-- Icono visible por defecto -->
                                                </div>
                                                <div class="icon hidden">
                                                    @include('icons/hidden') <!-- Icono oculto inicialmente -->
                                                </div>
                                            </button>
                                        </div>
                                        <!-- Sección a mostrar/ocultar -->
                                        <div id="toggleContent9" class="hidden">
                                            <div class="grid grid-cols-1 md:grid-cols-1 gap-4 mb-4">
                                                {{-- <div>
                                                    <label for="color"
                                                        class="block text-sm font-medium text-gray-700">Código
                                                        del seguro</label>
                                                    <input type="text" placeholder="Código del seguro"
                                                        class="border p-2 rounded w-full">
                                                </div> --}}
                                                <div>
                                                    <label for="color"
                                                        class="block text-sm font-medium text-gray-700">Descripción</label>
                                                    <input name="descripcion" type="text"
                                                        placeholder="Descripción" class="border p-2 rounded w-full">
                                                </div>
                                                <div>
                                                    <input name="status" type="checkbox" class="rounded">
                                                    <label for="Estado_modelo"
                                                        class="text-sm font-medium text-gray-700">Estado</label>
                                                </div>
                                                <x-button class="px-4 py-2">
                                                    {{ __('Salvar tipo de seguro') }}
                                                </x-button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                {{-- Compania de seguro --}}
                                <form method="POST" action="{{ route('companiaseguro.store') }}">
                                    @csrf
                                    <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                        <div class="inline-flex justify-between items-center w-full">
                                            <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Compañía del seguro</h6>
                                            <button type="button"
                                                class="toggle-button inline-flex items-center px-3 py-2 transition ease-in-out duration-150"
                                                data-target="toggleContent10">
                                                <div class="icon">
                                                    @include('icons/show') <!-- Icono visible por defecto -->
                                                </div>
                                                <div class="icon hidden">
                                                    @include('icons/hidden') <!-- Icono oculto inicialmente -->
                                                </div>
                                            </button>
                                        </div>
                                        <!-- Sección a mostrar/ocultar -->
                                        <div id="toggleContent10" class="hidden">
                                            <div class="grid grid-cols-1 md:grid-cols-1 gap-4 mb-4">
                                                {{-- <div>
                                                <label for="color"
                                                    class="block text-sm font-medium text-gray-700">Código
                                                    de la compañía</label>
                                                <input type="text" placeholder="Código de la compañía"
                                                    class="border p-2 rounded w-full">
                                            </div> --}}
                                                <div>
                                                    <label for="color"
                                                        class="block text-sm font-medium text-gray-700">Nombre</label>
                                                    <input name="nombre" type="text" placeholder="Nombre"
                                                        class="border p-2 rounded w-full">
                                                </div>
                                                <div>
                                                    <label for="sectorcompania"
                                                        class="block text-sm font-medium text-gray-700">Sector</label>
                                                    <select name="sectorcompania" id="sectorcompania"
                                                        class="border-0 px-3 py-3 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                        placeholder="Seleccione un sector">
                                                        @foreach ($sectorcompania as $sector)
                                                            <option value="{{ $sector->IdSector }}">
                                                                {{ $sector->Descripcion }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div>
                                                    <label for="color"
                                                        class="block text-sm font-medium text-gray-700">Teléfono</label>
                                                    <input name="telefono" type="text" placeholder="Teléfono"
                                                        class="border p-2 rounded w-full">
                                                </div>
                                                <div>
                                                    <label for="color"
                                                        class="block text-sm font-medium text-gray-700">Email</label>
                                                    <input name="email" type="text" placeholder="Email"
                                                        class="border p-2 rounded w-full">
                                                </div>
                                                <div>
                                                    <input name="status" type="checkbox" id="Estado_modelo"
                                                        class="rounded">
                                                    <label for="Estado_modelo"
                                                        class="text-sm font-medium text-gray-700">Estado</label>
                                                </div>
                                                <x-button class="px-4 py-2">
                                                    {{ __('Salvar compañía') }}
                                                </x-button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                {{-- Cobertura seguro --}}
                                <form method="POST" action="{{ route('Coberturaseguro.store') }}">
                                    @csrf
                                    <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                        <div class="inline-flex justify-between items-center w-full">
                                            <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Cobertura del seguro</h6>
                                            <button type="button"
                                                class="toggle-button inline-flex items-center px-3 py-2 transition ease-in-out duration-150"
                                                data-target="toggleContent11">
                                                <div class="icon">
                                                    @include('icons/show') <!-- Icono visible por defecto -->
                                                </div>
                                                <div class="icon hidden">
                                                    @include('icons/hidden') <!-- Icono oculto inicialmente -->
                                                </div>
                                            </button>
                                        </div>
                                        <!-- Sección a mostrar/ocultar -->
                                        <div id="toggleContent11" class="hidden">
                                            <div class="grid grid-cols-1 md:grid-cols-1 gap-4 mb-4">
                                                {{-- <div>
                                                <label for="color"
                                                    class="block text-sm font-medium text-gray-700">Código
                                                    de la cobertura</label>
                                                <input type="text" placeholder="Código de la compañía"
                                                    class="border p-2 rounded w-full">
                                            </div> --}}
                                                <div>
                                                    <label for="color"
                                                        class="block text-sm font-medium text-gray-700">Descripción</label>
                                                    <input name="descripcion" type="text"
                                                        placeholder="Descripción" class="border p-2 rounded w-full">
                                                </div>
                                                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
                                                    <div>
                                                        <label for="color"
                                                            class="block text-sm font-medium text-gray-700">Límite</label>
                                                        <input name="limite" type="number" placeholder="Límite"
                                                            class="border p-2 rounded w-full">
                                                    </div>
                                                    <div>
                                                        <label for="color"
                                                            class="block text-sm font-medium text-gray-700">Deducible</label>
                                                        <input name="deducible" type="number"
                                                            placeholder="Deducible" class="border p-2 rounded w-full">
                                                    </div>
                                                    <div>
                                                        <label for="color"
                                                            class="block text-sm font-medium text-gray-700">Premium</label>
                                                        <input name="premiun" type="number" placeholder="Premium"
                                                            class="border p-2 rounded w-full">
                                                    </div>
                                                </div>
                                                <div>
                                                    <label for="riesgoseguro"
                                                        class="block text-sm font-medium text-gray-700">TIpo de
                                                        riesgo</label>
                                                    <select name="riesgoseguro" id="riesgoseguro"
                                                        class="border-0 px-3 py-3 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                        placeholder="Seleccione un sector">
                                                        @foreach ($riesgoseguro as $riesgo)
                                                            <option value="{{ $riesgo->IdTipoRiesgo }}">
                                                                {{ $riesgo->Descripcion }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div>
                                                    <input name="status" type="checkbox" id="Estado_modelo"
                                                        class="rounded">
                                                    <label for="Estado_modelo"
                                                        class="text-sm font-medium text-gray-700">Estado</label>
                                                </div>
                                                <x-button class="px-4 py-2">
                                                    {{ __('Salvar cobertura') }}
                                                </x-button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                {{-- Tipo riesgo --}}
                                <form method="POST" action="{{ route('Tiporiesgo.store') }}">
                                    @csrf
                                    <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                        <div class="inline-flex justify-between items-center w-full">
                                            <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Tipos de riesgo</h6>
                                            <button type="button"
                                                class="toggle-button inline-flex items-center px-3 py-2 transition ease-in-out duration-150"
                                                data-target="toggleContent12">
                                                <div class="icon">
                                                    @include('icons/show') <!-- Icono visible por defecto -->
                                                </div>
                                                <div class="icon hidden">
                                                    @include('icons/hidden') <!-- Icono oculto inicialmente -->
                                                </div>
                                            </button>
                                        </div>
                                        <!-- Sección a mostrar/ocultar -->
                                        <div id="toggleContent12" class="hidden">
                                            <div class="grid grid-cols-1 md:grid-cols-1 gap-4 mb-4">
                                                {{-- <div>
                                                    <label for="color"
                                                        class="block text-sm font-medium text-gray-700">Código
                                                        del riesgo</label>
                                                    <input type="text" placeholder="Código del seguro"
                                                        class="border p-2 rounded w-full">
                                                </div> --}}
                                                <div>
                                                    <label for="color"
                                                        class="block text-sm font-medium text-gray-700">Descripción</label>
                                                    <input name="descripcion" type="text"
                                                        placeholder="Descripción" class="border p-2 rounded w-full">
                                                </div>
                                                <div>
                                                    <input name="status" type="checkbox" id="Estado_modelo"
                                                        name="Estado_modelo" class="rounded">
                                                    <label for="Estado_modelo"
                                                        class="text-sm font-medium text-gray-700">Estado</label>
                                                </div>
                                                <x-button class="px-4 py-2">
                                                    {{ __('Salvar tipo de riesgo') }}
                                                </x-button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                {{-- Estado poliza --}}
                                <form method="POST" action="{{ route('Estadopoliza.store') }}">
                                    @csrf
                                    <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                        <div class="inline-flex justify-between items-center w-full">
                                            <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Estado de la poliza</h6>
                                            <button type="button"
                                                class="toggle-button inline-flex items-center px-3 py-2 transition ease-in-out duration-150"
                                                data-target="toggleContent13">
                                                <div class="icon">
                                                    @include('icons/show') <!-- Icono visible por defecto -->
                                                </div>
                                                <div class="icon hidden">
                                                    @include('icons/hidden') <!-- Icono oculto inicialmente -->
                                                </div>
                                            </button>
                                        </div>
                                        <!-- Sección a mostrar/ocultar -->
                                        <div id="toggleContent13" class="hidden">
                                            <div class="grid grid-cols-1 md:grid-cols-1 gap-4 mb-4">
                                                {{-- <div>
                                                    <label for="color"
                                                        class="block text-sm font-medium text-gray-700">Código
                                                        de la poliza</label>
                                                    <input type="text" placeholder="Código del seguro"
                                                        class="border p-2 rounded w-full">
                                                </div> --}}
                                                <div>
                                                    <label for="color"
                                                        class="block text-sm font-medium text-gray-700">Descripción</label>
                                                    <input name="descripcion" type="text"
                                                        placeholder="Descripción" class="border p-2 rounded w-full">
                                                </div>
                                                <div>
                                                    <input name="status" type="checkbox" id="Estado_modelo"
                                                        name="Estado_modelo" class="rounded">
                                                    <label for="Estado_modelo"
                                                        class="text-sm font-medium text-gray-700">Estado</label>
                                                </div>
                                                <x-button class="px-4 py-2">
                                                    {{ __('Salvar estado') }}
                                                </x-button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                {{-- Condicion del seguro --}}
                                <form method="POST" action="{{ route('Condicionseguro.store') }}">
                                    @csrf
                                    <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                        <div class="inline-flex justify-between items-center w-full">
                                            <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Condición del seguro</h6>
                                            <button type="button"
                                                class="toggle-button inline-flex items-center px-3 py-2 transition ease-in-out duration-150"
                                                data-target="toggleContent14">
                                                <div class="icon">
                                                    @include('icons/show') <!-- Icono visible por defecto -->
                                                </div>
                                                <div class="icon hidden">
                                                    @include('icons/hidden') <!-- Icono oculto inicialmente -->
                                                </div>
                                            </button>
                                        </div>
                                        <!-- Sección a mostrar/ocultar -->
                                        <div id="toggleContent14" class="hidden">
                                            <div class="grid grid-cols-1 md:grid-cols-1 gap-4 mb-4">
                                                {{-- <div>
                                                    <label for="color"
                                                        class="block text-sm font-medium text-gray-700">Código
                                                        de la condición</label>
                                                    <input type="text" placeholder="Código de la condición"
                                                        class="border p-2 rounded w-full">
                                                </div> --}}
                                                <div>
                                                    <label for="color"
                                                        class="block text-sm font-medium text-gray-700">Descripción</label>
                                                    <input name="descripcion" type="text"
                                                        placeholder="Descripción" class="border p-2 rounded w-full">
                                                </div>
                                                <div>
                                                    <label for="color"
                                                        class="block text-sm font-medium text-gray-700">Fecha
                                                        efectiva</label>
                                                    <input name="fechaEfectiva" type="date"
                                                        placeholder="Fecha efectiva"
                                                        class="border p-2 rounded w-full">
                                                </div>
                                                <div>
                                                    <input type="checkbox" name="status" class="rounded">
                                                    <label for="Estado_modelo"
                                                        class="text-sm font-medium text-gray-700">Estado</label>
                                                </div>
                                                <x-button class="px-4 py-2">
                                                    {{ __('Salvar condición') }}
                                                </x-button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                {{-- Moneda --}}
                                <form method="POST" action="{{ route('Moneda.store') }}">
                                    @csrf
                                    <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                        <div class="inline-flex justify-between items-center w-full">
                                            <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Moneda</h6>
                                            <button type="button"
                                                class="toggle-button inline-flex items-center px-3 py-2 transition ease-in-out duration-150"
                                                data-target="toggleContent15">
                                                <div class="icon">
                                                    @include('icons/show') <!-- Icono visible por defecto -->
                                                </div>
                                                <div class="icon hidden">
                                                    @include('icons/hidden') <!-- Icono oculto inicialmente -->
                                                </div>
                                            </button>
                                        </div>
                                        <!-- Sección a mostrar/ocultar -->
                                        <div id="toggleContent15" class="hidden">
                                            <div class="grid grid-cols-1 md:grid-cols-1 gap-4 mb-4">
                                                {{-- <div>
                                                <label for="color"
                                                    class="block text-sm font-medium text-gray-700">Código
                                                    de la moneda</label>
                                                <input type="text" placeholder="Código de la condición"
                                                    class="border p-2 rounded w-full">
                                            </div> --}}
                                                <div>
                                                    <label for="color"
                                                        class="block text-sm font-medium text-gray-700">Descripción</label>
                                                    <input name="descripcion" type="text"
                                                        placeholder="Descripción" class="border p-2 rounded w-full">
                                                </div>
                                                <div>
                                                    <label for="tasa"
                                                        class="block text-sm font-medium text-gray-700">Tasa</label>
                                                    <input type="number" name="tasa" step="0.01"
                                                        placeholder="Tasa" class="border p-2 rounded w-full">
                                                </div>
                                                <div>
                                                    <input type="checkbox" name="status" class="rounded">
                                                    <label for="Estado_modelo"
                                                        class="text-sm font-medium text-gray-700">Estado</label>
                                                </div>
                                                <x-button class="px-4 py-2">
                                                    {{ __('Salvar moneda') }}
                                                </x-button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                {{-- Canal de comunicacion --}}
                                <form method="POST" action="{{ route('Canalcomunicacion.store') }}">
                                    @csrf
                                    <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                        <div class="inline-flex justify-between items-center w-full">
                                            <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Canal de comunicación
                                            </h6>
                                            <button type="button"
                                                class="toggle-button inline-flex items-center px-3 py-2 transition ease-in-out duration-150"
                                                data-target="toggleContent16">
                                                <div class="icon">
                                                    @include('icons/show') <!-- Icono visible por defecto -->
                                                </div>
                                                <div class="icon hidden">
                                                    @include('icons/hidden') <!-- Icono oculto inicialmente -->
                                                </div>
                                            </button>
                                        </div>
                                        <!-- Sección a mostrar/ocultar -->
                                        <div id="toggleContent16" class="hidden">
                                            <div class="grid grid-cols-1 md:grid-cols-1 gap-4 mb-4">
                                                {{-- <div>
                                                <label for="color"
                                                    class="block text-sm font-medium text-gray-700">Código
                                                    de la vía</label>
                                                <input type="text" placeholder="Código de la condición"
                                                    class="border p-2 rounded w-full">
                                            </div> --}}
                                                <div>
                                                    <label for="color"
                                                        class="block text-sm font-medium text-gray-700">Descripción</label>
                                                    <input name="descripcion" type="text"
                                                        placeholder="Descripción" class="border p-2 rounded w-full">
                                                </div>
                                                <div>
                                                    <input type="checkbox" name="status" class="rounded">
                                                    <label for="Estado_modelo"
                                                        class="text-sm font-medium text-gray-700">Estado</label>
                                                </div>
                                                <x-button class="px-4 py-2">
                                                    {{ __('Salvar vía') }}
                                                </x-button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                {{-- Condicion factura --}}
                                <form method="POST" action="{{ route('Condicionfactura.store') }}">
                                    @csrf
                                    <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                        <div class="inline-flex justify-between items-center w-full">
                                            <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Condición de la factura
                                            </h6>
                                            <button type="button"
                                                class="toggle-button inline-flex items-center px-3 py-2 transition ease-in-out duration-150"
                                                data-target="toggleContent17">
                                                <div class="icon">
                                                    @include('icons/show') <!-- Icono visible por defecto -->
                                                </div>
                                                <div class="icon hidden">
                                                    @include('icons/hidden') <!-- Icono oculto inicialmente -->
                                                </div>
                                            </button>
                                        </div>
                                        <!-- Sección a mostrar/ocultar -->
                                        <div id="toggleContent17" class="hidden">
                                            <div class="grid grid-cols-1 md:grid-cols-1 gap-4 mb-4">
                                                {{-- <div>
                                                <label for="color"
                                                    class="block text-sm font-medium text-gray-700">Código
                                                    de la condición</label>
                                                <input type="text" placeholder="Código de la condición"
                                                    class="border p-2 rounded w-full">
                                            </div> --}}
                                                <div>
                                                    <label for="color"
                                                        class="block text-sm font-medium text-gray-700">Descripción</label>
                                                    <input name="descripcion" type="text"
                                                        placeholder="Descripción" class="border p-2 rounded w-full">
                                                </div>
                                                <div>
                                                    <label for="color"
                                                        class="block text-sm font-medium text-gray-700">Cantidad de
                                                        días</label>
                                                    <input name="cantidaddias" type="number" placeholder="Días"
                                                        class="border p-2 rounded w-full">
                                                </div>
                                                <div>
                                                    <input name="status" type="checkbox" id="Estado_modelo"
                                                        name="Estado_modelo" class="rounded">
                                                    <label for="Estado_modelo"
                                                        class="text-sm font-medium text-gray-700">Estado</label>
                                                </div>
                                                <x-button class="px-4 py-2">
                                                    {{ __('Salvar condición') }}
                                                </x-button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                {{-- Metodo de pago --}}
                                <form method="POST" action="{{ route('Metodopago.store') }}">
                                    @csrf
                                    <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                        <div class="inline-flex justify-between items-center w-full">
                                            <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Método de pago</h6>
                                            <button type="button"
                                                class="toggle-button inline-flex items-center px-3 py-2 transition ease-in-out duration-150"
                                                data-target="toggleContent18">
                                                <div class="icon">
                                                    @include('icons/show') <!-- Icono visible por defecto -->
                                                </div>
                                                <div class="icon hidden">
                                                    @include('icons/hidden') <!-- Icono oculto inicialmente -->
                                                </div>
                                            </button>
                                        </div>
                                        <!-- Sección a mostrar/ocultar -->
                                        <div id="toggleContent18" class="hidden">
                                            <div class="grid grid-cols-1 md:grid-cols-1 gap-4 mb-4">
                                                {{-- <div>
                                                    <label for="color"
                                                        class="block text-sm font-medium text-gray-700">Código
                                                        del método</label>
                                                    <input type="text" placeholder="Código de la condición"
                                                        class="border p-2 rounded w-full">
                                                </div> --}}
                                                <div>
                                                    <label for="color"
                                                        class="block text-sm font-medium text-gray-700">Nombre</label>
                                                    <input name="nombre" type="text" placeholder="Nombre"
                                                        class="border p-2 rounded w-full">
                                                </div>
                                                <div>
                                                    <label for="color"
                                                        class="block text-sm font-medium text-gray-700">Descripción</label>
                                                    <input name="descripcion" type="text"
                                                        placeholder="Descripción" class="border p-2 rounded w-full">
                                                </div>
                                                <div>
                                                    <input name="status" type="checkbox" class="rounded">
                                                    <label for="Estado_modelo"
                                                        class="text-sm font-medium text-gray-700">Estado</label>
                                                </div>
                                                <x-button class="px-4 py-2">
                                                    {{ __('Salvar método') }}
                                                </x-button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                {{-- Garantia --}}
                                <form method="POST" action="{{ route('Garantia.store') }}">
                                    @csrf
                                    <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                        <div class="inline-flex justify-between items-center w-full">
                                            <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Garantía</h6>
                                            <button type="button"
                                                class="toggle-button inline-flex items-center px-3 py-2 transition ease-in-out duration-150"
                                                data-target="toggleContent19">
                                                <div class="icon">
                                                    @include('icons/show') <!-- Icono visible por defecto -->
                                                </div>
                                                <div class="icon hidden">
                                                    @include('icons/hidden') <!-- Icono oculto inicialmente -->
                                                </div>
                                            </button>
                                        </div>
                                        <!-- Sección a mostrar/ocultar -->
                                        <div id="toggleContent19" class="hidden">
                                            <div class="grid grid-cols-1 md:grid-cols-1 gap-4 mb-4">
                                                {{-- <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4 justify-between">
                                                <div>
                                                    <label for="color"
                                                        class="block text-sm font-medium text-gray-700">Código
                                                        de la garantía</label>
                                                    <input type="text" placeholder="Código de la garantía"
                                                        class="border p-2 rounded w-full">
                                                </div>
                                            </div> --}}
                                                <div>
                                                    <label for="color"
                                                        class="block text-sm font-medium text-gray-700">Nombre</label>
                                                    <input name="nombre" type="text" placeholder="Nombre"
                                                        class="border p-2 rounded w-full">
                                                </div>
                                                <div>
                                                    <label for="color"
                                                        class="block text-sm font-medium text-gray-700">Descripción</label>
                                                    <input name="descripcion" type="text"
                                                        placeholder="Descripción" class="border p-2 rounded w-full">
                                                </div>
                                                <div
                                                    class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4 justify-between">
                                                    <div>
                                                        <label for="color"
                                                            class="block text-sm font-medium text-gray-700">Fecha
                                                            inicio</label>
                                                        <input name="fechainicio" type="date"
                                                            placeholder="Fecha inicio"
                                                            class="border p-2 rounded w-full">
                                                    </div>
                                                    <div>
                                                        <label for="color"
                                                            class="block text-sm font-medium text-gray-700">Fecha
                                                            fin</label>
                                                        <input name="fechafin" type="date" placeholder="Fecha fin"
                                                            class="border p-2 rounded w-full">
                                                    </div>
                                                </div>
                                                <div
                                                    class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4 justify-between">
                                                    <div>
                                                        <label for="color"
                                                            class="block text-sm font-medium text-gray-700">Cobertura</label>
                                                        <input name="cobertura" type="number"
                                                            placeholder="Cobertura" class="border p-2 rounded w-full">
                                                    </div>
                                                    <div>
                                                        <label for="color"
                                                            class="block text-sm font-medium text-gray-700">Deducible</label>
                                                        <input name="deducible" type="number"
                                                            placeholder="Deducible" class="border p-2 rounded w-full">
                                                    </div>
                                                </div>
                                                <div>
                                                    <label for="color"
                                                        class="block text-sm font-medium text-gray-700">Prima
                                                        base</label>
                                                    <input name="primabase" type="number" placeholder="Prima base"
                                                        class="border p-2 rounded w-full">
                                                </div>
                                                <div
                                                    class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4 justify-between">
                                                    <div>
                                                        <label for="color"
                                                            class="block text-sm font-medium text-gray-700">Duración</label>
                                                        <input name="duracion" type="number" placeholder="Duración"
                                                            class="border p-2 rounded w-full">
                                                    </div>
                                                    <div>
                                                        <label for="garantialapsotiempo"
                                                            class="block text-sm font-medium text-gray-700">Lapso de
                                                            tiempo</label>
                                                        <select name="garantialapsotiempo" id="garantialapsotiempo"
                                                            class="border-0 px-3 py-3 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                            placeholder="Seleccione un lapso">
                                                            @foreach ($garantialapsotiempo as $lapso)
                                                                <option value="{{ $lapso->IdLapsoTiempo }}">
                                                                    {{ $lapso->Descripcion }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div>
                                                    <input name="status" type="checkbox" id="Estado_modelo"
                                                        class="rounded">
                                                    <label for="Estado_modelo"
                                                        class="text-sm font-medium text-gray-700">Estado</label>
                                                </div>
                                                <x-button class="px-4 py-2">
                                                    {{ __('Salvar garantía') }}
                                                </x-button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                {{-- Cuenta de banco --}}
                                <form method="POST" action="{{ route('Cuentabanco.store') }}">
                                    @csrf
                                    <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                        <div class="inline-flex justify-between items-center w-full">
                                            <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Cuenta bancaria</h6>
                                            <button type="button"
                                                class="toggle-button inline-flex items-center px-3 py-2 transition ease-in-out duration-150"
                                                data-target="toggleContent20">
                                                <div class="icon">
                                                    @include('icons/show') <!-- Icono visible por defecto -->
                                                </div>
                                                <div class="icon hidden">
                                                    @include('icons/hidden') <!-- Icono oculto inicialmente -->
                                                </div>
                                            </button>
                                        </div>
                                        <!-- Sección a mostrar/ocultar -->
                                        <div id="toggleContent20" class="hidden">
                                            <div class="grid grid-cols-1 md:grid-cols-1 gap-4 mb-4">
                                                {{-- <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4 justify-between">
                                                <div>
                                                    <label for="color"
                                                        class="block text-sm font-medium text-gray-700">Código</label>
                                                    <input type="text" placeholder="Código de la garantía"
                                                        class="border p-2 rounded w-full">
                                                </div>
                                            </div> --}}
                                                <div>
                                                    <label for="color"
                                                        class="block text-sm font-medium text-gray-700">Descripción</label>
                                                    <input name="descripcion" type="text"
                                                        placeholder="Descripción" class="border p-2 rounded w-full">
                                                </div>
                                                <div>
                                                    <label for="numerocuenta"
                                                        class="block text-sm font-medium text-gray-700">Número de
                                                        cuenta</label>
                                                    <input name="numerocuenta" type="text"
                                                        placeholder="Número de cuenta"
                                                        class="border p-2 rounded w-full">
                                                </div>
                                                <div>
                                                    <label for="bancocuenta"
                                                        class="block text-sm font-medium text-gray-700">Banco</label>
                                                    <select name="bancocuenta" id="bancocuenta"
                                                        class="border-0 px-3 py-3 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                        placeholder="Seleccione un banco">
                                                        @foreach ($bancocuenta as $banco)
                                                            <option value="{{ $banco->IdBanco }}">
                                                                {{ $banco->Descripcion }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div
                                                    class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4 justify-between">
                                                    <div>
                                                        <label for="color"
                                                            class="block text-sm font-medium text-gray-700">Tipo</label>
                                                        <input name="tipocuenta" type="text" placeholder="Tipo"
                                                            class="border p-2 rounded w-full">
                                                    </div>
                                                    <div>
                                                        <label for="monedacuenta"
                                                            class="block text-sm font-medium text-gray-700">Moneda</label>
                                                        <select name="monedacuenta" id="monedacuenta"
                                                            class="border-0 px-3 py-3 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                            placeholder="Seleccione una moneda">
                                                            @foreach ($monedacuenta as $banco)
                                                                <option value="{{ $banco->IdMoneda }}">
                                                                    {{ $banco->Descripcion }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div>
                                                    <label for="color"
                                                        class="block text-sm font-medium text-gray-700">Fecha de
                                                        apertura</label>
                                                    <input name="fechaapertura" type="date"
                                                        placeholder="Fecha de apertura"
                                                        class="border p-2 rounded w-full">
                                                </div>
                                                <div>
                                                    <input name="status" type="checkbox" id="Estado_modelo"
                                                        class="rounded">
                                                    <label for="Estado_modelo"
                                                        class="text-sm font-medium text-gray-700">Estado</label>
                                                </div>
                                                <x-button class="px-4 py-2">
                                                    {{ __('Salvar cuenta') }}
                                                </x-button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                {{-- Banco --}}
                                <form method="POST" action="{{ route('Banco.store') }}">
                                    @csrf
                                    <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                        <div class="inline-flex justify-between items-center w-full">
                                            <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Banco</h6>
                                            <button type="button"
                                                class="toggle-button inline-flex items-center px-3 py-2 transition ease-in-out duration-150"
                                                data-target="toggleContent21">
                                                <div class="icon">
                                                    @include('icons/show') <!-- Icono visible por defecto -->
                                                </div>
                                                <div class="icon hidden">
                                                    @include('icons/hidden') <!-- Icono oculto inicialmente -->
                                                </div>
                                            </button>
                                        </div>
                                        <!-- Sección a mostrar/ocultar -->
                                        <div id="toggleContent21" class="hidden">
                                            <div class="grid grid-cols-1 md:grid-cols-1 gap-4 mb-4">
                                                {{-- <div>
                                                <label for="color"
                                                    class="block text-sm font-medium text-gray-700">Código</label>
                                                <input type="text" placeholder="Código"
                                                    class="border p-2 rounded w-full">
                                            </div> --}}
                                                <div>
                                                    <label for="color"
                                                        class="block text-sm font-medium text-gray-700">Nombre</label>
                                                    <input name="descripcion" type="text" placeholder="Nombre"
                                                        class="border p-2 rounded w-full">
                                                </div>
                                                <div>
                                                    <label for="sectorConfiguracion"
                                                        class="block text-sm font-medium text-gray-700">Sector</label>
                                                    <select name="sectorConfiguracion" id="sectorConfiguracion"
                                                        class="border-0 px-3 py-3 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                        placeholder="Seleccione un sector">
                                                        @foreach ($sectorConfiguracion as $sector)
                                                            <option value="{{ $sector->IdSector }}">
                                                                {{ $sector->Descripcion }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div>
                                                    <label for="color"
                                                        class="block text-sm font-medium text-gray-700">Teléfono</label>
                                                    <input name="telefono" type="text" placeholder="Teléfono"
                                                        class="border p-2 rounded w-full">
                                                </div>
                                                <div>
                                                    <label for="color"
                                                        class="block text-sm font-medium text-gray-700">Email</label>
                                                    <input name="email" type="text" placeholder="Email"
                                                        class="border p-2 rounded w-full">
                                                </div>
                                                <div>
                                                    <input type="checkbox" id="Estado_modelo" name="Status"
                                                        class="rounded">
                                                    <label for="Estado_modelo"
                                                        class="text-sm font-medium text-gray-700">Estado</label>
                                                </div>
                                                <x-button class="px-4 py-2">
                                                    {{ __('Salvar banco') }}
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
    </div>
    @include ('footer')
    <script src="{{ asset('js/show-hidden.js') }}"></script>
</x-app-layout>
