<script type="text/javascript">
  rutValido = false;
  $('#idAceptarAgregado').click(function() {
    $('#exampleModalCenter').modal("hide");
    rutValido = false;
  });
  $('#idEditarAgregado').click(function() {
    $('#exampleModalCenterEditar').modal("hide");
    rutValido = false;
  });

  $("#editar").hide();
  $("#enviar").show();
  $("#cancelar").hide();



  function reply_clickBorrar(clicked_id) {
    
    confirmar = confirm('¿Estás seguro de eliminar al cliente?, Si tiene  documentos asignados a este cliente no podra eliminarlo.');
    if (confirmar == true) {
      var datos = new FormData();
      datos.append("id", clicked_id);
      datos.append("tipoOperacion", "eliminarCliente");
      $.ajax({
        url: 'ajax/ajaxCliente.php',
        type: 'POST',
        data: datos,
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
    var inicio_id = cadena.indexOf("idcode:") + 7;
    var fin_id = cadena.indexOf(":idcode");
    var id = cadena.substring(inicio_id, fin_id);

    //Obteniendo valor del Nombre
    var inicio_nombreemp = cadena.indexOf("nombreEmpcode:") + 14;
    var fin_nombreemp = cadena.indexOf(":nombreEmpcode");
    var nombreemp = cadena.substring(inicio_nombreemp, fin_nombreemp);

    //Obteniendo valor del Rut
    var inicio_rut = cadena.indexOf("rutcode:") + 8;
    var fin_rut = cadena.indexOf(":rutcode");
    var rute = cadena.substring(inicio_rut, fin_rut);

    //Obteniendo valor de direccion
    var inicio_direccion = cadena.indexOf("direccioncode:") + 14;
    var fin_direccion = cadena.indexOf(":direccioncode");
    var direccion = cadena.substring(inicio_direccion, fin_direccion);

    //Obteniendo valor  Profesion
    var inicio_profesion = cadena.indexOf("profesioncode:") + 14;
    var fin_profesion = cadena.indexOf(":profesioncode");
    var profesion = cadena.substring(inicio_profesion, fin_profesion);

    //Obteniendo valor de correo
    var inicio_correo = cadena.indexOf("correocode:") + 11;
    var fin_correo = cadena.indexOf(":correocode");
    var correo = cadena.substring(inicio_correo, fin_correo);

    //Obteniendo telefono
    var inicio_telefono = cadena.indexOf("telefonocode:") + 13;
    var fin_telefono = cadena.indexOf(":telefonocode");
    var telefono = cadena.substring(inicio_telefono, fin_telefono);
    //Obtenienddo el valor AFP
    var inicio_afp = cadena.indexOf("afpcode:") + 8;
    var fin_afp = cadena.indexOf(":afpcode");
    var afp = cadena.substring(inicio_afp, fin_afp);
    //Obtenienddo el valor sistema salud
    var inicio_sistemasalud = cadena.indexOf("sistemasaludcode:") + 17;
    var fin_sistemasalud = cadena.indexOf(":sistemasaludcode");
    var sistemasalud = cadena.substring(inicio_sistemasalud, fin_sistemasalud);
    //Obtenienddo el valor sucursal
    var inicio_nsucursal = cadena.indexOf("nsucursalcode:") + 14;
    var fin_nsucursal = cadena.indexOf(":nsucursalcode");
    var nsucursal = cadena.substring(inicio_nsucursal, fin_nsucursal);
    //Obtenienddo el valor password
    var inicio_password = cadena.indexOf("contrasenacode:") + 3;
    var fin_password = cadena.indexOf(":contrasenacode");
    var contrasena = cadena.substring(inicio_password, fin_password);
    //Obtenienddo el valor rol
    var inicio_rol = cadena.indexOf("rolcode:") + 17;
    var fin_rol = cadena.indexOf(":rolcode");
    var idrol = cadena.substring(inicio_rol, fin_rol);

    
    //Redireccionando  Valores a formulario.
    $('#idId').val(id);
    $('#idNombreEmp').val(nombreemp);
    $('#idRut').val(rute);
    $('#idDireccion').val(direccion);
    $('#idProfesion').val(profesion);
    $('#idCorreo').val(correo);
    $('#idTelefono').val(telefono);
    $('#idAfp').val(afp);
    $('#idSistemasalud').val(sistemasalud);
    $('#idNsucursal').val(nsucursal);
    $('#idContrasena').val(contrasena);
    $('#idRol').val(idrol);

    
    //Mostrar / Ocultar botón
    $("#editar").show();
    $("#enviar").hide();
    $("#cancelar").show();
    $("#textoModal").text("Editar Cliente");
  }

  $('#enviar').click(function(e) {
    var nombreemp= $('#idNombreEmp').val();
    var rute = $('#idRut').val();
    //Validación de campos vacios.
    if (rute == "" || rute == "-") {} else {
      if (nombreemp == "") {} else {
        
          var datosAgregar = new FormData();
          datosAgregar.append("tipoOperacion", "insertarCliente");
          var nombreemp = $('#idNombreEmp').val();
          var rute = $('#idRut').val();
          var direccion = $('#idDireccion').val();
          var profesion = $('#idProfesion').val();
          var correo = $('#idCorreo').val();
          var telefono = $('#idTelefono').val();
          var afp = $('#idAfp').val();
          var sistemasalud = $('#idSistemasalud').val();
          var nsucursal = $('#idNsucursal').val();
          var contrasena = $('#idContrasena').val();
          var idrol = $('#idRol').val();
          //agregar valoress acaaa!!
          datosAgregar.append("nombreemp", nombreemp);
          datosAgregar.append("rute", rute);
          datosAgregar.append("direccion", direccion);
          datosAgregar.append("profesion", profesion);
          datosAgregar.append("correo", correo);
          datosAgregar.append("telefono", telefono );
          datosAgregar.append("afp", afp );
          datosAgregar.append("sistemasalud", sistemasalud);
          datosAgregar.append("nsucursal", nsucursal);
          datosAgregar.append("contrasena", contrasena );
          datosAgregar.append("idrol", idrol );
          $.ajax({
            url: 'ajax/ajaxCliente.php',
            type: 'POST',
            data: datosAgregar,
            processData: false,
            contentType: false,
            success: function(res) {
              $("#recargar1").load(location.href + " #recargar1");
              location.reload();
              limpiarFormulario();
              $('#exampleModalCenter').modal("show");
              $('#exampleModal').modal("hide");
            }
          });
        
      }
    }
  })

  $('#editar').click(function(e) {
    var nombreemp = $('#idNombreEmp').val();
    var rute = $('#idRut').val();
    //Validación de campos vacios.
    if (nombreemp == "") {} else {

      var datosEditar = new FormData();
      datosEditar.append("tipoOperacion", "editarCliente");
      var id = $('#idId').val();
      var nombreemp = $('#idNombreEmp').val();
      var rute = $('#idRut').val();
      var direccion = $('#idDireccion').val();
      var profesion = $('#idProfesion').val();
      var correo = $('#idCorreo').val();
      var telefono = $('#idTelefono').val();
      var afp = $('#idAfp').val();
      var sistemasalud = $('#idSistemasalud').val();
      var nsucursal = $('#idNsucursal').val();
      var contrasena = $('#idContrasena').val();
      var idrol = $('idRol').val();

    

      datosEditar.append("id", id);
      datosEditar.append("nombreemp", nombreemp);
      datosEditar.append("rute", rute);
      datosEditar.append("direccion", direccion);
      datosEditar.append("profesion", profesion);
      datosEditar.append("correo", correo);
      datosEditar.append("telefono", telefono );
      datosEditar.append("afp", afp );
      datosEditar.append("sistemasalud", sistemasalud);
      datosEditar.append("nsucursal", nsucursal);
      datosEditar.append("contrasena", contrasena );
      datosEditar.append("idrol", idrol );

      $.ajax({
        url: 'ajax/ajaxCliente.php',
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
          $('#idRol').val("");
          $("#textoModal").text("Editar  Cliente");
          limpiarFormulario();
        }
      });
    }

  });

  function limpiarFormulario() {
    document.getElementById("formulario").reset();
  }

  $('#IDBotonModalAgregar').click(function() {
    limpiarFormulario();
    $("#editar").hide();
    $("#enviar").show();
    $("#cancelar").hide();
    $("#textoModal").text("Agregar Cliente");
  });


  $('#cancelar').click(function() {
    limpiarFormulario();
    $("#editar").hide();
    $("#enviar").show();
    $("#cancelar").hide();
    $("#textoModal").text("Agregar Cliente");
  });

  function checkRut(rut) {
    // Despejar Puntos
    var valor = rut.value.replace('.', '');
    // Despejar Guión
    valor = valor.replace('-', '');

    // Aislar Cuerpo y Dígito Verificador
    cuerpo = valor.slice(0, -1);
    dv = valor.slice(-1).toUpperCase();

    // Formatear RUN
    rut.value = cuerpo + '-' + dv

    // Si no cumple con el mínimo ej. (n.nnn.nnn)
    if (cuerpo.length < 7) {
      rut.setCustomValidity("RUT Incompleto");
      return false;
    }
    // Calcular Dígito Verificador
    suma = 0;
    multiplo = 2;
    // Para cada dígito del Cuerpo
    for (i = 1; i <= cuerpo.length; i++) {
      // Obtener su Producto con el Múltiplo Correspondiente
      index = multiplo * valor.charAt(cuerpo.length - i);
      // Sumar al Contador General
      suma = suma + index;
      // Consolidar Múltiplo dentro del rango [2,7]
      if (multiplo < 7) {
        multiplo = multiplo + 1;
      } else {
        multiplo = 2;
      }
    }
    // Calcular Dígito Verificador en base al Módulo 11
    dvEsperado = 11 - (suma % 11);
    // Casos Especiales (0 y K)
    dv = (dv == 'K') ? 10 : dv;
    dv = (dv == 0) ? 11 : dv;
    // Validar que el Cuerpo coincide con su Dígito Verificador
    
    //if (dvEsperado != dv) {
    //  rut.setCustomValidity("RUT Inválido");
    //  return false;
    //}
    
    // Si todo sale bien, eliminar errores (decretar que es válido)
    rut.setCustomValidity('');
    rutValido = true;
  }
</script>