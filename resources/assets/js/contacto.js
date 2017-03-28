$(document).ready(function() {

  $('#crear-contacto').submit(function(event) {
    event.preventDefault();

    var nombre, telefono, correo, comentario, data;

    nombre = $('#nombre').val();
    telefono = $('#telefono').val();
    correo = $('#correo').val();
    comentario = $('#comentario').val();

    data = {
      nombre: nombre,
      telefono: telefono,
      correo: correo,
      comentario: comentario,
      enviar_correo: true
    }

    $.ajax({
      url: '/api/v1/enviar_contacto',
      dataType: 'json',
      type: 'post',
      contentType: 'application/json',
      data: JSON.stringify(data),
      success: function(data, textStatus, jQxhr) {
        $('#correo-enviado').modal('show');
        $('#nombre').val('');
        $('#telefono').val('');
        $('#correo').val('');
        $('#comentario').val('');
      },
      error: function(jqXhr, textStatus, errorThrown) {
        console.log(errorThrown);
      }
    });

  });

});