@extends('layouts.main_spg')
@section('title','Secretaria')
@section('content')


        
<div class="product-status mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-status-wrap drp-lst">
                    <h4>Declarações dos estudantes</h4>
                    
                    <div class="asset-inner">
                        <table>
                            <tr>
                                <th>Número</th>
                                <th>Nome do Estudante</th>
                                
                               
                                <th>Tipo</th>
                                <th>Classe / Turma</th>
                                <th>Data</th>
                                <th>Opção</th>
                               
                            </tr>

                            @foreach( $declaracoes as $declaracao) 
                            <tr>
                                <td>{{$declaracao->id}}</td>
                                <td>{{$declaracao->estudante->name}}</td>
                                <td> @if($declaracao->tipo == 1)
                            Declaração sem nota
                        @elseif($declaracao->tipo == 2)
                            Declaração com notas
                            @elseif($declaracao->tipo == 3)
                            Outro
                        
                                                              
                        @endif</td>
                        <td>
                        @if($declaracao->estudante->classe == 1)
                                        10 A
                                        
                            @elseif($$declaracao->estudante->classe == 2)
                                10 B
                            @elseif($$declaracao->estudante->classe == 3)
                                11 A
                            @elseif($$declaracao->estudante->classe == 4)
                                11 B
                            @elseif($$declaracao->estudante->classe == 5)
                                12 A
                            @elseif($$declaracao->estudante->classe == 6)
                                12 B
                            @elseif($$declaracao->estudante->classe == 7)
                                -        
                            @endif</td>
                                <td>{{$declaracao->created_at}}</td>
                                
                              
                                <td>
                                    <button data-toggle="tooltip" title="Criar" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                    <button data-toggle="tooltip" title="Eliminar" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                </td>
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