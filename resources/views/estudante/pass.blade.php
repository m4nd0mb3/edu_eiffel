<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Rede Eiffel</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="/caxito/inscricao/img/logo.jpg" rel="icon">
  <link href="/caxito/inscricao/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/caxito/inscricao/vendor/aos/aos.css" rel="stylesheet">
  <link href="/caxito/inscricao/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/caxito/inscricao/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/caxito/inscricao/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/caxito/inscricao/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/caxito/inscricao/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link href="/caxito/inscricao/css/custom.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/caxito/inscricao/css/style.css" rel="stylesheet">
  <link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
  rel="stylesheet"
/>
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.5.0/mdb.min.css"
  rel="stylesheet"
/>

 
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
 
 
  <main id="main">


  
<div class="container-fluid">

  <div class="row">
    @if(session ('msg'))

    <p class = "msg">{{ session ('msg') }} clique aqui para baixar o comprovativon <a href=""> clique aqui para baixar o recibo da Inscrição</a></p>

    @endif
  </div>

</div>
 
  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container">

      <div class="section-title">
        <h2>Actualize os seus dados da conta</h2>
      </div>

      <div class="row" data-aos="fade-in">

      

        <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
          <form  action="{{ route('estudante_ondjiva.changepasswords') }}" method = "post"  class="form" enctype="multipart/form-data">
          
            {{csrf_field()}}
          
            <div class="row">
              
               <div class="form-group col-md-6">
                <label for="name">Email</label>
                <input type="email"  readonly name="name" class="form-control" id="name" value=" {{$estudante->email}}" >
              </div>
              <div class="form-group col-md-6">
                <label for="second_name">Senha</label>
                <input type="text" name="old_password" class="form-control" id="second_name" >
              </div>
              
            

              <div class="form-group col-md-6">
                <label for="password">Nova Senha</label>
                <input type="password" name="new_password"  class="form-control" id="name"  value=" ">
              </div>

              <div class="form-group col-md-6">
                <label for="password">Confirmação de Senha</label>
                <input type="password" name="confirm_password"  class="form-control" id="name"  value=" ">
              </div>
             
             
           
          
              <div class="text-center"><button type="submit">Finalizar</button></div>
            </form>
        </div>

      </div>

    </div>
  </section><!-- End Contact Section -->
  </main><!-- End #main -->
 

</main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
  
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="/caxito/inscricao/vendor/aos/aos.js"></script>
  <script src="/caxito/inscricao/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/caxito/inscricao/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="/caxito/inscricao/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="/caxito/inscricao/vendor/php-email-form/validate.js"></script>
  <script src="/caxito/inscricao/vendor/purecounter/purecounter.js"></script>
  <script src="/caxito/inscricao/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="/caxito/inscricao/vendor/typed.js/typed.min.js"></script>
  <script src="/caxito/inscricao/vendor/waypoints/noframework.waypoints.js"></script>

  <!-- Template Main JS File -->
  <script src="/caxito/inscricao/js/main.js"></script>
  <script src="/caxito/inscricao/js/mdb.min.js"></script>
  <!-- MDB -->


</body>

</html>