$(document).ready(function(){
    tablaEventos = $("#tablaEventos").DataTable({
        "ajax": {
            url: "../../model/listarDataTables/listarEventos.php",
            dataSrc: "",
            type: "POST",
            data: {listar : 1},
        },
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "columnDefs": [
            {
                //Id
                targets: 0,
                orderable: false,
                visible: false    
            },
            {
                //codigo
                targets: 1,
                orderable: true,
                visible: true    
            },
            {
                //nombre evento
                targets: 2,
                orderable: false,
                visible: true    
            },
            {
                //fecha inicio
                targets: 3,
                orderable: false,
                visible: false    
            },
            {
                //hora iniio
                targets: 4,
                orderable: true,
                visible: true    
            },
            {
                //fecha fin
                targets: 5,
                orderable: true,
                visible: true    
            },
            {
                //hora fin
                targets: 6,
                orderable: true,
                visible: true    
            },
            {
                //lugar fin
                targets: 7,
                orderable: true,
                visible: true    
            },
            {
                //Opciones
                targets: 8,
                orderable: false,
                visible: true,
                render: function(data, type, full, meta){
                    return(
                        "<center>" +
                        "<span class = 'botonEditarEvento text-primary px-1' style = 'cursor : pointer;'>" +
                        "<i class='fa-solid fa-file-pen'></i>" +
                        "</span>" +
                        "<span class = 'botonEliminarEvento text-danger px-1' style = 'cursor : pointer;'>" +
                        "<i class='fa-solid fa-trash'></i>" +
                        "</span>" +
                        "</center>"
                    )
                }
            }
        ],
        "language": {url: "//cdn.datatables.net/plug-ins/1.13.4/i18n/es-ES.json"},
        "dom": "Bfrtilp",
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#tablaMedios_wrapper .col-md-6:eq(0)');
    
});