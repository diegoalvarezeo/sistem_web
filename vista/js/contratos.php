<script type="text/javascript">

$('#idAceptarAgregado').click(function() {
    $('#exampleModalCenter').modal("hide");
    
  });
  $('#idEditarAgregado').click(function() {
    $('#exampleModalCenterEditar').modal("hide");

  });  


  $("#editar").hide();
  $("#enviar").show();
  $("#cancelar").hide();
  
  function reply_clickBorrar(clicked_id) {
    confirmar = confirm('¿Estás seguro de eliminar el contrato?');
    if (confirmar == true) {
      var datosAgregar = new FormData();
      datosAgregar.append("id_contrato", clicked_id);
      datosAgregar.append("tipoOperacion", "eliminarContrato");
      $.ajax({
        url: 'ajax/ajaxContrato.php',
        type: 'POST',
        data: datosAgregar,
        processData: false,
        contentType: false,
        success: function(res) {
          
          $("#recargar1").load(location.href + " #recargar1");
          location.reload();
        }
      });
      $("#editar").hide();
      $("#enviar").show();
      $("#cancelar").hide();
    }
  }

  function reply_clickModificar(clicked_id) {
    var cadena = clicked_id;
    //Obteniendo valor de Id
    var inicio_id = cadena.indexOf("idcontratocode:") + 15;
    var fin_id = cadena.indexOf(":idcontratocode");
    var id_contrato = cadena.substring(inicio_id, fin_id);

    //Obteniendo valor de ciudad de residencia
    var inicio_ciudadr = cadena.indexOf("ciudadresidenciacode:") + 21;
    var fin_ciudadr = cadena.indexOf(":ciudadresidenciacode");
    var ciudadresidencia = cadena.substring(inicio_ciudadr, fin_ciudadr);

    //Obteniendo valor del iniciocontrato
    var inicio_co = cadena.indexOf("inicioccode:") + 12;
    var fin_co = cadena.indexOf(":inicioccode");
    var inicioc = cadena.substring(inicio_co, fin_co);

    //Obteniendo valor de nacionalidad
    var inicio_nacionalidad = cadena.indexOf("nacionalidadcode:") + 17;
    var fin_nacionalidad = cadena.indexOf(":nacionalidadcode");
    var nacionalidad = cadena.substring(inicio_nacionalidad, fin_nacionalidad);

    //Obteniendo valor  desempeñado
    var inicio_desempenado = cadena.indexOf("desempenadocode:") + 16;
    var fin_desempenado = cadena.indexOf(":desempenadocode");
    var desempenado = cadena.substring(inicio_desempenado, fin_desempenado);

    //Obteniendo valor de ubicacione
    var inicio_ubicacione = cadena.indexOf("ubicacionecode:") + 15;
    var fin_ubicacione = cadena.indexOf(":ubicacionecode");
    var ubicacione = cadena.substring(inicio_ubicacione, fin_ubicacione);

    //Obteniendo cargo
    var inicio_cargo = cadena.indexOf("cargocode:") + 10;
    var fin_cargo = cadena.indexOf(":cargocode");
    var cargo = cadena.substring(inicio_cargo, fin_cargo);
    //Obtenienddo el valor fin contrato
    var inicio_fc = cadena.indexOf("finccode:") + 9;
    var fin_fc = cadena.indexOf(":finccode");
    var finc = cadena.substring(inicio_fc, fin_fc);
    
    //Obtenienddo el valor idcliente nsjlxbvsñdflngbldbnlsd!!!!!!!!!!!!!!
    var inicio_idcliente = cadena.indexOf("idclientecode:") + 17;
    var fin_idcliente = cadena.indexOf(":idclientecode");
    var idcliente = cadena.substring(inicio_idcliente, fin_idcliente);
    
    
    //Redireccionando  Valores a formulario.
    $('#idC').val(id_contrato);
    $('#idCiudadresidencia').val(ciudadresidencia);
    $('#idIcontrato').val(inicioc);
    $('#idNacionalidad').val(nacionalidad);
    $('#idDesempenado').val(desempenado);
    $('#idUbicacione').val(ubicacione);
    $('#idCargo').val(cargo);
    $('#idFcontrato').val(finc);
    $('#idIdcliente').val(idcliente);
    
   
    

    
    //Mostrar / Ocultar botón
    $("#editar").show();
    $("#enviar").hide();
    $("#cancelar").show();
    $("#textoModal").text("Editar Cliente");
  }



 
  $('#enviar').click(function(e) {
  
   
    //Validación de campos vacios.
          var datosAgregar = new FormData();
          datosAgregar.append("tipoOperacion", "insertarContrato");
          var ciudadresidencia= $('#idCiudadresidencia').val();
          var inicioc = $('#idIcontrato').val();
          var nacionalidad = $('#idNacionalidad').val();
          var desempenado = $('#idDesempenado').val();
          var ubicacione = $('#idUbicacione').val();
          var cargo = $('#idCargo').val();
          var finc = $('#idFcontrato').val();
          //error
          var idcliente = $('#idcliente').val();
         
          
          //agregar valoress acaaa!!
          datosAgregar.append("ciudadresidencia", ciudadresidencia);
          datosAgregar.append("inicioc", inicioc);
          datosAgregar.append("nacionalidad", nacionalidad);
          datosAgregar.append("desempenado", desempenado);
          datosAgregar.append("ubicacione", ubicacione);
          datosAgregar.append("cargo", cargo);
          datosAgregar.append("finc", finc );
          datosAgregar.append("idcliente",idcliente);
          
          $.ajax({
            url: 'ajax/ajaxContrato.php',
            type: 'POST',
            data: datosAgregar,
            processData: false,
            contentType: false,
            success: function(res) {
              alert(res) ;
              $("#recargar1").load(location.href + " #recargar1");
              location.reload();
              limpiarFormulario();
              $('#exampleModalCenter').modal("show");
              $('#exampleModal').modal("hide");
            }
          });
        
      }
    
  )
//editar
  $('#editar').click(function(e) {
     
      var datosEditar = new FormData();
      datosEditar.append("tipoOperacion", "editarContrato");
      var id_contrato = $('#idC').val();
      var ciudadresidencia = $('#idCiudadresidencia').val();
      var inicioc = $('#idIcontrato').val();
      var nacionalidad = $('#idNacionalidad').val();
      var desempenado = $('#idDesempenado').val();
      var ubicacione = $('#idUbicacione').val();
      var cargo = $('#idCargo').val();
      var finc = $('#idFcontrato').val();
      var idcliente = $('#idcliente').val();
     
     

      datosEditar.append("id_contrato", id_contrato);
      datosEditar.append("ciudadresidencia", ciudadresidencia);
      datosEditar.append("inicioc", inicioc);
      datosEditar.append("nacionalidad", nacionalidad);
      datosEditar.append("desempenado", desempenado);
      datosEditar.append("ubicacione", ubicacione);
      datosEditar.append("cargo", cargo);
      datosEditar.append("finc", finc );
      datosEditar.append("idcliente",idcliente);

      $.ajax({
        url: 'ajax/ajaxContrato.php',
        type: 'POST',
        data: datosEditar,
        processData: false,
        contentType: false,
        success: function(res) {
          
          $("#recargar1").load(location.href + " #recargar1");
          location.reload();
          $('#exampleModal').modal("hide");
          $('#exampleModalCenterEditar').modal("show");
          $("#editar").hide();
          $("#enviar").show();
          $("#cancelar").hide();
          $("#textoModal").text("Editar Contrato");
          limpiarFormulario();
        }
      });
    

  });

  function limpiarFormulario() {
    document.getElementById("formulario").reset();
  }

  $('#IDBotonModalAgregar').click(function() {
    limpiarFormulario();
    $("#editar").hide();
    $("#enviar").show();
    $("#cancelar").hide();
    $("#textoModal").text("Agregar Contrato");
  });


  $('#cancelar').click(function() {
    limpiarFormulario();
    $("#editar").hide();
    $("#enviar").show();
    $("#cancelar").hide();
    $("#textoModal").text("Agregar Contrato");
  });

  
</script>