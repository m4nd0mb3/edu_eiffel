@extends('layouts.main_ao')
@section('title','Ver Faltas')
@section('content')
<div class="product-status mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap drp-lst">
                            <h4>Declarações</h4>
                           
                            <div class="asset-inner">
                            <table>
                                    <tr>
                                       
                                        
                                        <th>id</th>
                                        <th>nome</th>
                                        <th>Disciplina</th>
                                        <th>Data</th>
                                        <th>Classe</th>
                                      
                                      
                                        
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

                                    </tr>
                                    @endforeach  
                                   
                                </table>
                            </div>
                            <div class="custom-pagination">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination">
                                        <li class="page-item"><a class="page-link" href="#">Anterior</a></li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">Seguinte</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
          
@endsection