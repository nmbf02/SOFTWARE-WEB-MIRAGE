<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Cotización de facturación') }}
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
                                    <h1 class="text-xl font-semibold mb-4 text-gray-900 dark:text-gray-100">Cotización de facturación
                                    </h1>
                                </div>
                            </div>
                            <hr style="border-color: #FF914D" class="p-2">
                            {{-- <p class="text-gray-600 dark:text-gray-300 mb-6">Use a permanent address where you can
                                receive mail.</p> --}}
                            <form>
                                <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                    <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Datos del cliente</h6>
                                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Código</label>
                                            <input type="text" placeholder="VIN" class="border p-2 rounded w-full">
                                        </div>
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Nombre</label>
                                            <input type="text" placeholder="Nombre"
                                                class="border p-2 rounded w-full">
                                        </div>
                                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
                                            <div>
                                                <label for="color"
                                                    class="block text-sm font-medium text-gray-700">Número
                                                    de identidad</label>
                                                <input type="number" placeholder="Documento"
                                                    class="border p-2 rounded w-full">
                                            </div>
                                            <div>
                                                <label for="color"
                                                    class="block text-sm font-medium text-gray-700">Licencia</label>
                                                <input type="number" placeholder="Licencia"
                                                    class="border p-2 rounded w-full">
                                            </div>
                                            <div>
                                                <label for="color"
                                                    class="block text-sm font-medium text-gray-700">Condición de
                                                    factura</label>
                                                <input type="text" placeholder="Condición de fact."
                                                    class="border p-2 rounded w-full">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Telefono</label>
                                            <input type="text" placeholder="Teléfono"
                                                class="border p-2 rounded w-full">
                                        </div>
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Email</label>
                                            <input type="text" placeholder="Email" class="border p-2 rounded w-full">
                                        </div>
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Dirección</label>
                                            <input type="text" placeholder="Dirección"
                                                class="border p-2 rounded w-full">
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
                                            <input type="text" placeholder="Nombre del vehículo" class="border p-2 rounded w-full">
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
                                                    class="block text-sm font-medium text-gray-700">Descuento</label>
                                                <input type="number" placeholder="Desc."
                                                    class="border p-2 rounded w-full">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Precio</label>
                                            <input type="number" placeholder="Precio"
                                                class="border p-2 rounded w-full">
                                        </div>
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Subtotal</label>
                                            <input type="text" placeholder="Subtotal"
                                                class="border p-2 rounded w-full">
                                        </div>
                                        <div>
                                            <label for="transmision"
                                                class="block text-sm font-medium text-gray-700">Total</label>
                                            <input type="number" placeholder="TOTAL"
                                                class="border p-2 rounded text-red-700 border-red-700 font-extrabold w-full">
                                        </div>
                                    </div>
                                </div>
                                <div class="p-2"></div>
                                <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow">
                                    <h6 class="text-sm mt-3 mb-6 font-bold uppercase">Total</h6>
                                    <div class="grid grid-cols-1 md:grid-cols-1 gap-4 mb-4">
                                        <div>
                                            <label for="color"
                                                class="block text-sm font-medium text-gray-700">Monto a pagar</label>
                                                <input type="number" placeholder="MONTO A PAGAR"
                                                class="border p-2 rounded text-red-700 border-red-700 font-extrabold w-full">
                                        </div>
                                    </div>
                                </div>
                                <div class="p-2"></div>
                                <x-button class="px-4 py-2">
                                    {{ __('Registrar cotización') }}
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
