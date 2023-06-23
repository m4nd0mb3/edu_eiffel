@extends('layouts.main_so')
@section('title','Ver Faltas dos Funcionarios')
@section('content')
<div class="product-status mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap drp-lst">
                            <h4>Faltas dos Funcionarios</h4>
                           
                            <div class="asset-inner">
                                <table>
                                    <tr>
                                       
                                        
                                        <th>Id</th>
                                        
                                      
                                        <th>Data</th>

                                    </tr>
                                    @foreach( $professores as $solicitacao) 
                               
                                        <td> {{ $solicitacao->id}} </td>
                                        <td> {{ $solicitacao->data}} </td>
                                       
                                       

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