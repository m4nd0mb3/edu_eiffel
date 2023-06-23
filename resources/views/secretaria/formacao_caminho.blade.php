@extends('layouts.main_so')
@section('title','Enviar Formação')
@section('content')



@if (Session::get('success'))
<div class="alert-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="alert-wrap2 shadow-inner wrap-alert-b">
                   
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        <strong>Formação!</strong> Enviadas com Sucesso, <a href="{{ route('secretaria_administrativa.ver_formacao') }}""><span>Ver</span></a>.
                    </div>
                   
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endif
@if (Session::get('fail'))
<div class="alert-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="alert-wrap2 shadow-inner wrap-alert-b">
                   
                    <div class="alert alert-danger alert-mg-b">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        <strong>Erro!</strong> Falta não enviadas, <a href=""><span>Ver</span></a>..
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
<div class="product-sales-area mg-tb-30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-sales-chart">
                            <div class="portlet-title">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="caption pro-sl-hd">
                                            <span class="caption-subject"><b>Enviar formação para os Professores</b></span>
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
                                <form action="{{ route ('secretaria_administrativa.formacao')}}" method = "post" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
           
           
                                    {{csrf_field()}}
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                <div class="form-group row">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="tipo"> <span class="required">Professor</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                        <select name="professor_id" id="required" class="form-control ">
                        @foreach( $professores as $professor) 
                                <option value="{{ $professor->id}}">{{$professor->name}}</option>
                        @endforeach 
                               
                              </select> 
                        </div>
                      </div>
             
           <div class="form-group row">
                      <label class="col-form-label col-md-3 col-sm-3 label-align" for="tipo"> <span class="required">Disciplina</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                        <select name="disciplina" id="required" class="form-control ">
                        @foreach( $disciplinas as $disciplina) 
                                <option value="{{ $disciplina->id}}">{{$disciplina->disciplina}}</option>
                        @endforeach 
                              </select> 
                        </div>
                      </div>

                      <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="tema"> Id da Formação<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                             
                              <textarea type="text" id="id_formacao" name="id_formacao" rows="5" required="required" class="form-control " style="height: 100px;"></textarea>
                            </div>
                          </div>
                      <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="tema"> Tema<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                             
                              <textarea type="text" id="mensagem" name="mensagem" rows="5" required="required" class="form-control " style="height: 100px;"></textarea>
                            </div>
                          </div>

                          
                      <div class="item form-group">
                        <label for = "data_inicio" class="col-form-label col-md-3 col-sm-3 label-align">Data de inicio<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input id="data" name="data_inicio" class="date-picker form-control" placeholder="dd-mm-yyyy" type="text" required="required" type="text" onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'" onblur="this.type='text'" onmouseout="timeFunctionLong(this)">
                          <script>
                            function timeFunctionLong(input) {
                              setTimeout(function() {
                                input.type = 'text';
                              }, 60000);
                            }
                          </script>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label for = "data_termino" class="col-form-label col-md-3 col-sm-3 label-align">Data de termino<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input id="data_termino" name="data_termino" class="date-picker form-control" placeholder="dd-mm-yyyy" type="text" required="required" type="text" onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'" onblur="this.type='text'" onmouseout="timeFunctionLong(this)">
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
                      <label class="col-form-label col-md-3 col-sm-3 label-align" for="liceu"> <span class="required">Liceu</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                        <select name="liceu" id="required" class="form-control ">
                        
                        <option value="  {{ Auth::guard('secretaria_administrativa')->user()->liceu }}">
                              
                              @if(Auth::guard('secretaria_administrativa')->user()->liceu == 1)
                                              Caxito
                                          @elseif(Auth::guard('secretaria_administrativa')->user()->liceu == 2)
                                                Malanje
                                          @elseif(Auth::guard('secretaria_administrativa')->user()->liceu == 3)
                                Ndalatando
                                          @elseif(Auth::guard('secretaria_administrativa')->user()->liceu == 4)
                                                
                                              Ondjiva
                              @endif</option>
                     
                              </select> 
                        </div>
                      </div>

                    
            
                                     
                     
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