//Validacion de inputs de añadir evento
    $(function () {
        $.validator.setDefaults({
          submitHandler: function () {  
            añadirEvento();
          },
        });
        $("#formularioAñadirEvento").validate({
          rules: {
            NameAñadirNombreEvento:{
              required: true,
            },
            AñadirFechaInicio:{
              required: true,
            },
            AñadirHoraInicio: {
              required: true,
            },
            AñadirFechaFin:{
              required: true,
            },
            AñadirHoraFin:{
              required: true,
            },
            AñadirLugarEvento: {
              required: true,
            },
          },
          messages: {
          },
          errorElement: "span",
          errorPlacement: function (error, element) {
            error.addClass("invalid-feedback");
            element.closest(".form-group").append(error);
          },
          highlight: function (element, errorClass, validClass) {
            $(element).addClass("is-invalid");
          },
          unhighlight: function (element, errorClass, validClass) {
            $(element).removeClass("is-invalid");
          },
        });
    });
//Validacion de inputs de editar evento
  $(function () {
    $.validator.setDefaults({
      submitHandler: function () {  
        editarEvento();
      },
    });
    $("#formularioEditarEvento").validate({
      rules: {
        EditarNombreEvento:{
          required: true,
        },
        EditarFechaInicio:{
          required: true,
        },
        EditarHoraInicio: {
          required: true,
        },
        EditarFechaFin: {
          required: true,
        },
        EditarHoraFin:{
          required: true,
        },
        EditarLugarEvento: {
          required: true,
        },
      },
      messages: {
      },
      errorElement: "span",
      errorPlacement: function (error, element) {
        error.addClass("invalid-feedback");
        element.closest(".form-group").append(error);
      },
      highlight: function (element, errorClass, validClass) {
        $(element).addClass("is-invalid");
      },
      unhighlight: function (element, errorClass, validClass) {
        $(element).removeClass("is-invalid");
      },
    });
  });