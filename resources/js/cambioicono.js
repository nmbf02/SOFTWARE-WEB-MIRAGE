// Cambiar favicon según el esquema de color preferido
function changeFavicon() {
    const favicon = document.getElementById('favicon');
    if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
        // Tema oscuro
        favicon.href ="{{ asset('ico/LogoMirageBlanco.ico') }}";
    } else {
        // Tema claro
        favicon.href ="{{ asset('ico/LogoMirageNegro.ico') }}";
    }
}

// Ejecutar al cargar y en caso de cambio en la preferencia de esquema de color
changeFavicon();
window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', changeFavicon);
