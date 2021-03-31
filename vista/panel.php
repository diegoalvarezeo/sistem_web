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
                
                <!-- Content Row -->
                <div class="row">
                  <!-- Earnings (Monthly) Card Example -->
                  
                    
                  
                  <!-- Tareas P -->
                  <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                      <div class="card-body">
                        <div class="row no-gutters align-items-center">
                          <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Numero de Empleados Registrados</div>
                            <?php
                            $matriz = ControllerClientes::listarClientes();
                            $numeroClientes = count($matriz)-1;
                            ?>
                            <div class="h5 mb-0 font-weight-bold text-gray-800 count" data-stop="<?php echo $numeroClientes; ?>"><?php echo $numeroClientes; ?></div>
                          </div>
                          <div class="col-auto">
                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                          </div>
                        </div>
                      </div>
                    
                    
                    </div>
                    
                    
                  </div>

                  
            <div class="card-header py-3">
            
              <h6 class="m-0 font-weight-bold text-primary"></h6>
            </div>
            <br>
          
            
          
            
          

         
          
           
              
            
            
            
              
             





              
             
            </div>
          </div>
          
         
         
         
          <?php require('estructura/cerrarSesionyEnlacesjs.php'); ?>
          <script src="vendor/chart.js/Chart.min.js"></script>
          <script>
            $('.count').each(function() {
              var $this = $(this);
              jQuery({
                Counter: 0
              }).animate({
                Counter: $this.attr('data-stop')
              }, {
                duration: 1000,
                easing: 'swing',
                step: function(now) {
                  $this.text(Math.ceil(now));
                }
              });
            });
          </script>
           <div style="text-align: center">
            
             <img src='./extras/esaflogo.png'alt=""  width="180" height="80">
           </div> 
        </div>  
        

          
      </body>
      <?php include('estructura/footer.php'); ?>

      </html>