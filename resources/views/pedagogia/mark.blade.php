@extends('layouts.main_do')
@section('title','Estudante')
@section('content')

<di
<div class="col-12">
        <div class="card">
        @foreach( $provass as $prova) 
          
            <a class="btn btn-app bg-success" target="_blank" href=" /pedagogia/imprimir_individual/{{$prova->estudante_id}} " >
            @endforeach  
        
                <i class="fas fa-save"></i> Imprimir  Boletim  
              </a>
          <div class="card-header">
            <h3 class="card-title" style="font-weight: bolder; color: red;"> Dados da Turma</h3>
            
          </div>
          <!-- /.card-header -->
          
          <div class="card-body">

            <table id="example2" class="table table-bordered table-hover">
              <thead>
                <tr>
                <th>Disciplina</th>
                                        <th>Tipo de Prova</th>
                                        <th>Data</th>
                                        <th>Nota</th>
                    </tr>
              </thead>
              <tbody>
              @foreach( $provas as $prova) 
                                    <tr>
                                       
                                       
                                   <td >
                                @if($prova->mix_id == 1)
                                            Matemática
                                        @elseif($prova->mix_id == 2)
                                              Química
                                        @elseif($prova->mix_id == 3)
                                             Fisica
                                        @elseif($prova->mix_id == 4)
                                        L. Portuguesa
                                        @elseif($prova->mix_id == 5)
                                        Francês
                                        @elseif($prova->mix_id == 6)
                                        Inglês                
                                        @elseif($prova->mix_id == 7)
                                        Biologia
                                        @elseif($prova->mix_id == 8)
                                              Geologia
                                        @elseif($prova->mix_id == 9)
                                              Filosofia
                                        @elseif($prova->mix_id == 10)
                                            Informática
                                        @elseif($prova->mix_id == 11)
                                             Geometria Descritiva
                                        @elseif($prova->mix_id == 12)
                                            DNL
                                        @elseif($prova->mix_id == 13)
                                           Educação Física
                                       
                                       
                                        @endif
                                        </td>

                                     
                                        <td>
                                        @if($prova->tipo_id == 1)
                                            Avaliação 
                                        @elseif($prova->tipo_id == 2)
                                          Prova do Professor
                                        @elseif($prova->tipo_id == 3)
                                             Prova Trimestral
                                        @elseif($prova->tipo_id == 4)
                                            MAC
                                        
                                        @endif
                                       </td>
                                        <td>{{ $prova->data}}</td>
                                        <td>{{ $prova->nota}}</td>
                                       
                                    </tr>
                                    @endforeach  
           
               
                  
                     </tbody>
              <tfoot>
              
              </tfoot>
            </table>

            <div class="ln_solid"></div>
           
          </div>
          <!-- /.card-body -->
        </div>
    </div>
    
<br>
<br>
<br>
<br>
@endsection