@extends('layouts.main_eo')
@section('title','Estudante')
@section('content')


<div class="product-status mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap drp-lst">
                            <h4>Horario ano lectivo 2022/2023</h4>
                           
                            <div class="asset-inner">
                                <table>
                                    <tr>
                                       
                                    
                                      
                                        <th>Segunda-Feira</th>
                                        <th>Terça-Feira</th>
                                        <th>Quarta-Feira</th>
                                        <th>Quinta-Feira</th>
                                        <th>Sexta-Feira</th>
                                        
                                        
                                    </tr>
                                    @foreach( $orientacoes as $prova) 
                                    <tr>
                                       
                                     
                                   <td style="background-color: red;">@if($prova->tempo_um == 1)
                                            Matemática
                                        @elseif($prova->tempo_um == 2)
                                              Fisica
                                        @elseif($prova->tempo_um == 3)
                                             Quimíca
                                        @elseif($prova->tempo_um == 4)
                                        L. Portuguesa
                                        @elseif($prova->tempo_um == 5)
                                        Francês
                                        @elseif($prova->tempo_um == 6)
                                        Inglês                
                                        @elseif($prova->tempo_um == 7)
                                        Biologia
                                        @elseif($prova->tempo_um == 8)
                                              Geologia
                                        @elseif($prova->tempo_um == 9)
                                              Filosofia
                                        @elseif($prova->tempo_um == 10)
                                              Educação Fisica
                                        @elseif($prova->tempo_um == 11)
                                              DNL
                                        @elseif($prova->tempo_um == 12)
                                              Matematique Bilingue
                                        @elseif($prova->tempo_um == 13)
                                              Informática
                                        @elseif($prova->tempo_um == 14)
                                              Geometria Analitica
                                       
                                        @endif

                                       
                                        </td>

                                     
                                        <td style="background-color: green;">@if($prova->tempo_dois == 1)
                                            Matemática
                                        @elseif($prova->tempo_dois == 2)
                                              Fisica
                                        @elseif($prova->tempo_dois == 3)
                                             Quimíca
                                        @elseif($prova->tempo_dois == 4)
                                        L. Portuguesa
                                        @elseif($prova->tempo_dois == 5)
                                        Francês
                                        @elseif($prova->tempo_dois == 6)
                                        Inglês                
                                        @elseif($prova->tempo_dois == 7)
                                        Biologia
                                        @elseif($prova->tempo_dois == 8)
                                              Geologia
                                        @elseif($prova->tempo_dois == 9)
                                              Filosofia
                                        @elseif($prova->tempo_dois == 10)
                                              Educação Fisica
                                        @elseif($prova->tempo_dois == 11)
                                              DNL
                                        @elseif($prova->tempo_dois == 12)
                                              Matematique Bilingue
                                        @elseif($prova->tempo_dois == 13)
                                              Informática
                                        @elseif($prova->tempo_dois == 14)
                                              Geometria Analitica
                                       
                                        @endif</td>

                                        <td style="background-color: rgb(47, 24, 177);">@if($prova->tempo_tres == 1)
                                            Matemática
                                        @elseif($prova->tempo_tres == 2)
                                              Fisica
                                        @elseif($prova->tempo_tres == 3)
                                             Quimíca
                                        @elseif($prova->tempo_tres == 4)
                                        L. Portuguesa
                                        @elseif($prova->tempo_tres == 5)
                                        Francês
                                        @elseif($prova->tempo_tres == 6)
                                        Inglês                
                                        @elseif($prova->tempo_tres == 7)
                                        Biologia
                                        @elseif($prova->tempo_tres == 8)
                                              Geologia
                                        @elseif($prova->tempo_tres == 9)
                                              Filosofia
                                        @elseif($prova->tempo_tres == 10)
                                              Educação Fisica
                                        @elseif($prova->tempo_tres == 11)
                                              DNL
                                        @elseif($prova->tempo_tres == 12)
                                              Matematique Bilingue
                                        @elseif($prova->tempo_tres == 13)
                                              Informática
                                        @elseif($prova->tempo_tres == 14)
                                              Geometria Analitica
                                       
                                        @endif</td>
                                        <td style="background-color: rgb(22, 208, 225);">@if($prova->tempo_quatro == 1)
                                            Matemática
                                        @elseif($prova->tempo_quatro == 2)
                                              Fisica
                                        @elseif($prova->tempo_quatro == 3)
                                             Quimíca
                                        @elseif($prova->tempo_quatro == 4)
                                        L. Portuguesa
                                        @elseif($prova->tempo_quatro == 5)
                                        Francês
                                        @elseif($prova->tempo_quatro == 6)
                                        Inglês                
                                        @elseif($prova->tempo_quatro == 7)
                                        Biologia
                                        @elseif($prova->tempo_quatro == 8)
                                              Geologia
                                        @elseif($prova->tempo_quatro == 9)
                                              Filosofia
                                        @elseif($prova->tempo_quatro == 10)
                                              Educação Fisica
                                        @elseif($prova->tempo_quatro == 11)
                                              DNL
                                        @elseif($prova->tempo_quatro == 12)
                                              Matematique Bilingue
                                        @elseif($prova->tempo_quatro == 13)
                                              Informática
                                        @elseif($prova->tempo_quatro == 14)
                                              Geometria Analitica
                                       
                                        @endif</td>
                                        <td style="background-color: rgb(198, 54, 143);">

                                            @if($prova->tempo_cinco == 1)
                                            Matemática
                                        @elseif($prova->tempo_cinco == 2)
                                              Fisica
                                        @elseif($prova->tempo_cinco == 3)
                                             Quimíca
                                        @elseif($prova->tempo_cinco == 4)
                                        L. Portuguesa
                                        @elseif($prova->tempo_cinco == 5)
                                        Francês
                                        @elseif($prova->tempo_cinco == 6)
                                        Inglês                
                                        @elseif($prova->tempo_cinco == 7)
                                        Biologia
                                        @elseif($prova->tempo_cinco == 8)
                                              Geologia
                                        @elseif($prova->tempo_cinco == 9)
                                              Filosofia
                                        @elseif($prova->tempo_cinco == 10)
                                              Educação Fisica
                                        @elseif($prova->tempo_cinco == 11)
                                              DNL
                                        @elseif($prova->tempo_cinco == 12)
                                              Matematique Bilingue
                                        @elseif($prova->tempo_cinco == 13)
                                              Informática
                                        @elseif($prova->tempo_cinco == 14)
                                              Geometria Analitica
                                       
                                        @endif
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