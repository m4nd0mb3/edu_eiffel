@extends('layouts.main_go')
@section('title','Ver Faltas')
@section('content')
<section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title" style=" font-weight:bolder ;">Faltas </h3> 

          <div class="card-tools">
           

             
          </div>

          
        </div>
        <div class="card-body p-0">
            
          <table class="table table-striped projects">
              <thead>
              <tr>
                                       
                                        
                                       <th>id</th>
                                       <th>Nome</th>
                                       <th>Disciplina</th>
                                       <th>Data</th>
                                       <th>Classe / Turma</th>
                                       <th>Estado</th>
                                       
                                     
                                       
                                   </tr>
                                   @foreach( $dados as $solicitacao) 
                              
                                       <td> {{ $solicitacao->id}} </td>
                                       <td> {{ $solicitacao->professor->name}} </td>
                                       <td>  @if($solicitacao->disciplina == 1)
                                           Matemática
                                       @elseif($solicitacao->disciplina == 2)
                                             Química
                                       @elseif($solicitacao->disciplina == 3)
                                            Fisica
                                       @elseif($solicitacao->disciplina == 4)
                                       L. Portuguesa
                                       @elseif($solicitacao->disciplina == 5)
                                       Francês
                                       @elseif($solicitacao->disciplina == 6)
                                       Inglês                
                                       @elseif($solicitacao->disciplina == 7)
                                       Biologia
                                       @elseif($solicitacao->disciplina == 8)
                                             Geologia
                                       @elseif($solicitacao->disciplina == 9)
                                             Filosofia
                                       @elseif($solicitacao->disciplina == 10)
                                           Informática
                                       @elseif($solicitacao->disciplina == 11)
                                            Geometria Descritiva
                                       @elseif($solicitacao->disciplina == 12)
                                           DNL
                                       @elseif($solicitacao->disciplina == 13)
                                          Educação Física
                                      
                                       @endif
                                       </td>

                                       <td> {{ $solicitacao->data}} </td>
                                       <td>   @if($solicitacao->classe == 1)
                                           10 A
                           @elseif($solicitacao->classe == 2)
                               10 B
                           @elseif($solicitacao->classe == 3)
                               11 A
                           @elseif($solicitacao->classe == 4)
                               11 B
                           @elseif($solicitacao->classe == 5)
                               12 A
                           @elseif($solicitacao->classe == 6)
                               12 B
                           @elseif($solicitacao->classe == 7)
                               -        
                           @endif </td>
                           <td> Não Justificada </td>

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