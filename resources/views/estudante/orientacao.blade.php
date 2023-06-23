@extends('layouts.main_eo')
@section('title','Estudante')
@section('content')
<section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title" style=" font-weight:bolder ;">Orientações </h3> 

          <div class="card-tools">
          </div>

          
        </div>
        <div class="card-body p-0">
            
          <table class="table table-striped projects">
              <thead>
              <tr>
                                       
                                    
                                       <th>Disciplina</th>
                                       <th>Orientação</th>
                                       <th>Link</th>
                                       <th>Data</th>
                                       <th>Fincheiro</th>
                                       <th>Professor</th>
                                       
                                   </tr>
                                   @foreach( $orientacoes as $prova) 
                                   <tr>
                                      
                                      
                                  <td>@if($prova->disciplina == 1)
                                           Matemática
                                       @elseif($prova->disciplina == 2)
                                             Fisica
                                       @elseif($prova->disciplina == 3)
                                            Quimíca
                                       @elseif($prova->disciplina == 4)
                                       L. Portuguesa
                                       @elseif($prova->disciplina == 5)
                                       Francês
                                       @elseif($prova->disciplina == 6)
                                       Inglês                
                                       @elseif($prova->disciplina == 7)
                                       Biologia
                                       @elseif($prova->disciplina == 8)
                                             Geologia
                                       @elseif($prova->disciplina == 9)
                                             Filosofia
                                       @elseif($prova->disciplina == 10)
                                             Educação Fisica
                                       @elseif($prova->disciplina == 11)
                                             DNL
                                       @elseif($prova->disciplina == 12)
                                             Matematique Bilingue
                                       @elseif($prova->disciplina == 13)
                                             Informática
                                       @elseif($prova->disciplina == 14)
                                             Geometria Analitica
                                      
                                       @endif
                                       </td>

                                    
                                       <td>{{ $prova->orientacao}}</td>
                                       <td> <a href="{{ $prova->link}}">{{ $prova->link}}</a> </td>
                                      
                                       <td>{{ $prova->created_at}}</td>

                                        <td class="project-actions text-right" >
                                    <a class="btn btn-primary btn-sm" href="/professor/media/orientacao/{{ $prova->ficheiro}}" download = "orientacao @if($prova->disciplina == 1)
                                                Matemática
                                            @elseif($prova->disciplina == 2)
                                                  Química
                                            @elseif($prova->disciplina == 3)
                                                 Fisica
                                            @elseif($prova->disciplina == 4)
                                            L. Portuguesa
                                            @elseif($prova->disciplina == 5)
                                            Francês
                                            @elseif($prova->disciplina == 6)
                                            Inglês                
                                            @elseif($prova->disciplina == 7)
                                            Biologia
                                            @elseif($prova->disciplina == 8)
                                                  Geologia
                                            @elseif($prova->disciplina == 9)
                                                  Filosofia
                                            @elseif($prova->disciplina == 10)
                                                Informática
                                            @elseif($prova->disciplina == 11)
                                                 Geometria Descritiva
                                            @elseif($prova->disciplina == 12)
                                                DNL
                                            @elseif($prova->disciplina == 13)
                                               Educação Física
                                           
                                            @endif   ">
            <i class="fa fa-download"></i>
                
                Baixar
            </a>
           
          
           
                  </td>
        <td>{{ $prova->professor->name}}</td>
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