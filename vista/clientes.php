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
            <h1 class="h3 mb-0 text-gray-800">Clientes</h1>
          </div>
          <p class="mb-4">Aquí podrá agregar y editar Empleados, de cualquier empresa</a>.</p>
          <button type="button" id="IDBotonModalAgregar" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Nuevo Empleado
          </button>
          
          
          <!-- Inicio Modal -->
          <div class="modal fade" id="" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">Notificación</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  Empleado agregado con éxito
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
                  Cliente editado con éxito
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
                  <h5 class="modal-title" id="textoModal">Nuevo Empleado</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <!--  Inicio Modal Body -->
                  <form id="formulario" onsubmit="return false" method="POST">
                    <div class="form-group" style="display: none">
                      <!--  ID solo para uso BD -->
                      <input type="text" name="id" class="form-control" id="idId" placeholder="Nombre">
                    </div>
                    
                    <div class="form-group">
                      <label for="exampleFormControlInput1">Nombre Empleado</label>
                      <input type="text" required name="nombreemp" class="form-control" id="idNombreEmp" placeholder="nombre">
                    </div>

                    <div class="form-group">
                      <label for="exampleFormControlInput1">Rut </label>
                      <input type="text" placeholder="Ingrese RUT"  required oninput="checkRut(this)" name="rute" class="form-control" id="idRut" value="">
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlInput1">Ciudad</label>
                      <input type="text" required name="direccion" class="form-control" id="idDireccion" placeholder=" ">
                    </div>
                    
                    
                    <div class="form-group">
                      <label for="exampleFormControlInput1">Profesión</label>
                      <input type="text"  name="profesion" class="form-control" id="idProfesion" placeholder="Profesión">
                    </div>
                    <div class="form-group">

                      <label for="exampleFormControlInput1">Correo electrónico</label>
                      <input type="text" name="correo" class="form-control" id="idCorreo" placeholder="nombre@ejemplo.com">
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlInput1">Teléfono</label>
                      <input type="text" name="telefono" class="form-control" id="idTelefono" placeholder="+569 88888888">
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlTnput1">AFP</label>
                      <input type="text" class="form-control" id="idAfp"  name="afp">
                    </div>  
                    <div class="form-group">

                      <label for="exampleFormControlInput1">Sistema de salud</label>
                      <input type="text" name="sistemasalud" class="form-control" id="idSistemasalud" placeholder="sistema de salud">
                    </div>
                    <div class="form-group">

                        <label for="exampleFormControlInput1">Numero de sucursal</label>
                        <input type="text" name="sistemasalud" class="form-control" id="idNsucursal" placeholder="SERVIU-#">
                    </div>
                    <div class="form-group">

                      <label for="exampleFormControlInput1">Contraseña</label>
                      <input type="password" name="contrasena" class="form-control" id="idContrasena" placeholder="contraseña">
                    </div>
                    
                    <div class="form-group">

                    <select id="idRol" class="form-control" name="idrol">
                    
                    <option value="">Seleccionar</option> 
                    <?php
                    $matrizRoles = ControllerRoles::listarRoles();
                    foreach ($matrizRoles as $registro) {
                    ?>
                      <option value="<?php echo $registro["id_rol"] ?>">
                        <?php echo $registro["rol"];
                        echo 'Seleccione el rol';
                        echo $registro["rol"]; ?> </option>
                    <?php
                    }
                    ?>
                   </select>
                   
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
          <?php require_once "js/cliente.php"; ?>
          <br>
          <div id="recargar1" class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Listado de Empleados registrados</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive" id="dataTa">
                <table class="table table-bordered " id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Nombre</th>
                      
                      <th>Ciudad</th>
                      
                      <th>Correo</th>
                      <th>Telefono</th>
                      
                      <th>Acciones</th>
                      
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Nombre</th>
                      
                      <th>Ciudad</th>
                      
                      <th>Correo</th>
                      <th>Telefono</th>
                      
                      <th>Acciones</th>
                      
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php
                    $matrizClientes = ControllerClientes::listarClientes();
                    foreach ($matrizClientes as $registro) {
                    ?>
                      <tr>
                        <td><?php echo $registro["nombreemp"] ?></td>
                        
                        <td><?php echo $registro["direccion"] ?></td>
                        
                        <td><?php echo $registro["correo"] ?></td>
                        <td><?php echo $registro["telefono"] ?></td>
                        
                        <td>
                           <div style="text-align: center;">
                              <input style="margin-bottom: 1px;  margin-right:6px;" data-toggle="modal" data-target="#exampleModal" type="submit" onClick="reply_clickModificar(this.id)" value="Editar" name="enviar" id="                 
                                  <?php echo 'idcode:', $registro["id"], ':idcode nombreEmpcode:',  $registro["nombreemp"], ':nombreEmpcode rutcode:',  $registro["rute"], ':rutcode direccioncode:', $registro["direccion"], ':direccioncode profesioncode:', $registro["profesion"], ':profesioncode correocode:', $registro["correo"], ':correocode telefonocode:', $registro["telefono"], ':telefonocode afpcode:', $registro["afp"] ,':afpcode  sistemasaludcode:', $registro["sistemasalud"],':sistemasaludcode nsucursalcode:',$registro["nsucursal"],':nsucursalcode contraseñacode:', $registro["contrasena"],':contraseñacode rolcode:',$registo['idrol'],':rolcode'?>" class="btn btn-light">
                              <input style="margin-bottom: 4px;  margin-right:6px;" type="submit" onClick="reply_clickBorrar(this.id)" value="Borrar" name="borrar" id="<?php echo $registro["id"] ?>" class="btn btn-light">
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