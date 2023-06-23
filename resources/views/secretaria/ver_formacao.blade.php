@extends('layouts.main_so')
@section('title','Formações')
@section('content')


        
<div class="product-status mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-status-wrap drp-lst">
                    <h4>Formações dos Professores</h4>
                    
                    <div class="asset-inner">
                        <table>
                            <tr>
                                <th>Id da Reunião</th>
                                <th>Professores</th>
                              
                             
                                <th>Data de inicio</th>
                                <th>Data de termino</th>
                                <th>Disciplina</th>
                                <th>Tema</th>
                               
                            </tr>

                            @foreach( $formacoes as $declaracao) 
                            <tr>
                                <td>{{$declaracao->id_formacao}}</td>
                                <td>{{$declaracao->professor->name}}</td>
                                <td>{{$declaracao->data_inicio}}</td>
                                <td>{{$declaracao->data_termino}}</td>
                            
                                <td> @if($declaracao->disciplina == 1)
                                            Matemática
                                        @elseif($declaracao->disciplina == 2)
                                              Química
                                        @elseif($declaracao->disciplina == 3)
                                             Fisica
                                        @elseif($declaracao->disciplina == 4)
                                        L. Portuguesa
                                        @elseif($declaracao->disciplina == 5)
                                        Francês
                                        @elseif($declaracao->disciplina == 6)
                                        Inglês                
                                        @elseif($declaracao->disciplina == 7)
                                        Biologia
                                        @elseif($declaracao->disciplina == 8)
                                              Geologia
                                        @elseif($declaracao->disciplina == 9)
                                              Filosofia
                                        @elseif($declaracao->disciplina == 10)
                                            Informática
                                        @elseif($declaracao->disciplina == 11)
                                             Geometria Descritiva
                                        @elseif($declaracao->disciplina == 12)
                                            DNL
                                        @elseif($declaracao->disciplina == 13)
                                           Educação Física
                                       
                                        @endif    </td>
                                <td>{{$declaracao->mensagem}}</td>
                                
                              
                             
                            </tr>
                         @endforeach 

                          
                        </table>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
</div>

        
  
@endsection