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



  function reply_clickBorrar(id) {
    confirmar = confirm('¿Estás seguro de eliminar la liquidacion?');
    if (confirmar == true) {
      var datosS = new FormData();
      datosS.append("id_liquidacion",id);
      datosS.append("tipoOperacion", "eliminarLiquidacion");
      $.ajax({
        url: 'ajax/ajaxLiquidaciones.php',
        type: 'POST',
        data: datosS,
        processData: false,
        contentType: false,
        success: function(res) {
          
          location.reload();
          $("#recargar1").load(location.href + " #recargar1");
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
    var inicio_idl = cadena.indexOf("idlcode:") + 8;
    var fin_idl = cadena.indexOf(":idlcode");
    var id_liquidacion = cadena.substring(inicio_idl, fin_idl);

    //Obteniendo valor del año
    var inicio_anio = cadena.indexOf("aniocode:") + 9;
    var fin_anio = cadena.indexOf(":aniocode");
    var anio = cadena.substring(inicio_anio, fin_anio);

    //Obteniendo valor del mes
    var inicio_mes = cadena.indexOf("mescode:") + 8;
    var fin_mes = cadena.indexOf(":mescode");
    var mes = cadena.substring(inicio_mes, fin_mes);
    //valor dias trabajados
    var inicio_diast = cadena.indexOf("diastcode:") + 10;
    var fin_diast = cadena.indexOf(":diastcode");
    var diast = cadena.substring(inicio_diast, fin_diast);

    //Obteniendo valor de sueldo base
    var inicio_sueldob = cadena.indexOf("sueldobcode:") + 12;
    var fin_sueldob = cadena.indexOf(":sueldobcode");
    var sueldob = cadena.substring(inicio_sueldob, fin_sueldob);

    //Obteniendo valor  aguinaldo
    var inicio_aguinaldo = cadena.indexOf("aguinaldocode:") + 14;
    var fin_aguinaldo = cadena.indexOf(":aguinaldocode");
    var aguinaldo = cadena.substring(inicio_aguinaldo, fin_aguinaldo);

    //Obteniendo valor de bonoa
    var inicio_bonoa = cadena.indexOf("bonoacode:") + 10;
    var fin_bonoa = cadena.indexOf(":bonoacode");
    var bonoa = cadena.substring(inicio_bonoa, fin_bonoa);

    //Obteniendo bonop
    var inicio_bonop = cadena.indexOf("bonopcode:") + 10;
    var fin_bonop = cadena.indexOf(":bonopcode"); 
    var bonop = cadena.substring(inicio_bonop, fin_bonop);
    //Obteniendo gratificacion
    var inicio_gratificacion = cadena.indexOf("gratificacioncode:") + 18;
    var fin_gratificacion = cadena.indexOf(":gratificacioncode"); 
    var gratificacion = cadena.substring(inicio_gratificacion, fin_gratificacion);
    //Obtenienddo el valor colacion
    var inicio_colacion = cadena.indexOf("colacioncode:") + 13;
    var fin_colacion = cadena.indexOf(":colacioncode");
    var colacion = cadena.substring(inicio_colacion, fin_colacion);
    //Obtenienddo el valor movilizacion
    var inicio_movilizacion = cadena.indexOf("movilizacioncode:") + 17;
    var fin_movilizacion = cadena.indexOf(":movilizacioncode");
    var movilizacion = cadena.substring(inicio_movilizacion, fin_movilizacion);
    //Obtenienddo el valor utilesa
    var inicio_utilesa = cadena.indexOf("utilesacode:") + 12;
    var fin_utilesa = cadena.indexOf(":utilesacode");
    var utilesa = cadena.substring(inicio_utilesa, fin_utilesa);
    //Obtenienddo el valor asigf
    var inicio_asigf = cadena.indexOf("asigfcode:") + 10;
    var fin_asigf = cadena.indexOf(":asigfcode");
    var asigf = cadena.substring(inicio_asigf, fin_asigf);
      //Obtenienddo el valor descuennto afp modelo
    var inicio_descafomodelo = cadena.indexOf("descafpmodelocode:") + 18;
    var fin_descafpmodelo = cadena.indexOf(":descafpmodelocode");
    var descafpmodelo = cadena.substring(inicio_descafomodelo, fin_descafpmodelo);
      //Obtenienddo el valor descuento fonasa
    var inicio_descfonasa = cadena.indexOf("descfonasacode:") + 15;
    var fin_descfonasa = cadena.indexOf(":descfonasacode");
    var descfonasa = cadena.substring(inicio_descfonasa, fin_descfonasa);
     //Obtenienddo el valor impuestou
     var inicio_impuestou = cadena.indexOf("impuestoucode:") + 14;
    var fin_impuestou = cadena.indexOf(":impuestoucode");
    var impuestou = cadena.substring(inicio_impuestou, fin_impuestou);
     //Obtenienddo el valor seguros
     var inicio_seguros = cadena.indexOf("seguroscode:") + 12;
    var fin_seguros = cadena.indexOf(":seguroscode");
    var seguros = cadena.substring(inicio_seguros, fin_seguros);
     //Obtenienddo el valor fecha
     var inicio_fecha = cadena.indexOf("fechacode:") + 10;
    var fin_fecha = cadena.indexOf(":fechacode");
    var fecha = cadena.substring(inicio_fecha, fin_fecha);
     //Obtenienddo el valor seguros
     var inicio_id_cliente = cadena.indexOf("id_clientecode:") + 17;
    var fin_id_cliente = cadena.indexOf(":id_clientecode");
    var id_cliente = cadena.substring(inicio_id_cliente, fin_id_cliente);


    
    //Redireccionando  Valores a formulario.
    $('#idL').val(id_liquidacion);
    $('#idAnio').val(anio);
    $('#idMes').val(mes);
    $('#idDiast').val(diast);
    $('#idSueldob').val(sueldob);
    $('#idAguinaldo').val(aguinaldo);
    $('#idBonoa').val(bonoa);
    $('#idBonop').val(bonop);
    $('#idGratificacion').val(gratificacion);
    $('#idColacion').val(colacion);
    $('#idMovilizacion').val(movilizacion);
    $('#idUtilesa').val(utilesa);
    $('#idAsigf').val(asigf)
    $('#idDescafpmodelo').val(descafpmodelo)
    $('#idDescfonasa').val(descfonasa)
    $('#idImpuestou').val(impuestou);
    $('#idSeguros').val(seguros);
    $('#idFecha').val(fecha);
    
    $('#idId_cliente').val(id_cliente);
    
   
    
    



    
    //Mostrar / Ocultar botón
    $("#editar").show();
    $("#enviar").hide();
    $("#cancelar").show();
    $("#textoModal").text("Editar Liquidacion");
  }

  $('#enviar').click(function(e) {
    
    
    //Envio de datos.
    
      
       
          var datosAgregar = new FormData();
          datosAgregar.append("tipoOperacion", "insertarLiquidacion");
          
          var anio = $('#idAnio').val();
          var mes = $('#idMes').val();
          var diast = $('#idDiast').val();
          var sueldob = $('#idSueldob').val();
          var aguinaldo = $('#idAguinaldo').val();
          var bonoa = $('#idBonoa').val();
          var bonop = $('#idBonop').val();
          var gratificacion = $('#idGratificacion').val();
          var colacion = $('#idColacion').val();
          var movilizacion = $('#idMovilizacion').val();
          var utilesa = $('#idUtilesa').val();
          var asigf = $('#idAsigf').val();
          var descafpmodelo = $('#idDescafpmodelo').val();
          var descfonasa = $('#idDescfonasa').val();
          var impuestou = $('#idImpuestou').val();
          var seguros = $('#idSeguros').val();
          var fecha= $('#idFecha').val();
         
          var id_cliente = $('#id_cliente').val();
          
          //agregar v
          datosAgregar.append("anio", anio);
          datosAgregar.append("mes", mes);
          datosAgregar.append("diast", diast);
          datosAgregar.append("sueldob",sueldob );
          datosAgregar.append("aguinaldo", aguinaldo);
          datosAgregar.append("bonoa",bonoa );
          datosAgregar.append("bonop", bonop);
          datosAgregar.append("gratificacion", gratificacion);
          datosAgregar.append("colacion", colacion);
          datosAgregar.append("movilizacion", movilizacion);
          datosAgregar.append("utilesa", utilesa);
          datosAgregar.append("asigf", asigf);
          datosAgregar.append("descafpmodelo", descafpmodelo);
          datosAgregar.append("descfonasa", descfonasa);
          datosAgregar.append("impuestou", impuestou);
          datosAgregar.append("seguros", seguros);
          datosAgregar.append("fecha", fecha);
          datosAgregar.append("id_cliente", id_cliente);
          
          

          $.ajax({ 
            url: 'ajax/ajaxLiquidaciones.php',
            type: 'POST',
            data: datosAgregar,
            processData: false,
            contentType: false,
            success: function(res) {
              
              location.reload();
              
              $("#recargar1").load(location.href + " #recargar1");
              limpiarFormulario();
              $('#exampleModalCenter').modal("show");
              $('#exampleModal').modal("hide");
            }
          });
        
      
    
  })

  $('#editar').click(function(e) {
   
    //Validación de campos vacios.
 

        var datosEditar = new FormData();
        datosEditar.append("tipoOperacion", "editarLiquidacion");
        var id_liquidacion = $('#idL').val();
        var anio = $('#idAnio').val();
        var mes = $('#idMes').val();
        var diast = $('#idDiast').val();
        var sueldob = $('#idSueldob').val();
        var aguinaldo = $('#idAguinaldo').val();
        var bonoa = $('#idBonoa').val();
        var bonop = $('#idBonop').val();
        var gratificacion = $('#idGratificacion').val();
        var colacion = $('#idColacion').val();
        var movilizacion = $('#idMovilizacion').val();
        var utilesa = $('#idUtilesa').val();
        var asigf = $('#idAsigf').val();
        var descafpmodelo = $('#idDescafpmodelo').val();
        var descfonasa = $('#idDescfonasa').val();
        var impuestou = $('#idImpuestou').val();
        var seguros = $('#idSeguros').val();
        var fecha= $('#idFecha').val();
        var id_cliente = $('#id_cliente').val();
        
       
        

          
         
          datosEditar.append("id_liquidacion", id_liquidacion);
          datosEditar.append("anio", anio);
          datosEditar.append("mes", mes);
          datosEditar.append("diast", diast);
          datosEditar.append("sueldob",sueldob );
          datosEditar.append("aguinaldo", aguinaldo);
          datosEditar.append("bonoa",bonoa );
          datosEditar.append("bonop", bonop);
          datosEditar.append("gratificacion", gratificacion);
          datosEditar.append("colacion", colacion);
          datosEditar.append("movilizacion", movilizacion);
          datosEditar.append("utilesa", utilesa);
          datosEditar.append("asigf", asigf);
          datosEditar.append("descafpmodelo", descafpmodelo);
          datosEditar.append("descfonasa", descfonasa);
          datosEditar.append("impuestou", impuestou);
          datosEditar.append("seguros", seguros);
          datosEditar.append("fecha", fecha);
          datosEditar.append("id_cliente", id_cliente);
          
          
         
          
      $.ajax({
        url: 'ajax/ajaxliquidaciones.php',
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
          $("#textoModal").text("Editar liquidacion");
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
    $("#textoModal").text("Agregar Liquidacion");
  });


  $('#cancelar').click(function() {
    limpiarFormulario();
    $("#editar").hide();
    $("#enviar").show();
    $("#cancelar").hide();
    $("#textoModal").text("Agregar Liquidacion");
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
    if (dvEsperado != dv) {
      rut.setCustomValidity("RUT Inválido");
      return false;
    }
    // Si todo sale bien, eliminar errores (decretar que es válido)
    rut.setCustomValidity('');
    rutValido = true;
  }
</script>