$(document).ready(function() {
    $('#enviar_codigo').on('click', function(e) {

        var codigoInvitado = $('#codigo_invitado').val();

        $.ajax({
            url: 'servicios/get/get_evento_codigo.php', 
            type: 'GET',               
            data: { codigo: codigoInvitado }, 
            success: function(response) {
                var data = JSON.parse(response);
                
                if (data.error) {
                    console.log(data.error);
                    alert("Error: " + data.error);
                } else {

                    document.getElementById('nombre').textContent = '';
                    document.getElementById('f_inicio').textContent = '';
                    document.getElementById('h_inicio').textContent = '';
                    document.getElementById('f_fin').textContent = '';
                    document.getElementById('h_fin').textContent = '';
                    document.getElementById('lugar').textContent = '';

                    
                    document.getElementById('nombre').textContent = data[0][2];
                    document.getElementById('f_inicio').textContent = data[0][3];
                    document.getElementById('h_inicio').textContent = data[0][4];
                    document.getElementById('f_fin').textContent = data[0][5];
                    document.getElementById('h_fin').textContent = data[0][6];
                    document.getElementById('lugar').textContent = data[0][7];

                    $('#modal_evento').modal('show');


                }
            },
            error: function(xhr, status, error) {
                console.log(error);
            }
        });
    });
});
