function editarEvento() {
    var datos = new FormData();
    var idEvento = $("#EditarIdEvento").val();
    var nombreEvento = $("#EditarNombreEvento").val();
    var fechaInicio = $("#EditarFechaInicio").val();
    var horaInicio = $("#EditarHoraInicio").val();
    var fechaFin = $("#EditarFechaFin").val();
    var horaFin = $("#EditarHoraFin").val();
    var lugarEvento = $("#EditarLugarEvento").val();
   
    datos.append("idEvento", idEvento);
    datos.append("nombreEvento", nombreEvento);
    datos.append("fechaInicio", fechaInicio);
    datos.append("horaInicio", horaInicio);
    datos.append("fechaFin", fechaFin);
    datos.append("horaFin", horaFin);
    datos.append("lugarEvento", lugarEvento);
    
    $.ajax({
        url: "../../model/editarBaseDeDatos/editarEvento.php",
        method: "POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        //dataType: "json",
        success: function(respuesta) {  
            if (respuesta == "1") {
                // Limpiar inputs del formulario
                limpiarInputsEditarEvento();
                // Cerrar modal  
                $('#modalEditarEvento').modal('hide'); 
                // Recargar dataTable
                var recarga = $("#tablaEventos").DataTable();
                recarga.ajax.reload();
                // Toast de registro exitoso    
                console.log("edicion exitoso");
                aceptado("Usuario Editado");
            } else {
                // Limpiar inputs del formulario
                limpiarInputsEditarEvento();
                // Cerrar modal
                $('#modalEditarEvento').modal('hide');
                // Toast de registro fallido
                console.log("error");
                rechazado(respuesta);
            }
        },
    });
}
