@extends('layouts.main_po')
@section('title',' Orientações enviadas')
@section('content')

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
@if (Session::get('fail'))
<!-- /.card-header -->
<div class="card-body">
    <div class="alert alert-danger alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <h5><i class="icon fas fa-ban"></i> Falha!</h5>
      {{ Session::get('fail') }} 
    </div>
    
  </div>
  <!-- /.card-body -->

@endif
<section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title" style=" font-weight:bolder ;">Orientações Para os Estudantes </h3> 

          <div class="card-tools">
           

              <a class="btn btn-app bg-success" href="{{ route('professor.orientacoes') }}" >
                <i class="fas fa-edit"></i> Enviar Nova Orientação
              </a>
          </div>

          
        </div>
        <div class="card-body p-0">
            
          <table class="table table-striped projects">
              <thead>
                  <tr>
                  <th>Id</th>
                                       
                  <th>Disciplina</th>
                                       
                                      
                                       <th>classe / Turma</th>
                                       <th>Orientação dada</th>
                                       <th>Link</th>
                    
                    
                  </tr>
              </thead>
              <tbody>                   
                                 @foreach( $orientacoes as $orientacao) 
                                    <tr>
                                    <td> {{ $orientacao->id}} </td>
                                       
                                   <td> @if($orientacao->disciplina == 1)
                                            Matemática
                                        @elseif($orientacao->disciplina == 2)
                                              Química
                                        @elseif($orientacao->disciplina == 3)
                                             Fisica
                                        @elseif($orientacao->disciplina == 4)
                                        L. Portuguesa
                                        @elseif($orientacao->disciplina == 5)
                                        Francês
                                        @elseif($orientacao->disciplina == 6)
                                        Inglês                
                                        @elseif($orientacao->disciplina == 7)
                                        Biologia
                                        @elseif($orientacao->disciplina == 8)
                                              Geologia
                                        @elseif($orientacao->disciplina == 9)
                                              Filosofia
                                        @elseif($orientacao->disciplina == 10)
                                            Informática
                                        @elseif($orientacao->disciplina == 11)
                                             Geometria Descritiva
                                        @elseif($orientacao->disciplina == 12)
                                            DNL
                                        @elseif($orientacao->disciplina == 13)
                                           Educação Física
                                       
                                        @endif </td>

                                     
                                       
                                        <td>  @if($orientacao->classe == 1)
                                            10 A
                            @elseif($orientacao->classe == 2)
                                10 B
                            @elseif($orientacao->classe == 3)
                                11 A
                            @elseif($orientacao->classe == 4)
                                11 B
                            @elseif($orientacao->classe == 5)
                                12 A
                            @elseif($orientacao->classe == 6)
                                12 B
                            @elseif($orientacao->classe == 7)
                                -
                                      
                            @endif</td>
                                       
                                        <td> {{ $orientacao->orientacao}} </td>

                                        <td> <a href="{{ $orientacao->link}}">{{ $orientacao->link}}</a> </td>
                                    
                                       

                                        <td class="project-actions text-right" style="display: flex; justify-content: space-evenly;">
            <a class="btn btn-primary btn-sm" href="/professor/media/orientacao/{{ $orientacao->ficheiro}}" download = "Orientacao @if($orientacao->disciplina == 1)
                                                Matemática
                                            @elseif($orientacao->disciplina == 2)
                                                  Química
                                            @elseif($orientacao->disciplina == 3)
                                                 Fisica
                                            @elseif($orientacao->disciplina == 4)
                                            L. Portuguesa
                                            @elseif($orientacao->disciplina == 5)
                                            Francês
                                            @elseif($orientacao->disciplina == 6)
                                            Inglês                
                                            @elseif($orientacao->disciplina == 7)
                                            Biologia
                                            @elseif($orientacao->disciplina == 8)
                                                  Geologia
                                            @elseif($orientacao->disciplina == 9)
                                                  Filosofia
                                            @elseif($orientacao->disciplina == 10)
                                                Informática
                                            @elseif($orientacao->disciplina == 11)
                                                 Geometria Descritiva
                                            @elseif($orientacao->disciplina == 12)
                                                DNL
                                            @elseif($orientacao->disciplina == 13)
                                               Educação Física
                                           
                                            @endif   ">
            <i class="fa fa-download"></i>
                
                Baixar
            </a>
           
            <form action=" /professor/deletar_orientacao/{{ $orientacao->id}}" method="post">

                @csrf
               @method('DELETE')
   
              <button type="submit" class="btn btn-danger btn-sm"> <i class="fas fa-trash">
                </i>Eliminar</button>
              
                </form>
           
        </td>
                                    </tr>
                                    @endforeach  
                                     
              </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
     <br>
     <br>
     <br>
     <br>
     <br>

          
@endsection