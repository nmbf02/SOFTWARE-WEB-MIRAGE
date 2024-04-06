<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mirage</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Favicon predeterminado para navegadores que no soportan la detección de esquema de color -->
    <link rel="icon" href="{{ asset('ico/LogoMirageNegro.ico') }}" type="image/x-icon" id="favicon">

</head>

<body>
    @include('aside')
    @include ('dashboard')
    @include ('footer')
    {{-- Cambiar icono segun el tema --}}
    <script src="{{ asset('resources/js/cambioicono.js') }}"></script>
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
</body>

</html>
