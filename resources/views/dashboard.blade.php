<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    @include ('aside')
    <div class="lg:pl"> <!-- Ajuste aquí: padding-left solo en pantallas grandes -->
        <div class="flex flex-col lg:flex-row justify-between gap-2">
            <div class="flex-1"> <!-- Asegúrate de que el contenido se expanda para llenar el espacio disponible -->
                <x-welcome />
            </div>
        </div>
    </div>

    <script src="{{ asset('js/dropdown.js') }}"></script>
</x-app-layout>
{{-- <script src="//unpkg.com/alpinejs" defer></script> --}}
{{-- <span class="bg-gray-200 text-gray-800 ml-3 text-sm font-medium inline-flex items-center justify-center px-2 rounded-full">Pro</span> --}}
