<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
  <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Rede Eiffel</title>
    <!-- MDB icon -->
    <link rel="icon" href="/login/images/renom.png" type="image/x-icon" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap"
    />
    <!-- MDB -->
    <link rel="stylesheet" href="splash/css/mdb.min.css" />
    <link rel="stylesheet" href="splash/css/custom.css" />

   
  </head>
  <body>
    <!-- Start your project here-->
    <div class="container">

      <div class=" align-items-center" id="centro">
        <div class="text-center">
            <img  class="mb-4" src="/login/images/renom.png" >

          </div>
      
      </div>

      <div class="demo_wrap" id="centro">
       
        <button type="button" class="btn btn-warning btn-rounded" id="btn"> <a
           
            href="{{ route('geral.login') }}"
           
            role="button"
            > Director Geral</a>
          </button> 

         
      
      </div>
      
       <div class="demo_wrap" id="centro">
       
        <button type="button" class="btn btn-warning btn-rounded" id="btn"> <a
           
            href="{{ route('pedagogia.login') }}"
           
            role="button"
            > Dirctor Pedagógico</a>
          </button> 

         
      
      </div>

      <div class="demo_wrap" id="centro">
       
       <button type="button" class="btn btn-warning btn-rounded" id="btn"> <a
          
           href="{{ route('administracao.login') }}"
          
           role="button"
           > Directora Administrativa</a>
         </button>  
     </div>

      
       <div class="demo_wrap" id="centro">
       
        <button type="button" class="btn btn-warning btn-rounded" id="btn"> <a
           
            href="{{ route('secretaria_pedagogica.login') }}"
           
            role="button"
            > Secretária Pedagógica</a>
          </button> 

         
      
      </div>
      
       <div class="demo_wrap" id="centro">
       
        <button type="button" class="btn btn-warning btn-rounded" id="btn"> <a
           
            href="{{ route('secretaria_administrativa.login') }}"
           
            role="button"
            > Secretaria Administrativa</a>
          </button> 

         
      
      </div>

      <div class="demo_wrap" id="centro">
       
       <button type="button" class="btn btn-warning btn-rounded" id="btn"> <a
          
           href="{{ route('secretaria_geral.login') }}"
          
           role="button"
           > Secretaria Geral</a>
         </button> 

        
     
     </div>


      

    
      
    
     

     <div class="demo_wrap" id="centro">
       
       <button type="button" class="btn btn-warning btn-rounded" id="btn"> <a
          
           href="{{ route('professor.login') }}"
          
           role="button"
           > Professores</a>
         </button> 

        
     
     </div>

     <div class="demo_wrap" id="centro">
       
       <button type="button" class="btn btn-warning btn-rounded" id="btn"> <a
          
           href="{{ route('estudante.login') }}"
          
           role="button"
           > Estudante</a>
         </button> 

        
     
     </div>

    
      
    </div>
    <!-- End your project here-->

    <!-- MDB -->
    <script type="text/javascript" src="splash/js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>
  </body>
</html>