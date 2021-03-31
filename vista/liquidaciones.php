<?php require('backend/redirect.php'); ?>
<!DOCTYPE html>
<html lang="es">
<?php require('estructura/head.php'); 
$_SESSION['iid'] = $_POST["id"]  ;
$nombre = $_POST["nombreemp"];



?>


<body id="page-top">
  <div id="wrapper">
    <?php include('estructura/barraLateral.php'); ?>
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <?php include('estructura/barraSuperior.php'); ?>
        <div class="container-fluid">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <!-- Modal Borrar -->
            <!-- FIN MODAL BORRAR -->
            
            <h1 class="h3 mb-0 text-gray-800">Liquidaciones de Don(a):<?php echo $_POST["nombreemp"];?></h1>
          </div>
          <input hidden type="text" name="" value=" <?php echo $_POST["id"]; ?>" class="custom-file-input" id="id_cliente">
          
          <p class="mb-4">Aquí podrá agregar y editar una liquidacion</a>.</p>
          <?php  ($_SESSION['iid']) ?>
          <button type="button" id="IDBotonModalAgregar" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Agregar nueva liquidacion
          </button>
          <!-- Inicio Modal -->
          <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">Notificación</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  liquidacion agregada con éxito
                </div>
                <div class="modal-footer">
                  <button type="button" id="idAceptarAgregado" class="btn btn-primary">Aceptar</button>
                </div>
              </div>
            </div>
          </div>
          <!-- Fin Modal -->
          <!-- Inicio Modal Editar-->
          <div class="modal fade" id="exampleModalCenterEditar" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">Notificación</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  liquidacion agregada
                </div>
                <!-- cambiar aca el id AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAa-->
                <div class="modal-footer">
                  <button type="button" id="idEditarAgregado" class="btn btn-primary">Aceptar</button>
                </div>
              </div>
            </div>
          </div>
          <!-- Fin Modal -->
          <br>
          <br>
          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="textoModal">Nueva liquidacion</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <!--  Inicio Modal Body -->
                  <form id="formulario" onsubmit="return false" method="POST">
                    <div class="form-group" style="display: none">
                      <!--  ID solo para uso BD -->
                      <input type="text" name="id_liquidacion" class="form-control" id="idL" placeholder="Nombre">
                    </div>
                    <div class=row >
                    <div class="form-group">
                      <label for="exampleFormControlInput1">Año</label> 
                      <input type="text" required name="anio" class="form-control" id="idAnio" placeholder="202X">
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlInput1">Mes</label> 
                      <input type="text" required name="mes" class="form-control" id="idMes" placeholder="Enero">
                    </div>
                    </div>
                   
                    <div class="form-group">
                      <label for="exampleFormControlInput1">Dias Trabajados</label> 
                      <input type="text" required name="diast" class="form-control" id="idDiast" placeholder="0">
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlInput1">Sueldo Base</label> 
                      <input type="text" required name="anio" class="form-control" id="idSueldob" placeholder="0">
                    </div>

                    <div class="form-group">
                      <label for="exampleFormControlInput1">Aguinaldo</label>
                      <input type="text" placeholder="0" value="" required name="Aguinaldo" class="form-control" id="idAguinaldo">
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlInput1">Bono Asistencia</label>
                      <input type="text" placeholder="0" value="" required name="basistencia" class="form-control" id="idBonoa">
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlInput1">Bono puntualidad</label>
                      <input type="text" placeholder="0" value="" required name="bpuntualidad" class="form-control" id="idBonop">
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlInput1">Gratificacion</label>
                      <input type="text" placeholder="0" value="" required name="bpuntualidad" class="form-control" id="idGratificacion">
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlInput1">Colacion</label>
                      <input type="text" placeholder="0" value="" required name="colacion" class="form-control" id="idColacion">
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlInput1">Movilizacion</label>
                      <input type="text" placeholder="0" value="" required name="movilizacion" class="form-control" id="idMovilizacion">
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlInput1">Utiles de Aseo</label>
                      <input type="text" placeholder="0" value="" required name="utilesa" class="form-control" id="idUtilesa">
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlInput1">Asignacion familiar</label>
                      <input type="text" placeholder="0" value="" required name="asignacionf" class="form-control" id="idAsigf">
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlInput1">Descuento AFP modelo</label>
                      <input type="text" placeholder="0" value="" required name="asignacionf" class="form-control" id="idDescafpmodelo">
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlInput1">Descuento fonasa</label>
                      <input type="text" placeholder="0" value="" required name="asignacionf" class="form-control" id="idDescfonasa">
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlInput1">Impuesto  unico</label>
                      <input type="text" placeholder="0" value="" required name="impuestou" class="form-control" id="idImpuestou">
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlInput1">Seguro de Cesantia</label>
                      <input type="text" placeholder="0" value="" required name="utilesa" class="form-control" id="idSeguros">
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlInput1">Fecha</label>
                      <input type="text" placeholder="0" value="" required name="utilesa" class="form-control" id="idFecha">
                    </div>
                   
                          <input type="submit" value="Agregar" name="enviar" id="enviar" class="btn btn-outline-success" style="display: true;">
                          <input type="submit" value="Editar" name="editar" id="editar" class="btn btn-outline-warning">
                          <input type="submit" value="Cancelar" name="cancelar" id="cancelar" class="btn btn-outline-danger" style="display: none;">
                  </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
              </div>
            </div>
          </div>
          <?php require_once "js/liquidacion.php"; ?>
          <br>
          <div id="recargar1" class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">liquidaciones</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive" id="dataTa">
                <table class="table table-bordered " id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Año</th>
                      <th>Mes</th>
                      <th>Dias trabajados</th>
                      <th>Sueldo base</th>
                      
                      <th>fecha</th>
                      
                      


                      
                     
                      <th>Pdf</th>
                      <th>Opciones</th>
                      

                      
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Año</th>
                      <th>Mes</th>
                      <th>Dias trabajados</th>
                      <th>Sueldo base</th>
                      <th>fecha</th>
                      <th>Pdf</th>
                      <th>Opciones</th>
                      
                    </tr>
                  
                  <tfoot>
                
                  </tfoot>
                  <tbody>
                  <?php
                    //$matrizLiquidaciones = ControllerLiquidaciones::listarLiquidaciones($_SESSION['iid']);
                    $matrizLiquidaciones = ControllerLiquidaciones::listarinfoliquidacionyempleado($_SESSION['iid']);
                    
                    foreach ($matrizLiquidaciones as $registrol) {
                    ?>
                      <tr>
                      

                        <td><?php echo $registrol["anio"] ?></td>
                        <td><?php echo $registrol["mes"] ?></td>
                        <td><?php echo $registrol["diast"] ?></td>
                        <td><?php echo $registrol["sueldob"] ?></td>
                        <td><?php echo $registrol["fecha"] ?></td>
                        
                       <?php $nombre = $registrol["nombreemp"];
                          $registrol["nombreemp"] = str_replace(" ","_",$registrol["nombreemp"])
                       ?>
                        
                        <td>
                        <!-- pdf liquidacion-->

                        <form method="post" action="./vista/liquidacionpdf.php">
                            <input hidden type="text" name="nsucursal" value="<?php echo $registrol["nsucursal"] ?>"> 
                            <input hidden type="text" name="mes" value="<?php echo $registrol["mes"] ?>"> 
                            <input hidden type="text" name="anio" value="<?php echo $registrol["anio"] ?>"> 
                            <input hidden type="text" name= "nombreemp" value= <?php echo $registrol["nombreemp"] ;?> > 
                            <input hidden type="text" name="rute" value="<?php echo $registrol["rute"] ?>"> 
                            <input hidden type="text" name="afp" value="<?php echo $registrol["afp"] ?>"> 
                            <input hidden type="text" name="sistemasalud" value="<?php echo $registrol["sistemasalud"]  ?>"> 
                            <input hidden type="text" name="aguinaldo" value="<?php echo $registrol["aguinaldo"]?>">
                            <input hidden type="text" name="diast" value="<?php echo $registrol["diast"] ?>"> 
                            <input hidden type="text" name="sueldob" value="<?php echo $registrol["sueldob"] ?>"> 
                            <input hidden type="text" name="bonoa" value="<?php echo $registrol["bonoa"] ?>"> 
                            <input hidden type="text" name="bonop" value="<?php echo $registrol["bonop"] ?>"> 
                            <input hidden type="text" name="gratificacion" value="<?php echo $registrol["gratificacion"] ?>"> 
                            <input hidden type="text" name="colacion" value="<?php echo $registrol["colacion"] ?>"> 
                            <input hidden type="text" name="movilizacion" value="<?php echo $registrol["movilizacion"] ?>"> 
                            <input hidden type="text" name="utilesa" value="<?php echo $registrol["utilesa"] ?>"> 
                            <input hidden type="text" name="asigf" value="<?php echo $registrol["asigf"] ?>"> 
                            <input hidden type="text" name="descafpmodelo" value="<?php echo $registrol["descafpmodelo"] ?>"> 
                            <input hidden type="text" name="descfonasa" value="<?php echo $registrol["descfonasa"] ?>"> 
                            <input hidden type="text" name="impuestou" value="<?php echo $registrol["impuestou"] ?>">
                            <input hidden type="text" name="seguros" value="<?php echo $registrol["seguros"] ?>">
                            <input hidden type="text" name="fecha" value="<?php echo $registrol["fecha"] ?>">
                            
                            <button class="btn btn-outline-info" type="submit">Pdf</button>
                        </form>


                        
                        </td>
                        <td>



                          <div style="text-align: center;">
                            <input style="margin-bottom: 1px;  margin-right:6px;" data-toggle="modal" data-target="#exampleModal" type="submit" onClick="reply_clickModificar(this.id)" value="Editar" name="enviar" id="                 
                                
                            <?php echo 'idlcode:', $registrol["id_liquidacion"],':idlcode aniocode:',  $registrol["anio"], ':aniocode mescode:',  $registrol["mes"], ':mescode diastcode:', $registrol["diast"], ':diastcode sueldobcode:', $registrol["sueldob"], ':sueldobcode aguinaldocode:', $registrol["aguinaldo"], ':aguinaldocode bonoacode:', $registrol["bonoa"], ':bonoacode bonopcode:', $registrol["bonop"], ':bonopcode  gratificacioncode:',$registrol["gratificacion"],':gratificacioncode colacioncode:', $registrol["colacion"],':colacioncode  movilizacioncode:', $registrol["movilizacion"],':movilizacioncode utilesacode:',$registrol['utilesa'],':utilesacode  asigfcode:', $registrol["asigf"],':asigfcode descafpmodelocode:',$registrol["descafpmodelo"],':descafpmodelocode descfonasacode:',$registrol["descfonasa"],':descfonasacode impuestoucode:', $registrol["impuestou"],':impuestoucode seguroscode:', $registrol["seguros"],':seguroscode fechacode:', $registrol["fecha"],':fechacode'?>" class="btn btn-light">
                            
                            <input style="margin-bottom: 1px;  margin-right:6px;" type="submit" onClick="reply_clickBorrar(this.id)" value="Borrar" name="borrar" id="<?php echo $registrol["id_liquidacion"] ?>" class="btn btn-light">
                          </div>
                        </td>
                       
                        
                      </tr>
                    <?php
                    }
                    ?>
                    
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <!-- /.container-fluid -->
      </div>
      <?php require_once "js/liquidacion.php"; ?>
      <?php include('estructura/footer.php'); ?>
    </div>

  </div>
  <?php require('estructura/cerrarSesionyEnlacesjs.php'); ?>
</body>

</html>