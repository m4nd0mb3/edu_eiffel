@extends('layouts.main_ao')
@section('title','Ver Planos')
@section('content')
<div class="product-status mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap drp-lst">
                            <h4>Relatório Enviados</h4>
                           
                            <div class="asset-inner">
                                <table>
                                    <tr>
                                       
                                        <th>Id</th>
                                      
                                      
                                        <th>Tipo</th>
                                        <th>Data</th>
                                        <th>Descrição</th>
                                        <th>Ficheiro</th>
                                        <th>Opção</th>
                                        
                                    </tr>
                                    @foreach( $relatorios as $plano) 
                                    <tr>
                                 
                                       
                                    <td> {{ $plano->id}} </td>
                                    <td> @if($plano->tipo == 1)
                                               Mensal
                                            @elseif($plano->tipo == 2)
                                              Trimestral
                                            @elseif($plano->tipo == 3)
                                              Anual
                                        
                                                    
                                            @endif</td>
                                            <td> {{ $plano->data}} </td>
                                       
                                      
                                        
                                        <td> {{ $plano->descricao}} </td>
                                      
                            <td> {{ $plano->anexo}} </td>

                                        <td>
                                            <a href="/media/ondjiva/administracao/relatorio/{{$plano->anexo}}" download = "Relatorio {{ $plano->data}}   ">
                                            <button data-toggle="tooltip" title="Baixar" class="pd-setting-ed">	<i class="fa fa-download"></i></button>

                                            </a>
                                           
                                        </td>
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