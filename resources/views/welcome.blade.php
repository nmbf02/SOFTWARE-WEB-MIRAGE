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
    <link rel="icon" href="{{ asset('img/ico/logomirageblanco.ico') }}" type="image/x-icon" id="favicon">
    <script>
        // Cambiar favicon según el esquema de color preferido
        function changeFavicon() {
            const favicon = document.getElementById('favicon');
            if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
                // Tema oscuro
                favicon.href = "@{{ asset('img/ico/logomirageblanco.ico') }}";
            } else {
                // Tema claro
                favicon.href = "@{{ asset('img/ico/logomiragenegro.ico) }}";
            }
        }

        // Ejecutar al cargar y en caso de cambio en la preferencia de esquema de color
        changeFavicon();
        window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', changeFavicon);
    </script>
</head>

<body>
    @include ('dashboard')
    @include ('footer')
</body>

</html>
