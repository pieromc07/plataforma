<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('titulo')</title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/adminlte/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/adminlte/dist/css/adminlte.min.css">
  <link rel="stylesheet" type="text/css" href="/adminlte/css/estilos.css">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light"  >

<div class="row" >
      <!-- Left navbar links -->
      <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
     
    
      <li class="nav-item" >
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <form action="{{route('salir')}}" method="POST" class="ml-auto">
        @csrf
        <button class="btn-danger btn-block" type="submit"><i class="fa fa-power-off"></i></button>
       </form>
    </ul>
</div>    

    <!-- Right navbar links -->
  </nav>
  <!-- /.navbar -->
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4"  >
    <!-- Brand Logo -->
    <a href="" class="brand-link">
      <img src="/adminlte/img/logoPro.png" alt="AdminLTE Logo" class="brand-image  " style="">
      <span class="brand-text font-weight-light" >S. DOCUMENTARIO</span>
    </a>
    <!-- Sidebar -->
    
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/img/login.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <p style="color: white"> {{$alumno->apellido}} {{$alumno->nombre}} <br> Alumno </p>  
        </div>
      </div>
     
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
                <a href="{{route('alumno.edit',$alumno->idalumno)}}" class="nav-link">
                  <i class="nav-icon fas fa-user-edit"></i>
                  <p>
                    Editar Perfil
                  </p>
                </a>
              </li> 
        <li class="nav-item">
            <a href="#" class="nav-link">
            
              <i class="nav-icon fas fa-book"></i>
              <p>
               Tramite 
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('estado1',$alumno->idalumno)}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Nuevo Tramite </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('mistramites',$alumno->idalumno)}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Mis Tramites</p>
                </a>
              </li>
            </ul>
          </li>

         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <h1>Universidad Nacional de Trujillo</h1>
      <img src="/img/principal.jpg" style="width: 1300px;height:600px;" alt="">
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 <br>
  <footer class="container fluid">
   <div class="row">
     <br><br>
    <strong>Copyright &copy; 2021 CARLOS HARO POLO</strong>_Reservados todos los derechos.
  </div>
  <br>
</footer>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<!-- jQuery -->
<script src="/adminlte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="/adminlte/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/adminlte/dist/js/demo.js"></script>
@yield('script')
</body>
</html>
