@extends('layouts.main_po')
@section('title','Ver Preparações')
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
          <h3 class="card-title" style=" font-weight:bolder ;">Preparações de Aulas </h3> 

          <div class="card-tools">
           

              <a class="btn btn-app bg-success" href="{{ route('professor.planos') }}" >
                <i class="fas fa-edit"></i> Nova Preparação de Aula
              </a>
          </div>

          
        </div>
        <div class="card-body p-0">
            
          <table class="table table-striped projects">
              <thead>
                  <tr>
                  <th>Id</th>
                                       
                                       <th>Disciplina</th>
                                       <th>Tipo</th>
                                     
                                     
                                       <th>Tema / Descrição</th>
                                       <th>Data do Inicio do Plano</th>
                                       <th>Data de Submissão</th>
                                       <th>Classe / Turma</th>
                    
                    
                  </tr>
              </thead>
              <tbody>
              @foreach( $planos as $plano) 
                                    <tr>
                                 
                                    <td> {{ $plano->id}} </td>
                                       
                                   <td> @if($plano->disciplina == 1)
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

                                        <td> @if($plano->tipo == 1)
                                            Nenhum Tipo de Plano
                                        @elseif($plano->tipo == 2)
                                              Aula Diária
                                        @elseif($plano->tipo == 3)
                                            Continuação da Aula Anterior
                                        @elseif($plano->tipo == 4)
                                        Preparação de Aula
                                        @elseif($plano->tipo == 5)
                                        Plano de aula Semanal
                                        @elseif($plano->tipo == 6)
                                        Plano de aula Quinzenal             
                                        @elseif($plano->tipo == 7)
                                       Dosificação Trimestral
                                    
                                       
                                        @endif
                                        </td>

                                       
                                        <td> {{ $plano->tema}} </td>
                                        <td> {{ $plano->data}} </td>
                                        <td> {{ $plano->created_at}} </td>
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


            <form action=" /professor/deletar_plano/{{ $plano->id}}" method="post">

                @csrf
               @method('DELETE')
   
              <button type="submit" class="btn btn-danger btn-sm"> <i class="fas fa-trash">
                </i>Eliminar</button>
              
                </form>

                <a class="btn btn-success btn-sm" href="/media/professor/planos/{{$plano->plano}}" target="_blank">
                <i class="fa-solid fa-eye"></i>
                
                Ver
            </a>     
           
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