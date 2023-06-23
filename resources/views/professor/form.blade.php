<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Rede Eiffel</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="/inscricao/img/logo.jpg" rel="icon">
  <link href="/inscricao/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/inscricao/vendor/aos/aos.css" rel="stylesheet">
  <link href="/inscricao/vendor/bo<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Rede Eiffel</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="/inscricao/img/logo.jpg" rel="icon">
  <link href="/inscricao/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/inscricao/vendor/aos/aos.css" rel="stylesheet">
  <link href="/inscricao/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/inscricao/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/inscricao/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/inscricao/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/inscricao/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link href="/inscricao/css/custom.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/inscricao/css/style.css" rel="stylesheet">
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

    <p class = "msg">{{ session ('msg') }}  dados actualizados com succeso, voltar a pagina inicial<a href="{{ route('professor_ondjiva.ver_dados') }}"> </a></p>

    @endif
  </div>

</div>
 
  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container">

      <div class="section-title">
        <h2>Actualize os seus dados pessoais</h2>
      </div>

      <div class="row" data-aos="fade-in">

      

        <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">

          <form  action="{{ route('professor.edit_inf')}}" method = "post"  class="form" enctype="multipart/form-data">
        
            {{csrf_field()}}
  
          
            <div class="row">
              
               <div class="form-group col-md-6">
                <label for="name">Nome</label>
                <input type="text" name="name" class="form-control" id="name" value=" {{$professores->name}}" >
              </div>
              <div class="form-group col-md-6">
                <label for="second_name">Apelido</label>
                <input type="text" name="second_name" class="form-control" id="second_name" >
              </div>
              
              <div class="form-group col-md-6">
                <label for="email">E-mail</label>
                <input type="email" name="email" readonly class="form-control" id="name"  value=" {{$professores->email}}">
              </div>

            
             
              <div class="form-group col-md-6">
                <label for="genero">Sexo</label>
              <select name="genero" id="" class="form-control "  style="width: 100%;">
                                <option value="1">Masculino</option>
                                <option value="2">Femenino</option>
                               
              </select>
              </div>
            
           

            <div class="form-group">
                <label for="bi">Número do Documento de Identificação</label>
                <input type="text" class="form-control" name="bi" id="subject" >
              </div>
              
              <div class="form-group">
                <label for="nif">NIF</label>
                <input type="text" class="form-control" name="nif" id="subject" >
              </div>
              <div class="form-group col-md-6">
                <label for="es_civil">Estado Civil</label>
              <select name="es_civil" id="" class="form-control "  style="width: 100%;">
                                <option value="1">Solteiro</option>
                                <option value="2">Casado</option>
                                <option value="3">Divorciado</option>
                                <option value="4">Solteiro</option>
                               
              </select>
              </div>
            <div class="form-group">
              <label for="data_nasc">Data de Nascimento</label>
                <input id="data" name="data_nasc" class="date-picker form-control" placeholder="dd-mm-yyyy" type="text" ="" type="text" onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'" onblur="this.type='text'" onmouseout="timeFunctionLong(this)">
                          <script>
                            function timeFunctionLong(input) {
                              setTimeout(function() {
                                input.type = 'text';
                              }, 60000);
                            }
                          </script>
            </div>
            
            <div class="form-group col-md-6">
                <label for="idade">Idade</label>

                <input type="text" name="idade" class="form-control" id="name" >
              </div>

            <div class="form-group">
              <label for="nacionalidade">Local de Nascimento</label>
              <input type="text" class="form-control" name="nacionalidade" id="subject" >
            </div>
            
            <div class="form-group">
              <label for="provincia">Provincia</label>
              <input type="text" class="form-control" name="provincia" id="subject" >
            </div>
            
            <div class="form-group">
              <label for="monicipio">Municipio</label>
              <input type="text" class="form-control" name="monicipio" id="subject" >
            </div>
            
         

            <div class="form-group">
              <label for="numero">Telefone do Professor</label>
              <input type="text" class="form-control" name="numero" id="subject" >
            </div>

          
            <div class="form-group">
              <label for="bairro">Morada</label>
              <input type="text" class="form-control" name="bairro" id="subject" >
            </div>
            <div class="form-group col-md-6">
                <label for="situacao">Situação</label>
              <select name="situacao" id="" class="form-control "  style="width: 100%;">
                                <option value="1">Coloborador</option>
                                <option value="2">Efectivo</option>
                               
                                
                               
              </select>
              </div>
       
              <div class="form-group col-md-6">
                <label for="liceu">Liceu</label>
              <select name="liceu" id="" class="form-control "  style="width: 100%;">
                              
                                <option value="{{ Auth::guard('professor')->user()->liceu }}">   @if(Auth::guard('professor')->user()->liceu == 1)
           Caxito
             @elseif(Auth::guard('professor')->user()->liceu == 2)
            Malanje
           @elseif(Auth::guard('professor')->user()->liceu == 3)
       Ndalatando
         @elseif(Auth::guard('professor')->user()->liceu == 4)
                                                
        Ondjiva
                              @endif</option>
     
              </select>
              </div>

              <div class="form-group col-md-6">
                <label for="classe"> 1º Classe / Turma</label>
              <select name="classe_um" id="" class="form-control "  style="width: 100%;">
              <option value="7">Selecione</option>
              @foreach( $classes as $professor) 
                        <option value="{{$professor->classe_um}}">
                        @if($professor->id == 1)
                                            10 A
                            @elseif($professor->id == 2)
                                10 B
                            @elseif($professor->id == 3)
                                11 A
                            @elseif($professor->id == 4)
                                11 B
                            @elseif($professor->id == 5)
                                12 A
                            @elseif($professor->id == 6)
                                12 B
                            @elseif($professor->id == 7)
                                -
                                      
                            @endif
                            </option>
                    @endforeach
                               
              </select>
              </div>

              
              <div class="form-group col-md-6">
                <label for="classe_dois"> 2º Classe / Turma</label>
              <select name="classe_dois" id="" class="form-control "  style="width: 100%;">
              <option value="7">Selecione</option>
              @foreach( $classes as $professor) 
                        <option value="{{$professor->classe_dois}}">
                        @if($professor->id == 1)
                                            10 A
                            @elseif($professor->id == 2)
                                10 B
                            @elseif($professor->id == 3)
                                11 A
                            @elseif($professor->id == 4)
                                11 B
                            @elseif($professor->id == 5)
                                12 A
                            @elseif($professor->id == 6)
                                12 B
                            @elseif($professor->id == 7)
                                -
                                      
                            @endif
                            </option>
                    @endforeach
      
              </select>
              </div>

           
              <div class="form-group col-md-6">
                <label for="classe_tres"> 3º Classe / Turma</label>
              <select name="classe_tres" id="" class="form-control "  style="width: 100%;">
              <option value="7">Selecione</option>
              @foreach( $classes as $professor) 
                        <option value="{{$professor->classe_tres}}">
                        @if($professor->id == 1)
                                            10 A
                            @elseif($professor->id == 2)
                                10 B
                            @elseif($professor->id == 3)
                                11 A
                            @elseif($professor->id == 4)
                                11 B
                            @elseif($professor->id == 5)
                                12 A
                            @elseif($professor->id == 6)
                                12 B
                            @elseif($professor->id == 7)
                                -
                                      
                            @endif
                            </option>
                    @endforeach
                                
                               
              </select>
              </div>

              
              <div class="form-group col-md-6">
                <label for="classe_quatro"> 4º Classe / Turma</label>
              <select name="classe_quatro" id="" class="form-control "  style="width: 100%;">
              <option value="7">Selecione</option>
              @foreach( $classes as $professor) 
                        <option value="{{$professor->classe_quatro}}">
                        @if($professor->id == 1)
                                            10 A
                            @elseif($professor->id == 2)
                                10 B
                            @elseif($professor->id == 3)
                                11 A
                            @elseif($professor->id == 4)
                                11 B
                            @elseif($professor->id == 5)
                                12 A
                            @elseif($professor->id == 6)
                                12 B
                            @elseif($professor->id == 7)
                                -
                                      
                            @endif
                            </option>
                    @endforeach
                               
                                
                               
              </select>
              </div>

              <div class="form-group col-md-6">
                <label for="classe_cinco"> 5º Classe / Turma</label>
              <select name="classe_cinco" id="" class="form-control "  style="width: 100%;">
              <option value="7">Selecione</option>
              @foreach( $classes as $professor) 
                        <option value="{{$professor->classe_cinco}}">
                        @if($professor->id == 1)
                                            10 A
                            @elseif($professor->id == 2)
                                10 B
                            @elseif($professor->id == 3)
                                11 A
                            @elseif($professor->id == 4)
                                11 B
                            @elseif($professor->id == 5)
                                12 A
                            @elseif($professor->id == 6)
                                12 B
                            @elseif($professor->id == 7)
                                -
                                      
                            @endif
                            </option>
                    @endforeach
                                
                               
              </select>
              </div>

              
              <div class="form-group col-md-6">
                <label for="classe_seis"> 6º Classe / Turma</label>
              <select name="classe_seis" id="" class="form-control "  style="width: 100%;">
              <option value="7">Selecione</option>
              @foreach( $classes as $professor) 
                        <option value="{{$professor->classe_seis}}">
                            @if($professor->id == 1)
                                            10 A
                            @elseif($professor->id == 2)
                                10 B
                            @elseif($professor->id == 3)
                                11 A
                            @elseif($professor->id == 4)
                                11 B
                            @elseif($professor->id == 5)
                                12 A
                            @elseif($professor->id == 6)
                                12 B
                            @elseif($professor->id == 7)
                                -
                                      
                            @endif
                            </option>
                    @endforeach
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

            <div class="form-group">
              <label for="hl">Habilitações Literaria / Certificado</label>
              <input type="file" class="form-control" name="hl" id="subject" >
            </div>

            <div class="form-group">
              <label for="cv">Curriculum Vitae</label>
              <input type="file" class="form-control" name="cv" id="subject" >
            </div>

            <div class="form-group">
              <label for="cv">Guia de Colocação</label>
              <input type="file" class="form-control" name="gm" id="subject" >
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
  <script src="/inscricao/vendor/aos/aos.js"></script>
  <script src="/inscricao/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/inscricao/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="/inscricao/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="/inscricao/vendor/php-email-form/validate.js"></script>
  <script src="/inscricao/vendor/purecounter/purecounter.js"></script>
  <script src="/inscricao/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="/inscricao/vendor/typed.js/typed.min.js"></script>
  <script src="/inscricao/vendor/waypoints/noframework.waypoints.js"></script>

  <!-- Template Main JS File -->
  <script src="/inscricao/js/main.js"></script>
  <script src="/inscricao/js/mdb.min.js"></script>
  <!-- MDB -->


</body>

</html>