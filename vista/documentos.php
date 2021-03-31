<?php require('backend/redirect.php'); ?>
<!DOCTYPE html>
<html lang="es">
<?php require('estructura/head.php'); ?>

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
            <h1 class="h3 mb-0 text-gray-800">Empleados</h1>
          </div>
          
          
         
          <br>
          <div id="recargar1" class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Listado de Empleados registrados</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive" id="dataTa">
                <table class="table table-bordered " id="dataTable" width="100%"  cellspacing="0">
                  <thead>
                    <tr>
                      <th>Nombre</th>
                      <th>Rut</th>
                      <th>Correo</th>
                      <th>Teléfono</th>
                      
                      
                     
                      <th>Documentos</th>
                      <th>Documentos</th>
                      
                      
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Nombre</th>
                      <th>Rut</th>
                      <th>Correo</th>
                      <th>Teléfono</th>
                      
                      <th>Documentos</th>
                      <th>Documentos</th>
                      
                      
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php
                    $matrizClientes = ControllerClientes::listarClientes();
                    foreach ($matrizClientes as $registro) {
                    ?>
                      <tr>
                        <td><?php echo $registro["nombreemp"] ?></td>
                        <td><?php echo $registro["rute"] ?></td>
                        <td><?php echo $registro["correo"] ?></td>
                       
                        <td><?php echo $registro["telefono"] ?></td>
                        
                       
                         
                        <td>
                           
                           
                            
                                <div style="text-align: center">
                                  <!-- FORMULARIO POST ENVIO ID -->
                                    <form action="contratos" method="post">
                                      <input hidden type="text" name="id" value="<?php echo $registro["id"] ?>"><br>
                                      <input hidden type="text" name="nombreemp" value="<?php echo $registro["nombreemp"] ?>"> 
                                      <input style="margin-bottom: 0.2px;  margin-right:1px; margin-top:-26px" value="Contratos" type="submit" class=" btn btn-outline-primary">
                                    </form>
                                </div> 
                        </td>
                        <td> 
                                <div style="text-align: center">
                                <!-- FORMULARIO POST ENVIO ID -->   
                                    <form action="liquidaciones" method="post">
                                      <input hidden type="text" name="id" value="<?php echo $registro["id"] ?>"><br>
                                      <input hidden type="text" name="nombreemp" value="<?php echo $registro["nombreemp"] ?>"> 
                                      <input style="margin-bottom: 0.2px;  margin-right:1px; margin-top:-26px" value="Liquidaciones" type="submit" class=" btn btn-outline-primary">
                                    </form>
                                  
                                </div>
                            
                             
                          
                        </td>
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