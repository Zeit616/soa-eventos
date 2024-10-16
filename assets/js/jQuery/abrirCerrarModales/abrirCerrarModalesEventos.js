$(document).ready(function(){
    //Abrir-Cerrar modal de añadir usuario
        $('#abrirModalAñadirEvento').click(function() {
            $('#modalAñadirEvento').modal('show');
        });
        $('#cerrarModalAñadirEvento').click(function() {
            $('#modalAñadirEvento').modal('hide');
        });
    //Abrir-Cerrar modal de editar usuario
        $("#tablaEventos").on("click", ".botonEditarEvento",function(){
            //Abrir modal Editar item
                $("#modalEditarEvento").modal("show");              
            //Llenar inputs al mostrar modal
                var tablaEventos = $("#tablaEventos").DataTable();
                if(tablaEventos.row(this).child.isShown()) {
                    var data = tablaEventos.row(this).data();                
                } else {                
                    var data = tablaEventos.row($(this).parents('tr')).data(); //OBTENER EL ARRAY CON LOS DATOS DE CADA COLUMNA DEL DATATABLE
                };   
                $("#EditarIdEvento").val(data[0]);
                $("#EditarNombreEvento").val(data[2]);
                $("#EditarFechaInicio").val(data[3]);
                $("#EditarHoraInicio").val(data[4]);
                $("#EditarFechaFin").val(data[5]);
                $("#EditarHoraFin").val(data[6]);
                $("#EditarLugarEvento").val(data[7]);
        });
        $('#cerrarModalEditarEvento').click(function() {
            $('#modalEditarEvento').modal('hide');
        });
});