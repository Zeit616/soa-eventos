function añadirEvento() {
    //Registrar en tabla medios
    var datos = new FormData();
    var nombreEvento = $("#AñadirNombreEvento").val();
    var fechaInicio = $("#AñadirFechaInicio").val();
    var horaInicio = $("#AñadirHoraInicio").val();
    var fechaFin = $("#AñadirFechaFin").val();
    var horaFin = $("#AñadirHoraFin").val();
    var lugarEvento = $("#AñadirLugarEvento").val();
    datos.append("nombreEvento", nombreEvento);
    datos.append("fechaInicio", fechaInicio);
    datos.append("horaInicio", horaInicio);
    datos.append("fechaFin", fechaFin);
    datos.append("horaFin", horaFin);
    datos.append("lugarEvento", lugarEvento);
    
    $.ajax({
        url: "../../model/registrarBaseDeDatos/añadirEvento.php",
        method: "POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        //dataType: "json",
        success: function(respuesta) {  
            if (respuesta == "1") {
                // Limpiar inputs del formulario
                limpiarInputsAñadirEvento();
                // Cerrar modal  
                $('#modalAñadirEvento').modal('hide'); 
                // Recargar dataTable
                var recarga = $("#tablaEventos").DataTable();
                recarga.ajax.reload();
                // Toast de registro exitoso    
                console.log("registro exitoso");
                aceptado("Registro exitoso");
            } else {
                // Limpiar inputs del formulario
                limpiarInputsAñadirEvento();
                // Cerrar modal
                $('#modalAñadirEvento').modal('hide');
                // Toast de registro fallido
                console.log("error");
                rechazado(respuesta);
            }
        },
    });
};
