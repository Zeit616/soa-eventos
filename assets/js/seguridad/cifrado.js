document.getElementById('formularioLogin').addEventListener('submit', async function (event) {
    event.preventDefault(); // Evita el envío inmediato del formulario
    
    let usuario = document.getElementById('inputUsuario').value;
    let contraseña = document.getElementById('inputContraseña').value;
    
    
    // Cifrar la contraseña con SHA-256
    const hashedPassword = await sha256(contraseña);

    // Asignar el valor cifrado al campo de contraseña antes de enviar
    document.getElementById('inputContraseña').value = hashedPassword;

    
    this.submit(); // Envía el formulario
});

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
