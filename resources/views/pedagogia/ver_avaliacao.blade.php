@extends('layouts.main_do')
@section('title',' Orientações enviadas')
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
                                        <th>Agente</th>
                                        <th>Data da Avaliação</th>
                                        <th>Aperfeçoamento</th>
                                        <th>inovacao</th>
                                        <th>responsabilidade</th>
                                        <th>avaliacao</th>
                                       
                                        
                                    </tr>
                                    @foreach( $professores as $orientacao) 
                                    <tr>
                                    <td> {{ $orientacao->id}} </td>
                                    <td> {{ $orientacao->professor->name}} </td>
                                  
                                       
                                       
                                        <td> {{ $orientacao->nivel}} </td>
                                        <td> {{ $orientacao->cif}} </td>
                                        <td> {{ $orientacao->agente}} </td>
                                        <td> {{ $orientacao->data_avalicao}} </td>
                                        <td> {{ $orientacao->aperfeicoamento}} </td>
                                        <td> {{ $orientacao->inovacao}} </td>
                                        <td> {{ $orientacao->responsabilidade}} </td>
                                        <td> {{ $orientacao->avalicao}} </td>
                                      

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