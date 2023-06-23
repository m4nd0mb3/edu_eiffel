@extends('layouts.main_po')
@section('title','Pagina Inicial')

@section('content')
<section class="content">
      <div class="container-fluid">
      
      
        <!-- Small boxes (Stat box) -->
        <div class="row">
       
          <div class="col-lg-3 col-6">
           
          <a href="{{ route('professor.tipo_boletim') }}" class="small-box-footer">
          <!-- small box -->
            <div class="small-box bg-success 	">
              <div class="inner">
                <h3> <i class="fa-solid fa-file-circle-check"></i></h3>

                  <h5>Boletins de Nota</h5>
              </div>
              <div class="icon">
                <i class="fa-solid fa-file-circle-check"></i>
              </div>

            </div>
            </a>
          </div>


          <div class="col-lg-3 col-6">
           
            <a href="{{ route('professor.plano_enviados') }}" class="small-box-footer">
            <!-- small box -->
              <div class="small-box bg-success 	">
                <div class="inner">
                  <h3> {{$count_provas}}</h3>
  
                    <h5>Preparações de aulas</h5>
                </div>
                <div class="icon">
                  <i class="fa-solid fa-book-open-reader"></i>
                </div>
  
              </div>
              </a>
            </div>

            <div class="col-lg-3 col-6">
           
              <a href="{{ route('professor.ver_falta') }}" class="small-box-footer">
              <!-- small box -->
                <div class="small-box bg-success 	">
                  <div class="inner">
                    <h3>{{$count_faltas}}</h3>
    
                      <h5>Faltas</h5>
                  </div>
                  <div class="icon">
                    <i class="fa-solid fa-person-chalkboard"></i>
                  </div>
    
                </div>
                </a>
              </div>
          
              <div class="col-lg-3 col-6">
           
                <a href="{{ route('professor.orientacoes_enviadas') }}" class="small-box-footer">
                <!-- small box -->
                  <div class="small-box bg-success 	">
                    <div class="inner">
                      <h3>{{$count_orientacoes}}</h3>
      
                        <h5>Orientações</h5>
                    </div>
                    <div class="icon">
                      <i class="fa-solid fa-person-chalkboard"></i>
                    </div>
      
                  </div>
                  </a>
                </div>


          <!-- ./col -->
        </div>
        <!-- /.row -->
        
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    

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
                  Horario diário
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
                  <table class="table table-head-fixed text-nowrap">
                    <thead>
                                         
                      <th style = "color:red;">Hora</th>
                      <th style = "color:red;">Disciplina</th>
                      <th style = "color:red;">Classe/ Turma</th>

  </tr>
  </thead>
  <tbody>
  <div class="form-group">
              <label>Dia da Semana</label>
              <select name="tipo" id="required" class="form-control ">
              @foreach( $dias as $dia) 
                      
                           <option value="{{ $dia->id}}">
                           {{ $dia->dia}}
                           </option>  
                        @endforeach     
                              </select> 
                        </div>
            
  
                   <tr>
                
                 
                  
                      
                 
                   </tr>
               
  
                    </tbody>
                  </table>
     
                 
                  
                 
                
                </ul>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <a href="{{ route('professor.planos')}}">
                  <button type="button" class="btn btn-info float-right"><i class="fas fa-plus"></i> </button>
                </a>
               
              </div>
              
            </div>




            <div class="card">
              <div class="card-header">
                
                <h3 class="card-title">
                  <i class="ion ion-clipboard mr-1"></i>
                  Ultimas preparações de aulas
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
                             
                     
                                       <th>Tipo</th>
                                     
                                     
                                       <th>Tema / Descrição</th>
                                      
                                       <th>Classe / Turma</th>
                       
     
     
    </tr>
    </thead>
    <tbody>
    
                     <tr>
                  
                    
                     @foreach( $planos as $plano) 
                                    <tr>
                                 
                                 
                                       
                               

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
                                    
                                       
                                        @endif
                                        </td>

                                       
                                        <td> {{ $plano->tema}} </td>
                                       
                                        <td> @if($plano->classe == 1)
                                            10 A
                            @elseif($plano->classe == 2)
                                10 B
                            @elseif($plano->classe == 3)
                                11 A
                            @elseif($plano->classe == 4)
                                11 B
                            @elseif($plano->classe == 5)
                                12 A
                            @elseif($plano->classe == 6)
                                12 B
                            @elseif($plano->classe == 7)
                                -
                                      
                            @endif</td>
                                       

                                        <td class="project-actions text-right"  style="display: flex; justify-content: space-evenly;">
            <a class="btn btn-primary btn-sm" href="/media/professor/planos/{{$plano->plano}}" download = "Plano {{ $plano->professor->name}} {{ $plano->data}}  @if($plano->disciplina == 1)
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
                                       
                                       
                                        @endif  ">
            <i class="fa fa-download"></i>
                
                Baixar
            </a>
           

            <a class="btn btn-info btn-sm" href="/professor/editar_plano/{{ $plano->id}}">
                <i class="fas fa-pencil-alt">
                </i>
                Editar
            </a>


          

                <a class="btn btn-success btn-sm" href="/media/professor/planos/{{$plano->plano}}" target="_blank">
                <i class="fa-solid fa-eye"></i>
                
                Ver
            </a>     
           
        </td>
          </tr>
                                    @endforeach   
                   
                     </tr>
                 
    
                      </tbody>
                    </table>
       
                  
                 
                  
                 
                
                </ul>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <a href="{{ route('professor.planos')}}">
                  <button type="button" class="btn btn-info float-right"><i class="fas fa-plus"></i> Nova preparação de aula</button>
                </a>
               
              </div>
            </div>
            <!-- /.card -->

            
            <div class="card">
              <div class="card-header">
                
                <h3 class="card-title">
                  <i class="ion ion-clipboard mr-1"></i>
                  Boletins de notas enviados
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
                                           
                      
                      
                        <th  style="color: red;">Data de Envio</th>
                        <th  style="color: red;">Tipo de prova</th>

                        <th  style="color: red;">Disciplina</th>
                    <th  style="color: red;">Classe</th>
                    
     
     
    </tr>
    </thead>
    <tbody>
    
      @foreach( $notasx as $prova) 
      <tr>
     
       
         
          <td>{{ $prova->created_at}}</td>
          <td>
            @if($prova->tipo_id == 1)
                Avaliação 
            @elseif($prova->tipo_id == 2)
                Prova do Professor
            @elseif($prova->tipo_id == 3)
                 Prova Trimestral
            @elseif($prova->tipo_id == 4)
               MAC
            
            @endif
           </td>
          <td>@if($prova->mix_id == 1)
            Matemática
        @elseif($prova->mix_id == 2)
              Química
        @elseif($prova->mix_id == 3)
             Fisica
        @elseif($prova->mix_id == 4)
        L. Portuguesa
        @elseif($prova->mix_id == 5)
        Francês
        @elseif($prova->mix_id == 6)
        Inglês                
        @elseif($prova->mix_id == 7)
        Biologia
        @elseif($prova->mix_id == 8)
              Geologia
        @elseif($prova->mix_id == 9)
              Filosofia
        @elseif($prova->mix_id == 10)
            Informática
        @elseif($prova->mix_id == 11)
             Geometria Descritiva
        @elseif($prova->mix_id == 12)
            DNL
        @elseif($prova->mix_id == 13)
           Educação Física
       
       
        @endif</td>
          <td>@if($prova->classe == 1)
              10 A
@elseif($prova->classe == 2)
  10 B
@elseif($prova->classe == 3)
  11 A
@elseif($prova->classe == 4)
  11 B
@elseif($prova->classe == 5)
  12 A
@elseif($prova->classe == 6)
  12 B
@elseif($prova->classe == 7)
  -
        
@endif</td>

<td class="project-actions text-right"  style="display: flex;">
  <a class="btn btn-primary btn-sm" href="/professor/ver_info_nota_professor/{{ $prova->created_at}}">
      <i class="fa-solid fa-eye"></i>
      
      Ver
  </a>
  <a class="btn btn-info btn-sm" href="/professor/editar_provas/{{ $prova->created_at}}">
      <i class="fas fa-pencil-alt">
      </i>
      Editar
  </a>

 <a class="btn btn-danger btn-sm">
  <form action=" /professor/eliminar_p/{{ $prova->mix_id}}/{{ $prova->created_at}}" method="post">

    @csrf
   @method('DELETE')

   <button type="submit"> <i class="fas fa-trash">
    </i>Eliminar</button>

    </form>
 </a>
 
</td>
     

      
      </tr>
      @endforeach  
         
                 
    
                      </tbody>
                    </table>
       
                  
                 
                  
                 
                
                </ul>
              </div>
              <div class="card-footer clearfix">
                <a href="{{ route('professor.turmas') }}">
                  <button type="button" class="btn btn-info float-right"><i class="fas fa-plus"></i>Enviar novo Boletim de nota</button>
                </a>
              </div>
              <!-- /.card-body -->
              
            </div>

            
            <div class="card">
              <div class="card-header">
                
                <h3 class="card-title">
                  <i class="ion ion-clipboard mr-1"></i>
                  Boletins de notas validados
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
                                           
                      
                        <th  style="color: red;">Data de Envio</th>
                        <th  style="color: red;">Tipo de prova</th>
                        <th  style="color: red;">Disciplina</th>
                        <th  style="color: red;">Classe</th>
     
     
    </tr>
    </thead>
    <tbody>
    
      @foreach( $notasss as $prova) 
      <tr>
     
       
         
          <td>{{ $prova->created_at}}</td>
          <td>
            @if($prova->tipo_id == 1)
                Avaliação 
            @elseif($prova->tipo_id == 2)
                Prova do Professor
            @elseif($prova->tipo_id == 3)
                 Prova Trimestral
            @elseif($prova->tipo_id == 4)
               MAC
            
            @endif
           </td>
          <td>@if($prova->mix_id == 1)
              Matemática
          @elseif($prova->mix_id == 2)
                Química
          @elseif($prova->mix_id == 3)
               Fisica
          @elseif($prova->mix_id == 4)
          L. Portuguesa
          @elseif($prova->mix_id == 5)
          Francês
          @elseif($prova->mix_id == 6)
          Inglês                
          @elseif($prova->mix_id == 7)
          Biologia
          @elseif($prova->mix_id == 8)
                Geologia
          @elseif($prova->mix_id == 9)
                Filosofia
          @elseif($prova->mix_id == 10)
              Informática
          @elseif($prova->mix_id == 11)
               Geometria Descritiva
          @elseif($prova->mix_id == 12)
              DNL
          @elseif($prova->mix_id == 13)
             Educação Física
         
         
          @endif</td>
          <td>@if($prova->classe == 1)
              10 A
@elseif($prova->classe == 2)
  10 B
@elseif($prova->classe == 3)
  11 A
@elseif($prova->classe == 4)
  11 B
@elseif($prova->classe == 5)
  12 A
@elseif($prova->classe == 6)
  12 B
@elseif($prova->classe == 7)
  -
        
@endif</td>

<td class="project-actions text-right" >
  <a class="btn btn-primary btn-sm" href="/professor/ver_info_nota_professor_validada/{{Auth::guard('professor')->user()->id}}/{{ $prova->created_at}}">
      <i class="fa-solid fa-eye"></i>
      </i>
      Ver
  </a>
  

  <a class="btn btn-info btn-sm" href="/professor/editar_provas/{{ $prova->created_at}}">
    <i class="fas fa-pencil-alt">
    </i>
    Solicitar correção
</a>
 
</td>
     

      
      </tr>
      @endforeach  
                 
    
                      </tbody>
                    </table>
       
                  
                 
                  
                 
                
                </ul>
              </div>
              <!-- /.card-body -->
              
            </div>
          </section>
         <!-- right col (We are only adding the ID to make the widgets sortable)-->
<section class="col-lg-5 connectedSortable">

  <div class="info-box mb-3 bg-warning">

    <div class="info-box-content">
      <span class="info-box-text"><h3 style="text-align: center;">Links úteis</h3></span>
     
      @foreach($links as $link)
        <a href="{{$link->link}}" target="_blank" rel="noopener noreferrer"><li  > {{$link->descrição}}</li></a>
      @endforeach
    </div>
    <!-- /.info-box-content -->
  </div>
  <div class="card">
    @if (Session::get('success'))<!-- /.card-header -->
<div class="card-body">
  
  <div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h5><i class="icon fas fa-check"></i> Sucesso!</h5>
    {{ Session::get('success') }}
  </div>
</div>
<!-- /.card-body -->

@endif
    <div class="card-header">

      <h3 class="card-title">Lista de tarefas</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse">
          <i class="fas fa-minus"></i>
        </button>
        <button type="button" class="btn btn-tool" data-card-widget="remove">
          <i class="fas fa-times"></i>
        </button>
      </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body p-0">
      <ul class="products-list product-list-in-card pl-2 pr-2">
        @foreach( $tarefas as $tarefa)
        <li class="item">
          
          <div class="product-info">
            <a href="javascript:void(0)" class="product-title">{{$tarefa->titulo}}
              <span class="badge badge-success float-right">{{$tarefa->data_tempo}}</span></a>
          </a>
          
            <span class="product-description">
              {{$tarefa->descricao}}
            </span>
           
          </div>
        </li>
        @endforeach

        

        

        
       
        <!-- /.item -->
       
       
        <!-- /.item -->
      </ul>
      
    </div>
    <br>
    <br>
    <br>
   
    <!-- /.card-body -->
    <div class="card-footer text-center">
      <a href="javascript:void(0)" type="button" class="btn  uppercase" data-toggle="modal" data-target=".bd-example-modal-lg-one">Ver todas as tarefas</a>
    </div>
    
    <button type="button" class="btn btn-success" data-toggle="modal" data-target=".bd-example-modal-lg">Criar Tarefa</button>


    
    <!-- /.card-footer -->
  </div>
  
  <div class="card">
    @if (Session::get('success'))<!-- /.card-header -->
<div class="card-body">
  
  <div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h5><i class="icon fas fa-check"></i> Sucesso!</h5>
    {{ Session::get('success') }}
  </div>
</div>
<!-- /.card-body -->

@endif
    <div class="card-header">

      <h3 class="card-title">Ocorrências do Liceu </h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse">
          <i class="fas fa-minus"></i>
        </button>
        <button type="button" class="btn btn-tool" data-card-widget="remove">
          <i class="fas fa-times"></i>
        </button>
      </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body p-0">
      <ul class="products-list product-list-in-card pl-2 pr-2">
        @foreach( $tarefas as $tarefa)
        <li class="item">
          
          <div class="product-info">
            <a href="javascript:void(0)" class="product-title">{{$tarefa->titulo}}
              <span class="badge badge-success float-right">{{$tarefa->data_tempo}}</span></a>
          </a>
          
            <span class="product-description">
              {{$tarefa->descricao}}
            </span>
           
          </div>
        </li>
        @endforeach

        

        

        
       
        <!-- /.item -->
       
       
        <!-- /.item -->
      </ul>
      
    </div>
    <br>
    <br>
    <br>
   
    <!-- /.card-body -->
    <div class="card-footer text-center">
      <a href="javascript:void(0)" type="button" class="btn  uppercase" data-toggle="modal" data-target=".bd-example-modal-lg-one">Ver todas Ocorrências</a>
    </div>
    
    <button type="button" class="btn btn-success" data-toggle="modal" data-target=".bd-example-modal-lg">Criar Ocorrências</button>


    
    <!-- /.card-footer -->
  </div>
</section><!-- Modal -->



<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
           
<form action="{{ route ('professor.criar_tarefa')}}" method = "post" enctype="multipart/form-data">


  {{csrf_field()}}

  <!-- SELECT2 EXAMPLE -->
  <div class="card card-default">
    <div class="card-header">
      <h3 class="card-title" style="font-weight: bolder; color: red;">Selecione os dados da tarefa</h3>

      <div class="card-tools">
         </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <div class="row">
        <div class="col-md">

          <div class="form-group">
              <label>Trimestre</label>
              <select name="trimestre_id" id="required" class="form-control ">
                @foreach( $trimestres as $prova) 
                <option value="{{$prova->id}}">{{$prova->trimestre}}
                           </option>
                @endforeach      
                       
                        
                      </select> 
            </div>

            <div class="col-sm">
              <!-- textarea -->
              <div class="form-group">
                <label>Titulo</label>
                <input type="text" class="form-control"  name="titulo">
              </div>
            </div>
          <div class="form-group">
            <label>Tipo tarefa</label>
            <select name="tipo" id="required" class="form-control ">
                    
                          <option value="1">
                                     -- Selecione --
                                     </option>
                                     <option value="2">
                                     Marcação de Prova
                                     </option>
                                     <option value="3">
                                Trabalhos laborais
                                     </option>

                                 

                          
                               
                            </select> 
                      </div>
          <!-- /.form-group -->
          <div class="form-group">
              <label>Data</label>
              <input id="data" name="data_tempo" class="date-picker form-control" placeholder="dd-mm-yyyy" type="text" required="required" type="text" onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'" onblur="this.type='text'" onmouseout="timeFunctionLong(this)">
              <script>
                function timeFunctionLong(input) {
                  setTimeout(function() {
                    input.type = 'text';
                  }, 60000);
                }
              </script>
            </div>

            <div class="form-group">
              <label>Liceu</label>
              <select name="liceu" id="required" class="form-control ">
                      
                  <option value="  {{ Auth::guard('professor')->user()->liceu }}">
                        
                        @if(Auth::guard('professor')->user()->liceu == 1)
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
          <!-- /.form-group -->
         
          <div class="col-sm">
              <!-- textarea -->
              <div class="form-group">
                <label>Descrição</label>
                <textarea class="form-control" rows="2" name="descricao"  placeholder=""></textarea>
              </div>
            </div>

           
        </div>
        <!-- /.col -->
        
          <!-- /.form-group -->
          

           
          
          <!-- /.form-group -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- /.row -->
    </div>
    <!-- /.card-body -->
    <div class=" form-group">
      <div class="col-form-label col-md-3 col-sm-3 label-align">
        <button class="btn btn-danger" data-dismiss="modal" type="button">Cancelar</button>
        <button type="submit" class="btn btn-success">Enviar</button>
      </div>
    </div>    
  </div>
  <!-- /.card -->

          <div class="ln_solid"></div>
       
        </div>
        <!-- /.card-body -->
      </div>
  </div>
  


</form>
    </div>
  </div>
</div>



<div class="modal fade bd-example-modal-lg-one" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel1" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <table class="table table-head-fixed text-nowrap">
        <thead>
                             
        
          <th  style="color: red;">Titulo</th>
          <th  style="color: red;">Descrição</th>
          <th  style="color: red;">Data</th>


</tr>
</thead>
<tbody>

@foreach( $tarefas as $tarefa) 
<tr>



<td>{{$tarefa->titulo}}</td>
<td>
{{$tarefa->descricao}}
</td>
<td>{{$tarefa->data_tempo}}</td>

     





</tr>
@endforeach  
   

        </tbody>
      </table>

    
   
    
   
    </div>
  </div>
</div>
@endsection

  