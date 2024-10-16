$(document).ready(function(){
        $("#tablaEventos").on("click", ".botonEliminarEvento",function(){
            var tablaEventos = $("#tablaEventos").DataTable();
            if(tablaEventos.row(this).child.isShown()) {
                var data = tablaEventos.row(this).data();                
            } else {                
                var data = tablaEventos.row($(this).parents('tr')).data(); //OBTENER EL ARRAY CON LOS DATOS DE CADA COLUMNA DEL DATATABLE
            }; 
            var datos = new FormData();
            var Id = data[0];
            datos.append("Id", Id);
            $.ajax({
                url: "../../model/eliminarBaseDeDatos/eliminarEvento.php",
                method: "POST",
                data: datos,
                cache: false,
                contentType: false,
                processData: false,
                //dataType: "json",
                success: function(respuesta) {  
                    if (respuesta == "1") {                        
                        //recargar dataTable
                            var recarga = $("#tablaEventos").DataTable();
                            recarga.ajax.reload();
                        //toast de registro exitoso    
                            console.log("registro exitoso");
                            aceptado("Usuario eliminado");
                    } else {                        
                        //toast de registro fallido
                            console.log("error");
                            rechazado(respuesta);
                    }
                },
            });
        });        
});