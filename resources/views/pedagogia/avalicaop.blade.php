@extends('layouts.main_do')
@section('title','Enviar avaliação Professores')
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
                        <strong>Falta!</strong> Enviadas com Sucesso, <a href="{{ route('pedagogia.ver_avaliacao') }}"><span>Ver</span></a>.
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
                        <strong>Erro!</strong> Falta não enviadas, <a href="{{ route('pedagogia.ver_avaliacao') }}"><span>Ver</span></a>..
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
                                            <span class="caption-subject"><b>Enviar Avaliação de desempenho para os Professores</b></span>
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
                                <form action="{{ route('pedagogia.avaliacao') }}" method = "post" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
           
           
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
                      <label class="col-form-label col-md-3 col-sm-3 label-align" for="liceu"> <span class="required">Categoria</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                        <select name="nivel" id="required" class="form-control ">
                        
                                <option value="1">Mestre</option> 
                                <option value="2">Licenciado</option> 
                                <option value="3">Tecnico medio</option> 
                              </select> 
                        </div>
                      </div>
                      <div class="form-group row">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="name"> CIF<span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                         
                                          <input type="text" id="name" name="cif" required="required" class="form-control " />
                                        </div>
                                      </div>

                                      <div class="form-group row">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="name"> Agente<span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                         
                                          <input type="text" id="name" name="agente" required="required" class="form-control " />
                                        </div>
                                      </div>

                      <div class="item form-group">
                        <label for = "data" class="col-form-label col-md-3 col-sm-3 label-align">Data da Avaliação<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input id="data" name="data_avalicao" class="date-picker form-control" placeholder="dd-mm-yyyy" type="text" required="required" type="text" onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'" onblur="this.type='text'" onmouseout="timeFunctionLong(this)">
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

                     
                      <div class="form-group row">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="name"> Qualidade do Processo de ensino<span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                         
                                          <input type="text" id="name" name="qualidade" required="required" class="form-control " />
                                        </div>
                                      </div>


                                      <div class="form-group row">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="name"> Aperfeiçoamento profissional<span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                         
                                          <input type="text" id="name" name="aperfeicoamento" required="required" class="form-control " />
                                        </div>
                                      </div>

                                      <div class="form-group row">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Inovação pedagógica<span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                         
                                          <input type="text" id="name" name="inovacao" required="required" class="form-control " />
                                        </div>
                                      </div>
                                      
                                      <div class="form-group row">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Responsabilidade<span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                         
                                          <input type="text" id="name" name="responsabilidade" required="required" class="form-control " />
                                        </div>
                                      </div>

                                      <div class="form-group row">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Relações humanas no trabalho<span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                         
                                          <input type="text" id="name" name="relacoes" required="required" class="form-control " />
                                        </div>
                                      </div>


                                      <div class="form-group row">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Actividade extra-lectivas<span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                         
                                          <input type="text" id="name" name="actividade" required="required" class="form-control " />
                                        </div>
                                      </div>

                                      <div class="form-group row">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Pontuação total obtida<span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                         
                                          <input type="text" id="name" name="pontuacao" required="required" class="form-control " />
                                        </div>
                                      </div>

                                      <div class="form-group row">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Avaliação de desempenho<span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                         
                                          <input type="text" id="name" name="avalicao" required="required" class="form-control " />
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