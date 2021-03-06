$(document).ready(function () {
    $('#table1').DataTable({
        "language": {
            "decimal": "",
            "emptyTable": "No se encontraron datos.",
            "info": "Mostrar _START_ de _END_ de _TOTAL_ entradas",
            "infoEmpty": "Mostrar 0 de 0 de 0 entradas",
            "infoFiltered": "(filtrar desde _MAX_ total entradas)",
            "infoPostFix": "",
            "thousands": ",",
            "lengthMenu": "Mostrar _MENU_ entradas",
            "loadingRecords": "Cargando...",
            "processing": "Procesando...",
            "search": "Buscar:",
            "zeroRecords": "No se encontraron coincidencias.",
            "paginate": {
                "first": "Primera",
                "last": "Última",
                "next": "Siguiente",
                "previous": "Anterior"
            },
            "aria": {
                "sortAscending": ": activar para ordenar la columna ascendentemente",
                "sortDescending": ": activar para ordenar la columna descendentemente"
            }
        }
    });
});