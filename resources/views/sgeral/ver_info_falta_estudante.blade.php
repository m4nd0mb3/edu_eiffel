@extends('layouts.main_spg')
@section('title','Ver Faltas')
@section('content')
<div class="product-status mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap drp-lst">
                            <h4>Faltas dos Estudantes</h4>
                           
                            <div class="asset-inner">
                                <table>
                                    <tr>
                                       
                                        <th>Id</th>
                                        <th>Nome do Professor</th>
                                        <th>Número de Faltas</th>
                                      
                                      
                                        <th>Ver Faltas</th>
                                       
                                        
                                    </tr>
                                    @foreach( $totals as $plano) 
                                    <tr>
                                    <td> {{ $plano->id}} </td>
                                    <td> {{ $plano->name}} </td>
                                    <td> {{ $plano->total}} </td>
 
                                       <td>
                                       <a href="/secretaria_geral/ver_info_falta_total_estudante/{{ $plano->liceu}}/{{ $plano->classe}}/{{ $plano->id}}">
    <button data-toggle="tooltip" title="Ver Planos" class="pd-setting-ed"><i class="fa fa-eye" aria-hidden="true" style="color: red;"></i></button>
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