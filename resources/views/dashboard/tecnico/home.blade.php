@extends('layouts.main_tecnico')
@section('title','Pagina Inical')
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
   <link rel="stylesheet" href="/estilo/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="/estilo/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="/estilo/plugins/toastr/toastr.min.css">
  
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

  <link rel="stylesheet" href="/estilo/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="/estilo/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="/estilo/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/estilo/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="/estilo/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="/estilo/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="/estilo/plugins/summernote/summernote-bs4.css">
 

@section('content')



    
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-7 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <!-- /.card -->


            <!-- TO DO List -->
            <div class="card">
              <div class="card-header">
                
                <h3 class="card-title">
                  <i class="ion ion-clipboard mr-1"></i>
                  Lista de Tarefas
                </h3>

                <div class="card-tools">
                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                      <i class="fas fa-times"></i>
                    </button>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <ul class="todo-list" data-widget="todo-list">
                  <li>
                    <!-- drag handle -->
                    <span class="handle">
                      <i class="fas fa-ellipsis-v"></i>
                      <i class="fas fa-ellipsis-v"></i>
                    </span>
                    <!-- checkbox -->
                    <div  class="icheck-primary d-inline ml-2">
                      <input type="checkbox" value="" name="todo1" id="todoCheck1">
                      <label for="todoCheck1"></label>
                    </div>
                    <!-- todo text -->
                    <span class="text">Gestão Escolar</span>
                    <!-- Emphasis label -->
                    <small class="badge badge-danger"><i class="far fa-clock"></i> 2 mins</small>
                    <!-- General tools such as edit or delete-->
                    <div class="tools">
                      <i class="fas fa-edit"></i>
                      <i class="fas fa-trash-o"></i>
                    </div>
                  </li>
                 
                  
                 
                
                </ul>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <button type="button" class="btn btn-info float-right"><i class="fas fa-plus"></i> Adicionar Tarefa</button>
              </div>
            </div>
            
            <div class="card">
              <div class="card-header">
                
                <h3 class="card-title">
                  <i class="ion ion-clipboard mr-1"></i>
                 Preparações de aulas
                </h3>

                <div class="card-tools">
                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                      <i class="fas fa-times"></i>
                    </button>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <ul class="todo-list" data-widget="todo-list">
                  <li>
                    <!-- drag handle -->
                   
                    <!-- checkbox -->
                    
                    <!-- todo text -->
                    <table class="table table-head-fixed text-nowrap">
                      <thead>
                        <th style = "color:red;">Nome Professor</th>
                                           
                        <th style = "color:red;">Tipo de Preparação</th>
                        <th style = "color:red;">Disciplina</th>
                      
                      
                        <th style = "color:red;">Tema / Descrição</th>
                       
     
     
    </tr>
    </thead>
    <tbody>
    
                     <tr>
          @foreach( $planos as $plano) 
                  
                     <td> {{$plano->professor->name}}</td>
                     <td> @if($plano->tipo == 1)
                                            Nenhum Tipo de Plano
                                        @elseif($plano->tipo == 2)
                                              Aula Diária
                                        @elseif($plano->tipo == 3)
                                            Continuação da Aula Anterior
                                        @elseif($plano->tipo == 4)
                                     Plano de aula Semanal
                                        @elseif($plano->tipo == 5)
                                        Plano de aula Quinzenal
                                        @elseif($plano->tipo == 6)
                                       Plano de Aula Mensal             
                                        @elseif($plano->tipo == 7)
                                       Dosificação Trimestral
                                    
                                       
                                        @endif </td>
                     <td>  @if($plano->disciplina == 1)
                                            Matemática
                                        @elseif($plano->disciplina == 2)
                                              Química
                                        @elseif($plano->disciplina == 3)
                                             Fisica
                                        @elseif($plano->disciplina == 4)
                                        L. Portuguesa
                                        @elseif($plano->disciplina == 5)
                                        Francês
                                        @elseif($plano->disciplina == 6)
                                        Inglês                
                                        @elseif($plano->disciplina == 7)
                                        Biologia
                                        @elseif($plano->disciplina == 8)
                                              Geologia
                                        @elseif($plano->disciplina == 9)
                                              Filosofia
                                        @elseif($plano->disciplina == 10)
                                            Informática
                                        @elseif($plano->disciplina == 11)
                                             Geometria Descritiva
                                        @elseif($plano->disciplina == 12)
                                            DNL
                                        @elseif($plano->disciplina == 13)
                                           Educação Física
                                       
                                       
                                        @endif
                                       </td>
                        
                     @endforeach 
                 
                     </tr>
                 
    
                      </tbody>
                    </table>
       
                  
                 
                  
                 
                
                </ul>
              </div>
              <!-- /.card-body -->
              
            </div>


            <div class="card">
              <div class="card-header">
                
                <h3 class="card-title">
                  <i class="ion ion-clipboard mr-1"></i>
                  Boletins de Notas
                </h3>

                <div class="card-tools">
                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                      <i class="fas fa-times"></i>
                    </button>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <ul class="todo-list" data-widget="todo-list">
                  <li>
                    <!-- drag handle -->
                   
                    <!-- checkbox -->
                    
                    <!-- todo text -->
                    <table class="table table-head-fixed text-nowrap">
                      <thead>
                        <th style = "color:red;">Nome Professor</th>
                                           
                        <th style = "color:red;">Disciplina</th>
                      
                      
                        <th style = "color:red;">Liceu</th>
                        <th style = "color:red;">Classe/ Turma</th>
                       
     
     
    </tr>
    </thead>
    <tbody>
    
                     <tr>
                  
                     <td> 4 </td>
                     <td> 4 </td>
                     <td> 4 </td>
                        
                   
                     </tr>
                 
    
                      </tbody>
                    </table>
       
                  
                 
                  
                 
                
                </ul>
              </div>
              <!-- /.card-body -->
              
            </div>

            <div class="card">
              <div class="card-header">
                
                <h3 class="card-title">
                  <i class="ion ion-clipboard mr-1"></i>
                  Ausência de Estudantes
                </h3>

                <div class="card-tools">
                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                      <i class="fas fa-times"></i>
                    </button>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <ul class="todo-list" data-widget="todo-list">
                  <li>
                    <!-- drag handle -->
                   
                    <!-- checkbox -->
                    
                    <!-- todo text -->
                    <table class="table table-head-fixed text-nowrap">
                      <thead>
                        <th style = "color:red;">Nome Estudante</th>
                                           
                        <th style = "color:red;">Disciplina</th>
                        <th style = "color:red;">Liceu</th>
                      
                      
                        <th style = "color:red;">Classe / Turma</th>
                       
     
     
    </tr>
    </thead>
    <tbody>
    
                     <tr>
                  
                     <td> 4 </td>
                     <td> 4 </td>
                     <td> 4 </td>
                     <td> 4 </td>
                        
                   
                     </tr>
                 
    
                      </tbody>
                    </table>
       
                  
                 
                  
                 
                
                </ul>
              </div>
              <!-- /.card-body -->
              
            </div>
            <!-- /.card -->
          </section>
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
          <section class="col-lg-5 connectedSortable">

            <!-- Map card -->
            <div class="card bg-gradient-primary">
             
              
              <!-- /.card-body-->
              <div class="card-footer bg-transparent">
                <div class="row">
                  <div class="col-4 text-center">
                    <div id="sparkline-1"></div>
                    <div class="text-white">Acessos</div>
                  </div>
                  <!-- ./col -->
                  <div class="col-4 text-center">
                    <div id="sparkline-2"></div>
                    <div class="text-white">Online</div>
                  </div>
                  <!-- ./col -->
                  <div class="col-4 text-center">
                    <div id="sparkline-3"></div>
                    <div class="text-white">Off-line</div>
                  </div>
                  <!-- ./col -->
                </div>
                <!-- /.row -->
              </div>
            </div>
            <!-- /.card -->

            <!-- solid sales graph -->
            <!-- /.card -->

            <!-- Calendar -->
            <div class="card bg-gradient-success">
              <div class="card-header border-0">

                <h3 class="card-title">
                  <i class="far fa-calendar-alt"></i>
                  Calendario
                </h3>
                <!-- tools card -->
                <div class="card-tools">
                  <!-- button with a dropdown -->
                  <div class="btn-group">
                    <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown">
                      <i class="fas fa-bars"></i></button>
                    <div class="dropdown-menu float-right" role="menu">
                      <a href="#" class="dropdown-item">Criar Evento</a>
                      <a href="#" class="dropdown-item">Agendar eventos</a>
                      <div class="dropdown-divider"></div>
                      
                    </div>
                  </div>
                  <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-success btn-sm" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
                <!-- /. tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body pt-0">
                <!--The calendar -->
                <div id="calendar" style="width: 100%"></div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </section>

          
          <!-- right col -->
        </div>


        
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    
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
<script src="/estilo/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/estilo/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/estilo/plugins/daterangepicker/daterangepicker.js"></script>
<!-- SweetAlert2 -->
<script src="/estilo/plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="/estilo/plugins/toastr/toastr.min.js"></script>

<!-- Tempusdominus Bootstrap 4 -->
<script src="/estilo/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="/estilo/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="/estilo/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->


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
<!-- AdminLTE App -->
<script src="/estilo/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="/estilo/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/estilo/dist/js/demo.js"></script>
@endsection

