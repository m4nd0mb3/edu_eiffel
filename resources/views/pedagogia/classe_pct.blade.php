@extends('layouts.main_do')
@section('title','Enviar Notas')
@section('content')

<div class="alert-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
           
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="alert-wrap2 shadow-inner wrap-alert-b">
                    <div class="alert-title">
                        <h2>Indicações para o envio de notas</h2>
                        
                    </div>
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        <strong>
                            <li>Selecione o tipo de Prova que sera enviada</li>
                            <li>Selecione a Disciplina que foi avaliada</li>
                            <li> Selecione a Classe e a Turma que Pretente enviar</li>
                            <li> Selecione O número maximo de Estudantes do final da Pagina</li>
                            <li>Clique em enviar</li>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>

<div class="product-sales-area mg-tb-30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-sales-chart">
                            <div class="portlet-title">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="caption pro-sl-hd">
                                            <span class="caption-subject"><b>Enviar Notas para os estudantes</b></span>
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                                                  </div>
                    </div>
                </div>
            </div>
</div>





<div class="data-table-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                 
                                </div>
                            </div>
                            <div class="sparkline13-graph">

                            @foreach( $estudantess as $prova) 
                                <form action="/pedagogia/enviar_nota_pct/{{$prova->liceu}}/{{$prova->classe}}" method = "post" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
           
                            @endforeach      
           
                                    {{csrf_field()}}
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                <div class="form-group row">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="tipo"> <span class="required">Tipo de Prova</span>
                        </label>
                        <div class="col-md-6 scol-sm-6 ">
                        <select name="tipo_id" id="required" class="form-control ">
                        @foreach( $tipo_provas as $prova) 
                        <option value="{{$prova->id}}">{{$prova->tp_falta}}
                                   </option>
                        @endforeach      
                               
                                
                              </select> 
                        </div>
                      </div>

                      <div class="form-group row">
                      <label class="col-form-label col-md-3 col-sm-3 label-align" for="disciplina"> <span class="required">Professor</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                        <select name="professor_id" id="required" class="form-control ">
                        @foreach( $professores as $professor) 
                        <option value="{{$professor->id}}">
                        {{ $professor->name}}
                        </option>

                          
                             @endforeach      
                        
                              </select> 
                        </div>
                      </div>
             
           <div class="form-group row">
                      <label class="col-form-label col-md-3 col-sm-3 label-align" for="disciplina"> <span class="required">Disciplina</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                        <select name="disciplina_id" id="required" class="form-control ">
                        @foreach( $tipo_disciplinas as $professor) 
                        <option value="{{$professor->id}}">
                        {{ $professor->disciplina}}
                        </option>

                          
                             @endforeach      
                        
                              </select> 
                        </div>
                      </div>
                      <div class="item form-group">
                        <label for = "data" class="col-form-label col-md-3 col-sm-3 label-align">Data<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input id="data" name="data" class="date-picker form-control" placeholder="dd-mm-yyyy" type="text" required="required" type="text" onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'" onblur="this.type='text'" onmouseout="timeFunctionLong(this)">
                          <script>
                            function timeFunctionLong(input) {
                              setTimeout(function() {
                                input.type = 'text';
                              }, 60000);
                            }
                          </script>
                        </div>
                      </div>
                      <div class="form-group row">
                      <label class="col-form-label col-md-3 col-sm-3 label-align" for="classe"> <span class="required">Classe</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                        <select name="classe" id="required" class="form-control ">
                        @foreach( $estudantess as $prova) 
                        <option value="{{$prova->classe}}">@if($prova->classe == 1)
                                    10 A
                                    @elseif($prova->classe == 2)
                                        10 B
                                    @elseif($prova->classe == 3)
                                        11 A
                                    @elseif($prova->classe == 4)
                                        11 B
                                    @elseif($prova->classe == 5)
                                        12 A
                                    @elseif($prova->classe== 6)
                                        12 B
                                    @elseif($prova->classe == 7)
                                        -
                                            
                                    @endif</option>
                        @endforeach      
                       
                              </select> 
                        </div>
                      </div>
                     
                      <div class="form-group row">
                      <label class="col-form-label col-md-3 col-sm-3 label-align" for="liceu"> <span class="required">Liceu</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                        <select name="liceu" id="required" class="form-control ">
                        
                        <option value="  {{ Auth::guard('pedagogia')->user()->liceu }}">
                              
                              @if(Auth::guard('pedagogia')->user()->liceu == 1)
                                              Caxito
                                          @elseif(Auth::guard('pedagogia')->user()->liceu == 2)
                                                Malanje
                                          @elseif(Auth::guard('pedagogia')->user()->liceu == 3)
                                Ndalatando
                                          @elseif(Auth::guard('pedagogia')->user()->liceu == 4)
                                                
                                              Ondjiva
                              @endif</option>
                              </select> 
                        </div>
                      </div>

                    

                                    <table id="table" data-toggle="table" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                        data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                        <thead>
                                            <tr>
                                               
                                                <th data-field="id">ID</th>
                                                <th data-field="name">Nome</th>
                                               
                                                <th data-field="complete">Email</th>
                                                <th data-field="task" >Nota</th>
                                               
                                            </tr>
                                        </thead>
                        
                                        <tbody>
                                        @foreach( $estudantes as $estudante) 
                                            <tr>
                                               
                                                <td ><input type="text" id="estudante_id" required="required" value="{{ $estudante->id}}" class="form-control  " readonly  name="estudante_id[]" /> </td>
                                                <td>{{ $estudante->name}}</td>
                                                
                                               

                                                <td>{{ $estudante->email}}</td>
                                                
                                                <td > <input type="number" id="quantity" name="nota[]" min="0" max="20"  step="any"></td>
                                              
                                            </tr>
                                        @endforeach 
                                    </tbody>
                                </table>
                                
                
                      <div class="ln_solid"></div>
                      <div class=" form-group">
                        <div class="col-form-label col-md-3 col-sm-3 label-align">
                          <button class="btn btn-primary" type="button">Cancelar</button>
                          <button class="btn btn-primary" type="reset">Limpar</button>
                          <button type="submit" class="btn btn-success">Enviar</button>
                        </div>
                      </div>
            
                   
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        


@endsection