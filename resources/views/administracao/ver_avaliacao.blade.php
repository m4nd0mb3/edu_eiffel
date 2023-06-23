@extends('layouts.main_ao')
@section('title',' Avaliações enviadas')
@section('content')
<div class="product-status mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap drp-lst">
                            <h4>Avaliações Enviadas</h4>
                           
                            <div class="asset-inner">
                                <table>
                                    <tr>
                                          <th>Id</th>
                                        <th>Professor</th>
                                        <th>Nivel</th>
                                        <th>CIF</th>
                                        <th>Adaptação Profissional</th>
                                        <th>Data da Avaliação</th>
                                        <th>Classificação</th>
                                        <th>Inicio do Periodo da Notação</th>
                                        <th>Final do periodo da Notaçaõ</th>
                                        <th>Competência Profissional</th>
                                        <th>Cumprimentos das Tarefas</th>
                                        <th> Relações Humanas</th>

                                        <th>Pontuação final Obtida</th>
                                    
                                        
                                    </tr>
                                    @foreach( $professores as $orientacao) 
                                    <tr>
                                    <td> {{ $orientacao->id}} </td>
                                    <td> {{ $orientacao->funcionario->name}} </td>
                                  
                                       
                                       
                                        <td> {{ $orientacao->categoria}} </td>
                                        <td> {{ $orientacao->cif}} </td>
                                        <td> {{ $orientacao->agente}} </td>
                                        <td> {{ $orientacao->data_avalicao}} </td>
                                        <td> {{ $orientacao->classificacao}} </td>
                                        <td> {{ $orientacao->periodo_inicial}} </td>
                                        <td> {{ $orientacao->periodo_final}} </td>
                                        <td> {{ $orientacao->competencia}} </td>
                                        <td> {{ $orientacao->cumprimento}} </td>
                                        <td> {{ $orientacao->reclonalizacao}} </td>
                                        <td> {{ $orientacao->capacidade}} </td>
                                        <td> {{ $orientacao->pontuacao}} </td>
                                       
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