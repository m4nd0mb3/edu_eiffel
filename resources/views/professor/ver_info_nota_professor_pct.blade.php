@extends('layouts.main_do')
@section('title','Notas das PCTs')
@section('content')

<div class="alert-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
           
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="alert-wrap2 shadow-inner wrap-alert-b">
                    <div class="alert-title">
                        
                    </div>
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        <strong>
                            <li>Apenas Podera exercer essa funcionalidade quando o tipo for Prova do Professor/Trimestral</li>
                            <li>Imprimir Cadenerta de Provas No final do Trimestre</li>
                          
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
                            <h4> Notas das PCT's </h4>
                           
                            <div class="asset-inner">
                                <table>
                                    <tr>
                                       
                                         <th>Data de Envio das Provas</th>
                                        <th>Numero de provas Enviadas</th>
                                        <th>Disciplina</th>
                                        <th>classe</th>
                                        <th>Ver Provas</th>
                                        
                                        
                                    </tr>
                                    @foreach( $provas as $prova) 
                                    <tr>
                                   
                                     
                                       
                                        <td>{{ $prova->created_at}}</td>
                                        <td>{{ $prova->total}}</td>
                                        <td>@if($prova->disciplina_id == 1)
                                            Matemática
                                        @elseif($prova->disciplina_id == 2)
                                              Química
                                        @elseif($prova->disciplina_id == 3)
                                             Fisica
                                        @elseif($prova->disciplina_id == 4)
                                        L. Portuguesa
                                        @elseif($prova->disciplina_id == 5)
                                        Francês
                                        @elseif($prova->disciplina_id == 6)
                                        Inglês                
                                        @elseif($prova->disciplina_id == 7)
                                        Biologia
                                        @elseif($prova->disciplina_id == 8)
                                              Geologia
                                        @elseif($prova->disciplina_id == 9)
                                              Filosofia
                                        @elseif($prova->disciplina_id == 10)
                                            Informática
                                        @elseif($prova->disciplina_id == 11)
                                             Geometria Descritiva
                                        @elseif($prova->disciplina_id == 12)
                                            DNL
                                        @elseif($prova->disciplina_id == 13)
                                           Educação Física
                                       
                                       
                                        @endif</td>
                                        <td>@if($prova->classe == 1)
                                            10 A
                            @elseif($prova->classe == 2)
                                10 B
                            @elseif($prova->classe == 3)
                                11 A
                            @elseif($prova->classe == 4)
                                11 B
                            @elseif($prova->classe == 5)
                                12 A
                            @elseif($prova->classe == 6)
                                12 B
                            @elseif($prova->classe == 7)
                                -
                                      
                            @endif</td>
                                      <td>
                                      <a href="/pedagogia/ver_info_nota_professor_pct/{{ $prova->created_at}}">
    <button data-toggle="tooltip" title="Ver provas" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true" style="color: red;"></i></button>
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
    