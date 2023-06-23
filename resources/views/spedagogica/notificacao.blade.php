@extends('layouts.main_spo')
@section('title','Notificações')
@section('content')
<div class="product-status mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap drp-lst">
                            <h4>Notificações do Director Geral</h4>
                           
                            <div class="asset-inner">
                                <table>
                                    <tr>
                                       
                                    
                                        <th>Tipo</th>
                                        <th>Nome do remetente</th>
                                        <th>Mensagem</th>
                                        <th>Data</th>
                                        
                                    </tr>
                                    @foreach( $geral as $prova) 
                                    <tr>
                                       
                                       
                                   <td>@if($prova->tipo == 1)
                                            Prova
                                        @elseif($prova->tipo == 2)
                                              Concurso
                                        @elseif($prova->tipo == 3)
                                             Aviso
                                      
                                        @endif
                                        </td>

                                        <td>{{ $prova->geral->name}}</td>
                                     
                                        <td>{{ $prova->mensagem}}</td>
                                        <td>{{ $prova->created_at}}</td>
                                        <td>
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
          

        <div class="product-status mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap drp-lst">
                            <h4>Notificações do Director Geral</h4>
                           
                            <div class="asset-inner">
                                <table>
                                    <tr>
                                       
                                    
                                        <th>Tipo</th>
                                        <th>Nome do remetente</th>
                                        <th>Mensagem</th>
                                        <th>Data</th>
                                        
                                    </tr>
                                    @foreach( $administrativa as $prova) 
                                    <tr>
                                       
                                       
                                   <td>@if($prova->tipo == 1)
                                            Prova
                                        @elseif($prova->tipo == 2)
                                              Concurso
                                        @elseif($prova->tipo == 3)
                                             Aviso
                                      
                                        @endif
                                        </td>

                                        <td>{{ $prova->administracao->name}}</td>
                                        <td>{{ $prova->mensagem}}</td>
                                       
                                        <td>{{ $prova->created_at}}</td>
                                        <td>
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