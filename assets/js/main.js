$(document).ready(function(){
   $('#data').DataTable({
      scrollY: 250,
      searching: true,
      ordering:  true,
      responsive: true, 
      /* "language": {
                     "decimal":        "",
                     "emptyTable":     "No hay datos disponibles en la tabla",
                     "info":           "Resultados  del _START_ al _END_ de _TOTAL_ registros.",
                     "infoEmpty":      "Resultados 0 de 0 al 0 registros.",
                     "infoFiltered":   "",
                     "infoPostFix":    "",
                     "thousands":      ",",
                     "lengthMenu":     "Mostrar _MENU_ Registros",
                     "loadingRecords": "Cargando...",
                     "processing":     "Procesando...",
                     "search":         "Buscar",
                     "zeroRecords":    "No se encontraron resultados",
                     "paginate": {
                                    "first":      "Primero",
                                    "last":       "Último",
                                    "next":       "Siguiente",
                                    "previous":   "Atrás"
                                 },
                      "aria": {
                                 "sortAscending":   ": Activa para ordenar la columna ascendente",
                                 "sortDescending":  ": Activa para ordenar la columna descendente"
                              }
      } */
    });
 });

window.oncontextmenu = function() {
   return false;   
}