@extends('layouts.main_ao')
@section('title','Notificações')
@section('content')
<div class="product-status mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap drp-lst">
                            <h4>Notificações enviadas aos estudantes</h4>
                           
                            <div class="asset-inner">
                                <table>
                                    <tr>
                                       
                                    
                                        <th>Tipo</th>
                                        <th>Nome do Estudante</th>
                                        <th>Turma</th>
                                        <th>Classe</th>
                                        <th>mensagem</th>
                                        <th>Data</th>
                                        
                                    </tr>
                                    @foreach( $estudantes as $prova) 
                                    <tr>
                                       
                                       
                                   <td>@if($prova->tipo == 1)
                                            Prova
                                        @elseif($prova->tipo == 2)
                                              Concurso
                                        @elseif($prova->tipo == 3)
                                             Aviso
                                      
                                        @endif
                                        </td>

                                     
                                        <td>{{ $prova->estudante->name}}</td>
                                        <td>   @if($prova->classe == 1)
                                            10º
                                        @elseif($prova->classe == 2)
                                            11º
                                        @elseif($prova->classe == 3)
                                            12º
                                       
                                      
                                       
                                        @endif </td>
                                        <td>  @if($prova->turma == 1)
                                            A
                                        @elseif($prova->turma == 2)
                                              B
                                        
                                        @endif </td>
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
                            <h4>Notificações dos Professores</h4>
                           
                            <div class="asset-inner">
                                <table>
                                    <tr>
                                       
                                    
                                        <th>Tipo</th>
                                        <th>Nome do Professor</th>
                                        <th>Mensagem</th>
                                        <th>Data</th>
                                        
                                    </tr>
                                    @foreach( $professores as $prova) 
                                    <tr>
                                       
                                       
                                   <td>@if($prova->tipo == 1)
                                            Falta
                                        @elseif($prova->tipo == 2)
                                              Avisos
                                        @elseif($prova->tipo == 3)
                                             Atrasos
                                      
                                        @endif
                                        </td>

                                     
                                        <td>{{ $prova->professor->name}}</td>
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
                            <h4>Notificações dos Secretarios Administrativos</h4>
                           
                            <div class="asset-inner">
                            <table>
                                    <tr>
                                       
                                    
                                        <th>Tipo</th>
                                        <th>Nome do Secretario</th>
                                        <th>Mensagem</th>
                                        <th>Data</th>
                                        
                                    </tr>
                                    @foreach( $secretarios as $prova) 
                                    <tr>
                                       
                                       
                                   <td>@if($prova->tipo == 1)
                                            Atrasos
                                        @elseif($prova->tipo == 2)
                                              Irregularidades
                                        @elseif($prova->tipo == 3)
                                             Aviso
                                      
                                        @endif
                                        </td>

                                     
                                        <td>{{ $prova->secretaria->name}}</td>
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
                            <h4>Notificações dos Secretarios Pedagogicos</h4>
                           
                            <div class="asset-inner">
                            <table>
                                    <tr>
                                       
                                    
                                        <th>Tipo</th>
                                        <th>Nome do Secretario</th>
                                        <th>Mensagem</th>
                                        <th>Data</th>
                                        
                                    </tr>
                                    @foreach( $secretariosp as $prova) 
                                    <tr>
                                       
                                       
                                   <td>@if($prova->tipo == 1)
                                            Atrasos
                                        @elseif($prova->tipo == 2)
                                              Irregularidades
                                        @elseif($prova->tipo == 3)
                                             Aviso
                                      
                                        @endif
                                        </td>

                                     
                                        <td>{{ $prova->secretaria->name}}</td>
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