<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Liceu Eiffel Ndalatando</title>
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



  <!-- Template Main CSS File -->
  <link href="/caxito/inscricao/css/style.css" rel="stylesheet">

  <link href="/caxito/inscricao/css/custom.css" rel="stylesheet">
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

  <p class = "msg">{{ session ('msg') }} clique aqui para baixar o comprovativon <a href="/pdf_ndalatando"> clique aqui para baixar o recibo da Inscrição</a></p>

  @endif
</div>

</div>
<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
  <div class="container">

    <div class="section-title">
      <h2>Digite os seus dados Pessoais</h2>
    </div>

    <div class="row" data-aos="fade-in">

    

      <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
        <form  action="/form_ndalatando" method = "post"  class="form" enctype="multipart/form-data">
        
          {{csrf_field()}}
        
          <div class="row">
            <div class="form-group col-md-6">
              <label for="second_name">Apelido</label>
              <input type="text" name="second_name" class="form-control" id="second_name" >
            </div>
            
             <div class="form-group col-md-6">
              <label for="name">Nome</label>
              <input type="text" name="name" class="form-control" id="name" >
            </div>
            <div class="form-group col-md-6">
              <label for="email">E-mail</label>
              <input type="email" name="email" class="form-control" id="name" >
            </div>
            <div class="form-group col-md-6">
              <label for="genero">Sexo</label>
            <select name="genero" id="" class="form-control "  style="width: 100%;">
                              <option value="1">Masculino</option>
                              <option value="2">Femenino</option>
                             
            </select>
            </div>
            <div class="form-group col-md-6">
              <label for="idade">Idade</label>
            <select name="idade" id="" class="form-control "  style="width: 100%;">
                              <option value="14">14</option>
                              <option value="15">15</option>
                              <option value="16">16</option>
                              <option value="17">17</option>
                             
            </select>
            </div>
         

          <div class="form-group col-md-6">
            <label for="tipo_doc">Tipo de Documento</label>
          <select name="tipo_doc" id="" class="form-control "  style="width: 100%;">
                            <option value="1">Bilhete de Identidade</option>
                            <option value="2">Cedula Pessoal</option>
                            <option value="3">Passaporte</option>
                           
          </select>
          </div>
        </div>
          <div class="form-group">
              <label for="bi">Número do Documento</label>
              <input type="text" class="form-control" name="bi" id="subject" >
            </div>
            
          <div class="form-group">
            <label for="data_emisao">Data de Emissão</label>
              <input id="data" name="data_emisao" class="date-picker form-control" placeholder="dd-mm-yyyy" type="text" type="text" onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'" onblur="this.type='text'" onmouseout="timeFunctionLong(this)">
                        <script>
                          function timeFunctionLong(input) {
                            setTimeout(function() {
                              input.type = 'text';
                            }, 60000);
                          }
                        </script>
          </div>
          
        
         
          
           <div class="form-group">
            <label for="data_caducidade">Data de Caducidade</label>
              <input id="data" name="data_caducidade" class="date-picker form-control" placeholder="dd-mm-yyyy" type="text"  type="text" onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'" onblur="this.type='text'" onmouseout="timeFunctionLong(this)">
                        <script>
                          function timeFunctionLong(input) {
                            setTimeout(function() {
                              input.type = 'text';
                            }, 60000);
                          }
                        </script>
          </div>
          
        
          <div class="form-group">
            <label for="local_nascimento">Local de Nascimento</label>
            <input type="text" class="form-control" name="local_nascimento" id="subject" >
          </div>
          
          <div class="form-group">
            <label for="provincia">Provincia</label>
            <input type="text" class="form-control" name="provincia" id="subject" >
          </div>
          
          <div class="form-group">
            <label for="municipio">Municipio</label>
            <input type="text" class="form-control" name="municipio" id="subject" >
          </div>
          
          <div class="form-group">
            <label for="nome_pai">Nome do Pai</label>
            <input type="text" class="form-control" name="nome_pai" id="subject" >
          </div>
          
          <div class="form-group">
            <label for="nome_mae">Nome da Mãe</label>
            <input type="text" class="form-control" name="nome_mae" id="subject" >
          </div>
          
          <div class="form-group">
            <label for="nome_encarregado">Nome do Encarregado</label>
            <input type="text" class="form-control" name="nome_encarregado" id="subject" >
          </div>
          
          <div class="form-group">
            <label for="endereco_engarregado">Endereço do Encarregado</label>
            <input type="text" class="form-control" name="endereco_engarregado" id="subject" >
          </div>
          
          <div class="form-group">
            <label for="endereco_engarregado">Endereço electronico do encarregado</label>
            <input type="text" class="form-control" name="endereco_engarregado" id="subject" >
          </div>
          
          <div class="form-group">
              <label for="email_encarregado">E-mail do encarregado</label>
              <input type="email" class="form-control" name="email_encarregado" id="subject" >
            </div>

          <div class="form-group">
            <label for="telefone_encarregado">Telefone do encarregado</label>
            <input type="text" class="form-control" name="telefone_encarregado" id="subject" >
          </div>
          
          <div class="form-group">
            <label for="morada">Residência do aluno</label>
            <input type="text" class="form-control" name="morada" id="subject" >
          </div>
          
            <div class="form-group">
            <label for="rua">Rua</label>
            <input type="text" class="form-control" name="rua" id="subject" >
          </div>
          
            <div class="form-group">
            <label for="telefone">Telefone pessoal do aluno</label>
            <input type="text" class="form-control" name="telefone" id="subject" >
          </div>
          
          
          
            <div class="form-group">
            <label for="name">Ano de conclusão</label>
            <input type="text" class="form-control" name="subject" id="subject" >
          </div>
          
            <div class="form-group">
            <label for="religiao">Religião</label>
            <input type="text" class="form-control" name="religiao" id="subject" >
          </div>
          <div class="form-group ">
              <label for="deficiencia">É portador de deficiência?</label>
            <select name="deficiencia" id="" class="form-control "  style="width: 100%;">
              <option value="1">Não</option>
              <option value="2">Sim</option>
                             
            </select>
            </div>

            <div class="form-group">
              <label for="grupo_sanguineo">Grupo Sangueneo</label>
              <input type="text" class="form-control" name="grupo_sanguineo" id="subject" >
            </div>
            <div class="form-group ">
              <label for="alergia">Alergia</label>
            <select name="alergia" id="" class="form-control "  style="width: 100%;">
                              <option value="1">Não</option>
                              <option value="2">Sim</option>
                             
            </select>
            </div>

            
            <div class="form-group col-md-6">
              <label for="liceu">Liceu</label>
            <select name="liceu" id="" class="form-control "  style="width: 100%;">
                              <option value="3">Ndalatando</option>
                              
                             
            </select>
            </div>
       


            <div class="form-group">
            <label for="photo">Fotografia</label>
            <input type="file" class="form-control" name="photo" id="subject" >
          </div>
          
          <div class="form-group">
            <label for="bilhete">Bilhete de identidade</label>
            <input type="file" class="form-control" name="bilhete" id="subject" >
          </div>
         
        
            <div class="text-center"><button type="submit">Enviar Candidatura</button></div>
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