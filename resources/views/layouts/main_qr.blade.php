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
<body class="hold-transition sidebar-mini layout-fixed" >
<div class="wrapper" >

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light" >
    <!-- Left navbar links -->
    <ul class="navbar-nav" >
      
     
    </ul>

    <!-- SEARCH FORM -->
   

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto" >
      <!-- Messages Dropdown Menu -->
      
      <!-- Notifications Dropdown Menu -->
     
     
      
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar  sidebar-dark-primary elevation-4" id="side_bar" >
    <!-- Brand Logo -->
    
    

    <!-- Sidebar -->
    <div class="sidebar" >
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
        </div>
      </div>

     
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
