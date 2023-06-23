<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>@yield('title')</title>

    
  <!-- Vendor CSS Files -->
  <link href="/any/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="/any/vendor/aos/aos.css" rel="stylesheet">
  <link href="/any/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/any/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/any/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/any/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/any/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="/any/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />


  <!-- Template Main CSS File -->
  <link href="/any/css/style.css" rel="stylesheet">

  <link rel="stylesheet" href="/estilo/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="/estilo/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="/estilo/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
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


</head>

<body>
    <div id="topbar" class="fixed-top d-flex align-items-center ">
        <div class="container d-flex align-items-center justify-content-center ">
            <nav id="navbar" class="navbar">
               
              <div class="cta d-none d-md-block">
                <a href="#about" class="scrollto">Perfil<i class="fa-solid fa-user-tie" style="color: #fff;"></i></a>
              </div>
<div class="cta d-none d-md-block">
  <a href="#about" class="scrollto">Chat<i class="fa-solid fa-comments" style="color: #fff
  ;"></i></a>
</div>
<div class="cta d-none d-md-block">
  <a href="#about" class="scrollto">Ajuda<i class="fa-solid fa-circle-info" style="color: #fff;"></i></a>
</div>

<div class="cta d-none d-md-block">
  <a href="#about" class="scrollto"> Sair<i class="fa-solid fa-power-off" style="color: #fff;"></i></a>
</div>
              </nav><!-- .navbar -->          
        </div>
      </div>
    

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center ">
    <div class="container d-flex align-items-center justify-content-center">

      <!-- Uncomment below if you prefer to use an image logo -->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="{{ route('coordenacao.home') }}">Home</a></li>
         
          <li class="dropdown"><a href="#"><span>Profesores</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="/coordenacao/professores/1">Liceu Eiffel de Caxito</a></li>
             
              <li><a href="/coordenacao/professores/2">Liceu Eiffel de Malanje</a></li>
              <li><a href="/coordenacao/professores/3">Liceu Eiffel de Ndalatando</a></li>
              <li><a href="/coordenacao/professores/4">Liceu Eiffel de Ondjiva</a></li>
            </ul>
          </li>

          <li class="dropdown"><a href="#"><span>Estudantes</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li class="dropdown"><a href="#"><span>Liceu Eiffel de Caxito</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">10ª A</a></li>
                  <li><a href="#">10ª B</a></li>
                  <li><a href="#">11ª A</a></li>
                  <li><a href="#">11ª B</a></li>
                  <li><a href="#">12ª A</a></li>
                  <li><a href="#">12ª B</a></li>
                  <li><a href="#">Ausências dos Estudantes</a></li>
                </ul>
              </li>

              <li class="dropdown"><a href="#"><span>Liceu Eiffel de Malanje</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">10ª A</a></li>
                  <li><a href="#">10ª B</a></li>
                  <li><a href="#">11ª A</a></li>
                  <li><a href="#">11ª B</a></li>
                  <li><a href="#">12ª A</a></li>
                  <li><a href="#">12ª B</a></li>
                  <li><a href="#">Ausências dos Estudantes</a></li>

                </ul>
              </li>

              <li class="dropdown"><a href="#"><span>Liceu Eiffel de Ndalatando</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">10ª A</a></li>
                  <li><a href="#">10ª B</a></li>
                  <li><a href="#">11ª A</a></li>
                  <li><a href="#">11ª B</a></li>
                  <li><a href="#">12ª A</a></li>
                  <li><a href="#">12ª B</a></li>
                </ul>
              </li>

              <li class="dropdown"><a href="#"><span>Liceu Eiffel de Ondjiva</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">10ª A</a></li>
                  <li><a href="#">10ª B</a></li>
                  <li><a href="#">11ª A</a></li>
                  <li><a href="#">11ª B</a></li>
                  <li><a href="#">12ª A</a></li>
                  <li><a href="#">12ª B</a></li>
                  <li><a href="#">Ausências dos Estudantes</a></li>

                </ul>
              </li>
              
            </ul>
          </li>

          <li class="dropdown"><a href="#"><span>Preparações de aulas</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
                <li><a href="/coordenacao/plano_enviados/1">Liceu Eiffel de Caxito</a></li>
             
                <li><a href="/coordenacao/plano_enviados/2">Liceu Eiffel de Malanje</a></li>
                <li><a href="/coordenacao/plano_enviados/3">Liceu Eiffel de Ndalatando</a></li>
                <li><a href="/coordenacao/plano_enviados/4">Liceu Eiffel de Ondjiva</a></li>
            </ul>
          </li>

          <li class="dropdown"><a href="#"><span>Orientações de aulas</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
                <li><a href="/coordenacao/orientacao_enviados/1">Liceu Eiffel de Caxito</a></li>
             
                <li><a href="/coordenacao/orientacao_enviados/2">Liceu Eiffel de Malanje</a></li>
                <li><a href="/coordenacao/orientacao_enviados/3">Liceu Eiffel de Ndalatando</a></li>
                <li><a href="/coordenacao/orientacao_enviados/4">Liceu Eiffel de Ondjiva</a></li>
            </ul>
          </li>
          

          <li class="dropdown"><a href="#"><span>Boletins de notas</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li class="dropdown"><a href="#"><span>Liceu Eiffel de Caxito</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="/coordenacao/ver_nota_enviada/1">Enviados pelos professores</a></li>
                  <li><a href="/coordenacao/ver_nota_validada/1">Validados pelos D.P</a></li>
                  <li><a href="#">Cadernetas Trimestrais</a></li>
                  <li><a href="#">Pauta trimestral</a></li>
                
                </ul>
              </li>

              <li class="dropdown"><a href="#"><span>Liceu Eiffel de Malanje</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                    <li><a href="/coordenacao/ver_nota_enviada/2">Enviados pelos professores</a></li>
                    <li><a href="/coordenacao/ver_nota_validada/2">Validados pelos D.P</a></li>
                    <li><a href="#">Cadernetas Trimestrais</a></li>
                    <li><a href="#">Pauta trimestral</a></li>
                </ul>
              </li>

              <li class="dropdown"><a href="#"><span>Liceu Eiffel de Ndalatando</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                    <li><a href="/coordenacao/ver_nota_enviada/3">Enviados pelos professores</a></li>
                    <li><a href="/coordenacao/ver_nota_validada/3">Validados pelos D.P</a></li>
                    <li><a href="#">Cadernetas Trimestrais</a></li>
                    <li><a href="#">Pauta trimestral</a></li>
                </ul>
              </li>

              <li class="dropdown"><a href="#"><span>Liceu Eiffel de Ondjiva</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                    <li><a href="/coordenacao/ver_nota_enviada/4">Enviados pelos professores</a></li>
                    <li><a href="/coordenacao/ver_nota_validada/4">Validados pelos D.P</a></li>
                    <li><a href="#">Cadernetas Trimestrais</a></li>
                    <li><a href="#">Pauta trimestral</a></li>
                </ul>
              </li>
              
            </ul>
          </li>

          <li class="dropdown"><a href="#"><span>Formações</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li class="dropdown"><a href="#"><span>Nova formação</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                    <li><a href="{{ route('coordenacao.enviar_formacao') }}">Liceu Eiffel de Caxito</a></li>
             
                    <li><a href="{{ route('coordenacao.enviar_formacao') }}">Liceu Eiffel de Malanje</a></li>
                    <li><a href="{{ route('coordenacao.enviar_formacao') }}">Liceu Eiffel de Ndalatando</a></li>
                    <li><a href="{{ route('coordenacao.enviar_formacao') }}">Liceu Eiffel de Ondjiva</a></li>
                    <li><a href="{{ route('coordenacao.enviar_formacao') }}">Rede Eiffel</a></li>
                </ul>
              </li>
              <li><a href="{{ route('coordenacao.ver_formacao') }}">Ver Formações enviadas</a></li>
              <li><a href="{{ route('coordenacao.ver_formacao') }}">Ver Formações internas</a></li>
            </ul>
          </li>

          <li class="dropdown"><a href="#"><span>Recursos humanos</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li class="dropdown"><a href="#"><span>Liceu Eiffel de Caxito</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="/coordenacao/directores/1">Directores</a></li>
                  <li><a href="#">Secretário</a></li>
                  <li><a href="#">Funcionarios</a></li>
                  <li><a href="#">Ausências de professorees</a></li>
                  <li><a href="#">Ausências de Funcionarios</a></li>
                  <li><a href="#">Ausências de secretários</a></li>
                </ul>
              </li>

              <li class="dropdown"><a href="#"><span>Liceu Eiffel de Malanje</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="/coordenacao/directores/2">Directores</a></li>
                  <li><a href="#">Secretário</a></li>
                  <li><a href="#">Funcionarios</a></li>
                  <li><a href="#">Ausências de professorees</a></li>
                  <li><a href="#">Ausências de Funcionarios</a></li>
                  <li><a href="#">Ausências de secretários</a></li>
                </ul>
              </li>
             
              <li class="dropdown"><a href="#"><span>Liceu Eiffel de Ndalatando</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="/coordenacao/directores/3">Directores</a></li>
                  <li><a href="#">Secretário</a></li>
                  <li><a href="#">Funcionarios</a></li>
                  <li><a href="#">Ausências de professorees</a></li>
                  <li><a href="#">Ausências de Funcionarios</a></li>
                  <li><a href="#">Ausências de secretários</a></li>
                </ul>
              </li>

              <li class="dropdown"><a href="#"><span>Liceu Eiffel de Ondjiva</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="/coordenacao/directores/4">Directores</a></li>
                  <li><a href="#">Secretário</a></li>
                  <li><a href="#">Funcionarios</a></li>
                  <li><a href="#">Ausências de professorees</a></li>
                  <li><a href="#">Ausências de Funcionarios</a></li>
                  <li><a href="#">Ausências de secretários</a></li>
                </ul>
              </li>
            </ul>
          </li>

          <li class="dropdown"><a href="#"><span>Ponto Biometrico</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li class="dropdown"><a href="#"><span>Presenças no Liceu</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Liceu Eiffel de Caxito</a></li>
                  <li><a href="#">Liceu Eiffel de Malanje</a></li>
                  <li><a href="#">Liceu Eiffel de Ndalatando</a></li>
                  <li><a href="#">Liceu Eiffel de Ondjiva</a></li>
                </ul>
              </li>

            </ul>
          </li>



          <li class="dropdown"><a href="#"><span>Geral</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li class="dropdown"><a href="#"><span>Site da Rede Eiffel</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Mensagens</a></li>
                  <li><a href="#">Número de inscritos</a></li>
                  <li><a href="#">Número de visitantes</a></li>
                  <li><a href="#">Graficos</a></li>
                </ul>
              </li>
            
            </ul>
          </li>

          <li class="dropdown"><a href="#"><span>Apoio técnico</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li class="dropdown"><a href="#"><span>Solicitar ajuda</span> </a>
                <li class="dropdown"><a href="#"><span>Solicitações dos estudantes</span> </a>
                <li class="dropdown"><a href="#"><span>Solicitações dos professores</span> </a>
                    <li class="dropdown"><a href="#"><span>Solicitações dos secretários</span> </a>
                        <li class="dropdown"><a href="#"><span>Solicitações dos directores</span> </a>

             
            
            </ul>
          </li>

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    

    </div>
  </header><!-- End Header -->
  <br>
  

  <div  id="centro" style=" 
            background-image: url('/estilo/dist/img/ondjivaSlide-min.png'); position: relative;">
 
     @yield('content')
    

     </div>

       <!-- Vendor JS Files -->
  <script src="/any/vendor/aos/aos.js"></script>
  <script src="/any/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/any/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="/any/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="/any/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="/any/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="/any/js/main.js"></script>


  
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