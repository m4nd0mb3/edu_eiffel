@extends('layouts.main_eo')
@section('title','Estudante')
@section('content')
<div class="col-12">
        <div class="card">
           
          <div class="card-header">
            <h3 class="card-title" style="font-weight: bolder; color: red;"> Dados das faltas</h3>
            
          </div>
          <!-- /.card-header -->
          
          <div class="card-body">

            <table id="example2" class="table table-bordered table-hover">
              <thead>
              <tr>
                                       
                                        
                                      
              <th>Disciplina</th>
                                        <th>Data</th>
                                        
                                     
                                     
                                       
                                   </tr>
                                   @foreach( $faltas as $prova) 
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

                                     
                                        <td>{{ $prova->data}}</td>

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