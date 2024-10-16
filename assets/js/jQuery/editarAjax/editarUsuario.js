async function editarUsuario() {
    // Editar en tabla medios
    var datos = new FormData();
    var Id = $("#EditarIdUsuario").val();
    var Nombre = $("#EditarNombreUsuario").val();
    var Contraseña = $("#EditarContraseña").val();
    var Rol = $("#EditarRolUsuario").val();
    var Estado = $("#EditarEstadoUsuario").val();
    
    // Cifrar la contraseña con SHA-256 solo si se ha ingresado una nueva
    var hashedPassword = Contraseña ? await sha256(Contraseña) : ""; // Cifrar si no está vacío
    
    datos.append("Id", Id);   
    datos.append("Nombre", Nombre);
    datos.append("Contraseña", hashedPassword); // Usar la contraseña cifrada (o vacía)
    datos.append("Rol", Rol);
    datos.append("Estado", Estado);
    
    $.ajax({
        url: "../../model/editarBaseDeDatos/editarUsuario.php",
        method: "POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        //dataType: "json",
        success: function(respuesta) {  
            if (respuesta == "1") {
                // Limpiar inputs del formulario
                limpiarInputsEditarUsuario();
                // Cerrar modal  
                $('#modalEditarUsuario').modal('hide'); 
                // Recargar dataTable
                var recarga = $("#tablaUsuarios").DataTable();
                recarga.ajax.reload();
                // Toast de registro exitoso    
                console.log("registro exitoso");
                aceptado("Usuario Editado");
            } else {
                // Limpiar inputs del formulario
                limpiarInputsEditarUsuario();
                // Cerrar modal
                $('#modalEditarUsuario').modal('hide');
                // Toast de registro fallido
                console.log("error");
                rechazado(respuesta);
            }
        },
    });
}

// Función para generar el hash SHA-256
async function sha256(message) {
    const encoder = new TextEncoder();
    const data = encoder.encode(message);
    const hash = await crypto.subtle.digest('SHA-256', data);
    
    // Convertir el hash a una cadena hexadecimal
    return Array.from(new Uint8Array(hash))
                .map(b => b.toString(16).padStart(2, '0'))
                .join('');
}
