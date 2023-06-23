@extends('layouts.main_spo')
@section('title','Enviar Notas')
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
                        <strong>Falta!</strong> Enviadas com Sucesso, <a href=""><span>Ver</span></a>.
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
                        <strong>Erro!</strong> Falta não enviadas, <a href="{{ route('secretaria_pedagogica_ondjiva.ver_festudante') }}"><span>Ver</span></a>..
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
                                            <span class="caption-subject"><b>Enviar Faltas Dos Estudantes</b></span>
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
                                <form action="{{ route ('secretaria_pedagogica_ondjiva.des_A')}}" method = "post" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
           
                                {{csrf_field()}}
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                <div class="form-group row">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="tipo"> <span class="required">Estudante</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                        <select name="estudante_id" id="required" class="form-control ">
                        @foreach( $estudantes as $estudante) 
                                <option value="{{ $estudante->id}}">{{$estudante->name}}</option>
                        @endforeach 
                               
                              </select> 
                        </div>
                      </div>
             
           <div class="form-group row">
                      <label class="col-form-label col-md-3 col-sm-3 label-align" for="disciplina"> <span class="required">Disciplina</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                        <select name="disciplina" id="required" class="form-control ">
                        @foreach( $disciplinas as $disciplina) 
                                <option value="{{ $disciplina->id}}">{{$disciplina->disciplina}}</option>
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
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="liceu"> <span class="required">Liceu</span>
                          </label>
                          <div class="col-md-6 col-sm-6 ">
                          <select name="liceu" id="required" class="form-control ">
                          
                          <option value="  {{ Auth::guard('secretaria_pedagogica_ondjiva')->user()->liceu }}">
                              
                                @if(Auth::guard('secretaria_pedagogica_ondjiva')->user()->liceu == 1)
                                                Caxito
                                            @elseif(Auth::guard('secretaria_pedagogica_ondjiva')->user()->liceu == 2)
                                                  Malanje
                                            @elseif(Auth::guard('secretaria_pedagogica_ondjiva')->user()->liceu == 3)
                                  Ndalatando
                                            @elseif(Auth::guard('secretaria_pedagogica_ondjiva')->user()->liceu == 4)
                                                  
                                                Ondjiva
                                @endif</option>
                       
                                </select> 
                          </div>
                        </div>   

                     
                        <div class="form-group row">
                      <label class="col-form-label col-md-3 col-sm-3 label-align" for="classe"> <span class="required">Classe</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                        <select name="classe" id="required" class="form-control ">
                        
                                <option value="5">12ª A</option> 
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