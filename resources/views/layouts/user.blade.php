<!DOCTYPE html>
<html l0ang="es">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Instituto Distrital de Ciencia, Biotecnología e Innovación en Salud - IDCBIS">
  <meta name="author" content="Hélber Fabián Toro - helber.toro@gmail.com">
  <title>Instituto Distrital de Ciencia, Biotecnología e Innovación en Salud - IDCBIS</title>
  
  <!-- Custom fonts for this template-->
  <link href="{!! asset('vendor/fontawesome-free/css/all.min.css') !!}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  
  <!-- Custom styles for this template-->
  <link href="{!! asset('vendor/sb-admin/sb-admin-2.min.css') !!}" rel="stylesheet">
  <link href="{!! asset('css/styles.css') !!}" rel="stylesheet">

  @section('css')
  @show
</head>

<body id="page-top">
  
  <!-- Page Wrapper -->
  <div id="wrapper">
    
    <!-- Sidebar -->
    <ul class="navbar-nav bg-color-blue-gradient sidebar sidebar-dark accordion" id="accordionSidebar">
      
      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-file-medical"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Pedidos</div>
      </a>
      
      <!-- Divider -->
      <hr class="sidebar-divider my-0">
      
      <!-- Divider -->
      <hr class="sidebar-divider">
      
      <!-- Heading -->
      <!-- <div class="sidebar-heading">
        Pedidios
      </div> -->
      
      <li class="nav-item">
        <a class="nav-link" href="{!! route('home') !!}">
          <i class="fas fa-plus-circle"></i>
          <span>Nuevo pedido</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{!! route('userOrderHistory') !!}">
          <i class="fas fa-history"></i>
          <span>Historial</span>
        </a>
      </li>
      
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">
      
      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>
      
    </ul>
    <!-- End of Sidebar -->
    
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
      
      <!-- Main Content -->
      <div id="content">
        
        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
          
          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <img class="logo-idcbis-main" src="{!! asset('img/logo-idcbis.png') !!}" alt="">
          
          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">
            
            <div class="topbar-divider d-none d-sm-block"></div>
            
            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{!! \Auth::user()->name !!}</span>
                <img class="img-profile rounded-circle" src="https://source.unsplash.com/random/60x60">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Cerrar sesión
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
              </div>
            </li>
            
          </ul>
          
        </nav>
        <!-- End of Topbar -->
        
        <!-- Begin Page Content -->
        <div class="container-fluid">

          @if (session('success'))
            <div class="alert alert-success">
              {{ session('success') }}
            </div>
          @endif

          @if (session('error'))
            <div class="alert alert-danger">
              {{ session('error') }}
            </div>
          @endif
          
          @section('content')
          @show
          
        </div>
        <!-- /.container-fluid -->
        
      </div>
      <!-- End of Main Content -->
      
    </div>
    <!-- End of Content Wrapper -->
    
  </div>
  <!-- End of Page Wrapper -->
  
  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
  
  <!-- Bootstrap core JavaScript-->
  <script src="{!! asset('vendor/jquery/jquery.min.js') !!}"></script>
  <script src="{!! asset('vendor/bootstrap/js/bootstrap.bundle.min.js') !!}"></script>
  
  <!-- Core plugin JavaScript-->
  <script src="{!! asset('vendor/jquery-easing/jquery.easing.min.js') !!}"></script>
  
  <!-- Custom scripts for all pages-->
  <script src="{!! asset('vendor/sb-admin/sb-admin-2.min.js') !!}"></script>

  @section('js')
  @show
  
</body>

</html>