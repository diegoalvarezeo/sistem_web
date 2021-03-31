<!--Código CSS-->
<style type="text/css">
  #sanitizacion {
    width: 120px;
    height: 250px;
  }
</style>
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="panel">
    <div class="sidebar-brand-icon rotate-n-30">
      <!--<img src='./extras/esaflogo.png' width="130" height="40">-->
      <!--<i class="fas fa-laugh-wink"> </i>-->
    </div>
    <div class="sidebar-brand-text mx-9">ESAF 
      
    </div>
  </a>
  <hr class="sidebar-divider my-0">
  <br>
  <div class="sidebar-heading"> Menú </div>
  <li class="nav-item
  <?php $url = $_SERVER["REQUEST_URI"];
  if ($url == '/scanservice/panel') {
    echo 'active';
  }
  ?>
  ">
    <a class="nav-link" href="panel">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Panel</span></a>
  </li>
 
  <!-- Nav Item - Clientes -->
  <li class="nav-item
      <?php $url = $_SERVER["REQUEST_URI"];
      if ($url == '/scanservice/clientes') {
        echo 'active';
      }
      ?>
  ">
    <a class="nav-link" href="clientes">
      <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-lines-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm7 1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm2 9a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z" />
      </svg>
      <span>Registro</span></a>
  </li>
 
  <!-- documentos -->
  <li class="nav-item
      <?php $url = $_SERVER["REQUEST_URI"];
      if ($url == '/scanservice/documentos') {
        echo 'active';
      }
      ?>
  ">
    <a class="nav-link" href="documentos">
      <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-building" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022zM6 8.694L1 10.36V15h5V8.694zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15z" />
        <path d="M2 11h1v1H2v-1zm2 0h1v1H4v-1zm-2 2h1v1H2v-1zm2 0h1v1H4v-1zm4-4h1v1H8V9zm2 0h1v1h-1V9zm-2 2h1v1H8v-1zm2 0h1v1h-1v-1zm2-2h1v1h-1V9zm0 2h1v1h-1v-1zM8 7h1v1H8V7zm2 0h1v1h-1V7zm2 0h1v1h-1V7zM8 5h1v1H8V5zm2 0h1v1h-1V5zm2 0h1v1h-1V5zm0-2h1v1h-1V3z" />
      </svg>
      <span>Documentos</span></a>
  </li>
 
  
  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">
  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>
</ul>
<!-- End of Sidebar -->