<?php require('backend/redirect.php'); ?>
<!DOCTYPE html>
<html lang="es">
<?php require('estructura/head.php'); 
$_SESSION['iid'] = $_POST["id"]  ;

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
            <h1 class="h3 mb-0 text-gray-800">Contratos de Don(a): <?php echo $_POST["nombreemp"]?></h1>
          </div>
          <input hidden type="text" name="" value=" <?php echo $_POST["id"]; ?>" class="custom-file-input" id="idcliente">
          <p class="mb-4">Aquí podrá agregar y editar un contrato</a>.</p>
          <?php //($_SESSION['iid']) ?>
          <button type="button" id="IDBotonModalAgregar" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Agregar nuevo contrato
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
                  contrato agregado con éxito
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
                  Contrato editado
                </div>
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
                  <h5 class="modal-title" id="textoModal">Nuevo Contrato</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <!--  Inicio Modal Body -->
                  <form id="formulario" onsubmit="return false" method="POST">
                    <div class="form-group" style="display: none">
                      <!--  ID solo para uso BD -->
                      <input type="text" name="idContrato" class="form-control" id="idC" placeholder="Nombre">
                    </div>
                    
                    <div class="form-group">
                      <label for="exampleFormControlInput1">Ciudad residencia</label>
                      <input type="text" required name="ciudadr" class="form-control" id="idCiudadresidencia" placeholder="ciudad de residencia">
                    </div>

                    <div class="form-group">
                      <label for="exampleFormControlInput1">Inicio de contrato</label>
                      <input type="text" placeholder="Nacionalidad" value="" required name="icontrato" class="form-control" id="idIcontrato">
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlInput1">Nacionalidad</label>
                      <input type="text" placeholder="Nacionalidad" value="" required name="Nacionalidad" class="form-control" id="idNacionalidad">
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlInput1">  Se desempeña en</label>
                      <input type="text" placeholder="se desempeña en" value="" required name="desempena" class="form-control" id="idDesempenado">
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlInput1">Ubicacion</label>
                      <input type="text" placeholder="Ubicacion" value="" required name="ubicacion" class="form-control" id="idUbicacione">
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlInput1">Cargo</label>
                      <input type="text" placeholder="Cargo" value="" required name="cargo" class="form-control" id="idCargo">
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlInput1">Fin de contrato</label>
                      <input type="text" placeholder="Fin de contrato" value="" required name="fcontrato" class="form-control" id="idFcontrato">
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
          <?php require_once "js/contratos.php"; ?>
          <br>
          <div id="recargar1" class="card shadow mb-4 reload">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Contratos </h6>
            </div>
            <div class="card-body">
              <div class="table-responsive" id="dataTa">
                <table class="table table-bordered " id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Ciudad residencia</th>
                      <th>Inicio de contrato</th>
                      
                      
                      <th>Cargo</th>
                      <th>Fin de contrato</th>
                      <th>Liquidacion</th>
                      <th>Acciones</th>
                      
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Ciudad residencia</th>
                      <th>Inicio de contrato</th>
                      
                      
                      <th>Cargo</th>
                      <th>Fin de contrato</th>
                      <th>Liquidacion</th>
                      <th>Acciones</th>
                      
                    </tr>
                  
                  <tfoot>
                
                  </tfoot>
                  <tbody>
                  <?php
                    $matrizContratos = ControllerContratos::listarinfocontratosyempleado($_SESSION['iid']);
                    foreach ($matrizContratos as $registroc) {
                    ?>
                      <tr>
                        <td><?php echo $registroc["ciudadresidencia"] ?></td>
                        <td><?php echo $registroc["inicioc"] ?></td>
                     
                        
                        <td><?php echo $registroc["cargo"] ?></td>
                        <td><?php echo $registroc["finc"] ?></td>
                         
                        <?php 
                              $registroc["nombreemp"] = str_replace(" ","_",$registroc["nombreemp"]);
                              $registroc["nacionalidad"] = str_replace(" ","_",$registroc["nacionalidad"]);
                              $registroc["ubicacione"] = str_replace(" ","_",$registroc["ubicacione"]);
                              $registroc["profesion"] = str_replace(" ","_",$registroc["profesion"]);
                              $registroc["desempenado"] = str_replace(" ","_",$registroc["desempenado"]);
                              $registroc["cargo"] = str_replace(" ","_",$registroc["cargo"]);
                              $registroc["finc"] = str_replace(" ","_",$registroc["finc"]);
                              
                       ?>
                        <td>
                        <form method="post" action="./vista/contratopdf.php">

                            <input hidden type="text" name="nombreemp" value="<?php echo $registroc["nombreemp"] ?>"> 
                            <input hidden type="text" name="rute" value="<?php echo $registroc["rute"] ?>"> 
                            <input hidden type="text" name="nacionalidad" value="<?php echo $registroc["nacionalidad"] ?>"> 
                            <input hidden type="text" name="ubicacione" value="<?php echo $registroc["ubicacione"] ?>"> 
                            <input hidden type="text" name="profesion" value="<?php echo $registroc["profesion"] ?>"> 
                            <input hidden type="text" name="desempenado" value="<?php echo $registroc["desempenado"] ?>"> 
                            <input hidden type="text" name="cargo" value="<?php echo $registroc["cargo"] ?>"> 
                            <input hidden type="text" name="finc" value="<?php echo $registroc["finc"] ?>"> 
                        
                            
                            
                            
                            
                            <button class="btn btn-outline-info" type="submit">Pdf</button>
                        </form>
                        </td>
                        <td>

                          <div style="text-align: center;">
                            <input style="margin-bottom: 1px;  margin-right:6px;" data-toggle="modal" data-target="#exampleModal" type="submit" onClick="reply_clickModificar(this.id)" value="Editar" name="enviar" id="                 
                                <?php echo 'idcontratocode:', $registroc["id_contrato"], ':idcontratocode ciudadresidenciacode:',  $registroc["ciudadresidencia"], ':ciudadresidenciacode inicioccode:',  $registroc["inicioc"], ':inicioccode nacionalidadcode:', $registroc["nacionalidad"], ':nacionalidadcode desempenadocode:', $registroc["desempenado"], ':desempenadocode ubicacionecode:', $registroc["ubicacione"], ':ubicacionecode cargocode:', $registroc["cargo"], ':cargocode finccode:',$registroc["finc"],':finccode:' ?>" class="btn btn-light">
                            <input style="margin-bottom: 1px;  margin-right:6px;" type="submit" onClick="reply_clickBorrar(this.id)" value="Borrar" name="borrar" id="<?php echo $registroc["id_contrato"] ?>" class="btn btn-light">
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
      <?php include('estructura/footer.php'); ?>
    </div>
  </div>
  <?php require('estructura/cerrarSesionyEnlacesjs.php'); ?>
</body>

</html>