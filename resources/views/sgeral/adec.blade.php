@extends('layouts.main_spg')
@section('title','Todos os estudantes')
@section('content')
           
<div class="product-status mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap drp-lst">
                            <h4>Estudantes</h4>
                           
                            <div class="asset-inner">
                                <table>
                                    <tr>
                                       
                                        <th>Id</th>
                                        <th>Nome do Estudante</th>
                                        <th>Classe / Turma</th>
                                        <th>Liceu</th>
                                      
                                      
                                        <th>Ver Informações</th>
                                       
                                        
                                    </tr>
                                    @foreach( $estudantes as $plano) 
                                    <tr>
                                    <td> {{ $plano->id}} </td>
                                    <td> {{ $plano->name}} </td>
                                    <td> @if($plano->classe == 1)
                                            10 A
                            @elseif($plano->classe == 2)
                                10 B
                            @elseif($plano->classe == 3)
                                11 A
                            @elseif($plano->classe == 4)
                                11 B
                            @elseif($plano->classe == 5)
                                12 A
                            @elseif($plano->classe == 6)
                                12 B
                            @elseif($plano->classe == 7)
                                -
                                      
                            @endif </td>
                                    <td>  @if($plano->liceu == 1)
                                            Caxito
                            @elseif($plano->liceu == 2)
                                Malanje
                            @elseif($plano->liceu == 3)
                                Ndalatando
                            @elseif($plano->liceu == 4)
                                Ondjiva
                               
                            @endif  </td>
                                 
                                   
                                     
                                       
                                       
                                       
                                       <td>
                                       <a href="/secretaria_geral/ver_dado_estudante/{{ $plano->id}}">
    <button data-toggle="tooltip" title="Ver dados" class="pd-setting-ed"><i class="fa fa-eye" aria-hidden="true" style="color: red;"></i></button>
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