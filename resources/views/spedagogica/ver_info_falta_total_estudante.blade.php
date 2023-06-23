@extends('layouts.main_spo')
@section('title','Ver Faltas')
@section('content')
<div class="col-12">
        <div class="card">
            <a class="btn btn-app bg-danger" href="" >
                <i class="fas fa-save"></i> Imprimir  Faltas do Estudante
              </a>
          <div class="card-header">
            <h3 class="card-title" style="font-weight: bolder; color: red;"> Dados da Turma</h3>
            
          </div>
          <!-- /.card-header -->
          
          <div class="card-body">

            <table id="example2" class="table table-bordered table-hover">
              <thead>
              <tr>
                                       
                                        
                                       <th>id</th>
                                       <th>nome</th>
                                       <th>Disciplina</th>
                                       <th>Data</th>
                                       <th>Classe</th>
                                       <th>Liceu</th>
                                     
                                     
                                       
                                   </tr>
                                   @foreach( $estudantes as $solicitacao) 
                              
                                       <td> {{ $solicitacao->id}} </td>
                                       <td> {{ $solicitacao->estudante->name}} </td>
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

                           <td>  @if($solicitacao->liceu == 1)
                                           Caxito
                           @elseif($solicitacao->liceu == 2)
                               Malanje
                           @elseif($solicitacao->liceu == 3)
                               Ndalatando
                           @elseif($solicitacao->liceu == 4)
                               Ondjiva
                              
                           @endif  </td>
                                   </tr>
                                   @endforeach  
                                  
               
                  
                     </tbody>
              <tfoot>
              
              </tfoot>
            </table>

            <div class="ln_solid"></div>
           
          </div>
          <!-- /.card-body -->
        </div>
    </div>
    
<br>
<br>
<br>
<br>
         
@endsection