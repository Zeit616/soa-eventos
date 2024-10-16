async function añadirUsuario() {
    //Registrar en tabla medios
    var datos = new FormData();
    var Nombre = $("#AñadirNombreUsuario").val();
    var Contraseña = $("#AñadirContraseña").val();
    var Rol = $("#AñadirRolUsuario").val();
    
    // Cifrar la contraseña con SHA-256
    const hashedPassword = await sha256(Contraseña);
    
    datos.append("Nombre", Nombre);
    datos.append("Contraseña", hashedPassword); // Usar la contraseña cifrada
    datos.append("Rol", Rol);
    
    $.ajax({
        url: "../../model/registrarBaseDeDatos/añadirUsuario.php",
        method: "POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        //dataType: "json",
        success: function(respuesta) {  
            if (respuesta == "1") {
                // Limpiar inputs del formulario
                limpiarInputsAñadirUsuario();
                // Cerrar modal  
                $('#modalAñadirUsuario').modal('hide'); 
                // Recargar dataTable
                var recarga = $("#tablaUsuarios").DataTable();
                recarga.ajax.reload();
                // Toast de registro exitoso    
                console.log("registro exitoso");
                aceptado("Registro exitoso");
            } else {
                // Limpiar inputs del formulario
                limpiarInputsAñadirUsuario();
                // Cerrar modal
                $('#modalAñadirUsuario').modal('hide');
                // Toast de registro fallido
                console.log("error");
                rechazado(respuesta);
            }
        },
    });
};

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
