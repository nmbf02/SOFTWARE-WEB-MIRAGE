let currentPage = 1;
const rowsPerPage = 10; // Por ejemplo, ajusta según necesites

function nextPage() {
    currentPage++;
    loadTablePage(currentPage);
}

function previousPage() {
    currentPage = Math.max(currentPage - 1, 1); // Asegura que la página no sea menor que 1
    loadTablePage(currentPage);
}

function loadTablePage(page) {
    // Lógica para cargar los datos de la página especificada en la tabla
    // Esto podría involucrar la eliminación de las filas actuales de la tabla y la adición de las nuevas
}
