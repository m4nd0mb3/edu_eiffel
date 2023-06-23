<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('title')</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/estilo/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="/estilo/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="/estilo/plugins/jqvmap/jqvmap.min.css">
   <!-- our project just needs Font Awesome Solid + Brands -->
   <link href="/estilo/your-path-to-fontawesome/css/fontawesome.css" rel="stylesheet">
   <link href="/estilo/your-path-to-fontawesome/css/brands.css" rel="stylesheet">
   <link href="/estilo/your-path-to-fontawesome/css/solid.css" rel="stylesheet">
  <!-- Theme style -->
  <link rel="stylesheet" href="/estilo/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="/estilo/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="/estilo/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="/estilo/plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <style>
    
   #side_bar{
    background-color:#0f3672 ;
    }

   #centro{
    background-image: url('/estilo/dist/img/entrada_caxito-min.jpg')
   }
   
   
footer{
    position: relative;
    width: 100%;
    background: #3586ff;
    min-height: 100px;
    padding: 20px 50px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
   

}

footer .social_icon,
footer .menu{
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 10px 0;
    flex-wrap: wrap;
}

footer .social_icon li,
footer .menu li{
    list-style: none;
}

footer .social_icon li a,
footer .menu li a{
   font-size: 2em;
   color: #fff;
   margin: 0 10px;
   display: inline-block;
   transition: 0.5s;  
   text-decoration: none;
}

footer .social_icon li a:hover,
footer .menu li a:hover{
    transform: translateY(-10px);
 } 

 footer p{
    color: #fff;
    text-align: center;
    margin-top: 15px;
    margin-bottom: 10px;

 }


footer .wave{
    position: absolute;
    top: -100px;
    left: 0;
    width: 100%;
    height: 100px;
    background:  url(/estilo/footer/wave.png);
    background-size: 1000px 100px;
}

footer .wave#wave1{
   z-index: 1000;
   opacity: 1;
   bottom: 0;
   animation: animateWave 4s linear infinite;
}

footer .wave#wave2{
    z-index: 999;
    opacity: 0.5;
    bottom: 10px;
    animation: animateWave_02 4s linear infinite;
 }


 footer .wave#wave3{
    z-index: 1000;
    opacity: 0.2;
    bottom: 15px;
    animation: animateWave_03 3s linear infinite;
 }
 
 footer .wave#wave4{
     z-index: 999;
     opacity: 0.7;
     bottom: 10px;
     animation: animateWave_04 3s linear infinite;
  }
@keyframes animateWave {
    0%
    {
        background-position-x: 1000px;
    }

    100%{
        background-position-x: 0px ;
    }
}

@keyframes animateWave_02 {
    0%
    {
        background-position-x: 0px;
    }

    100%{
        background-position-x: 1000px ;
    }
}

  </style>

</head>
<body class="hold-transition sidebar-mini layout-fixed" style="overflow: hidden;">
<div class="wrapper" >

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light" >
    <!-- Left navbar links -->
    <ul class="navbar-nav" >
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route('secretaria_pedagogica.home') }}" class="nav-link">Pagina Inicial</a>
      </li>

      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Perfil</a>
      </li>
     
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Procurar" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto" >
      <!-- Messages Dropdown Menu -->
      
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notificações</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
         
          <div class="dropdown-divider"></div>
         
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">Todas as notificações</a>
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#" style="color: red;">
          Sair
          <i class="fa-solid fa-right-to-bracket"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notificações</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
         
          <div class="dropdown-divider"></div>
         
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">Todas as notificações</a>
        </div>
      </li>
      
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar  sidebar-dark-primary elevation-4" id="side_bar" >
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link" style=" display: flex; align-items: center; justify-content: center; flex-direction: column; ">
      <span class="brand-text font-weight-light" style="text-align: center;">Liceu Eiffel <br> Ondjiva</span>
    
    </a>
    

    <!-- Sidebar -->
    <div class="sidebar" >
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Antonio Morais</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2" >
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open"  >
            <a href="#" class="nav-link active" >
              <ion-icon name="home"></ion-icon>
              <p >
                Home
                
              </p>
            </a>
           
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link" >
                <i class="fa-solid fa-user-graduate"></i>

              <p>
                Estudantes
                
              </p>
            </a>
            
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link" >
                <i class="fa-solid fa-user-tie"></i>

              <p>
                Professores
                
              </p>
            </a>
            
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link" >
              <ion-icon name="receipt"></ion-icon>
              <p>
                Boletins
                
              </p>
            </a>
            
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fa-solid fa-chalkboard-user"></i>
              <p>
                Planos de Aula
                
              </p>
            </a>
            
          </li>

          
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link" >
              <ion-icon name="newspaper"></ion-icon>
              <p>
                Orientações
                
              </p>
            </a>
                      </li>


        

        

                      <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="fa-solid fa-pen-to-square"></i>

            
                          <p>
                            Solicitações
                            <i class="fas fa-angle-left right"></i>
                          </p>
                        </a>
                        <ul class="nav nav-treeview">
                          <li class="nav-item">
                            <a href="pages/layout/top-nav.html" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Professores</p>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Estudantes</p>
                            </a>
                          </li>
                        
                          
                        </ul>
                      </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <ion-icon name="stats-chart"></ion-icon>

              <p>
                Faltas
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/layout/top-nav.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Professores</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Estudantes</p>
                </a>
              </li>
            
              
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fa-regular fa-bell"></i>

             
              <p>
                
                Notificações
              </p>
            </a>
            
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fa-solid fa-envelope"></i>
             
              <p>
                
                Email Corporativo
              </p>
            </a>
            
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <ion-icon name="construct"  ></ion-icon>
              <p>
                Apoio Tecnico
                
              </p>
            </a>
            
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fa-solid fa-right-to-bracket"></i>

              <p>
                Sair
                
              </p>
            </a>
            
          </li>
          
          
         
          
        
         
          
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" id="centro" ">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Pagina Inicial</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    @yield('content')
  
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="/estilo/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="/estilo/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="/estilo/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="/estilo/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="/estilo/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="/estilo/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="/estilo/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="/estilo/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="/estilo/plugins/moment/moment.min.js"></script>
<script src="/estilo/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="/estilo/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="/estilo/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="/estilo/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<!-- AdminLTE App -->
<script src="/estilo/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="/estilo/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/estilo/dist/js/demo.js"></script>
</body>
</html>
