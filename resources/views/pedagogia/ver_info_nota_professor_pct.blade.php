@extends('layouts.main_do')
@section('title','Enviar Notas')
@section('content')




<div class="alert-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
           
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="alert-wrap2 shadow-inner wrap-alert-b">
                    <div class="alert-title">
                        <h2>Indicações para as notas</h2>
                        
                    </div>
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        <strong>
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
                            <h4>Notas Lançadas</h4>
                           
                            <div class="asset-inner">
                                <table>
                                    <tr>
                                       
                                         <th style="color: red;">Estudante</th>
                                     
                                        <th style="color: red;">Tipo de Prova</th>
                                        <th style="color: red;">Data de Realização</th>
                                        <th style="color: red;">Nota</th>
                                      
                                      
                                        
                                    </tr>
                                    @foreach( $provas as $prova) 
                                    <tr>
                                    <td>{{ $prova->estudante->name}}</td>
                                       
                                 

                                     
                                        <td>
                                        @if($prova->tipo_id == 1)
                                            Avaliação 
                                        @elseif($prova->tipo_id == 2)
                                            Prova do Professor
                                        @elseif($prova->tipo_id == 3)
                                             Prova Trimestral
                                        @elseif($prova->tipo_id == 3)
                                             Prova Trimestral
                                        
                                        @endif
                                       </td>
                                        <td>{{ $prova->data}}</td>
                                        <td>{{ $prova->nota}}</td>
                                      
                                      
                                    </tr>
                                    @endforeach  
                                   
                                </table>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
          
       
@endsection