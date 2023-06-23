@extends('layouts.main_do')
@section('title','Ver Notas')
@section('content')
<div class="product-status mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap drp-lst">
                            <h4>Notas das Provas Trimestrais(PCT) Lançadas</h4>
                           
                            <div class="asset-inner">
                                <table>
                                    <tr>
                                       
                                        <th>Id do Professor</th>
                                        <th>Nome do Professor</th>
                                        <th>Número de PCT's Do Professor</th>
                                      
                                      
                                        <th>Ver PCT's</th>
                                       
                                        
                                    </tr>
                                    @foreach( $totals as $plano) 
                                    <tr>
                                    <td> {{ $plano->id}} </td>
                                    <td> {{ $plano->name}} </td>
                                   
                                    <td> {{ $plano->total}} </td>
                                 
                                   
                                     
                                       
                                       
                                       
                                       <td>
                                       <a href="/pedagogia/ver_boletim_professor_pct/{{ $plano->id}}">
    <button data-toggle="tooltip" title="Ver boletim" class="pd-setting-ed"><i class="fa fa-eye" aria-hidden="true" style="color: red;"></i></button>
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