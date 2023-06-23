@extends('layouts.empresa')
@section('title','Pesquisar')
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
                        <strong>Orientações!</strong> Enviadas com Sucesso, <a href=""><span>Ver</span></a>.
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
                        <strong>Erro!</strong> Orientações não enviadas.
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
                                            <span class="caption-subject"><b>Pesquisar Antigos Estudantes</b></span>
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
                                <form action="{{ route('professor_ondjiva.orientacao') }}" method = "post" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
           
           
                                    {{csrf_field()}}
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                <div class="form-group row">
                     
             
           <div class="form-group row">
                      <label class="col-form-label col-md-3 col-sm-3 label-align" for="disciplina"> <span class="required">Area de Formação</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                        <select name="disciplina" id="required" class="form-control ">
                        <option value="1">Eng. Informatica</option>
                             <option value="2"> Fisica</option>
                             <option value="3"> Quimica</option> 
                              
                              </select> 
                        </div>
                      </div>
                    
                      <div class="form-group row">
                      <label class="col-form-label col-md-3 col-sm-3 label-align" for="classe"> <span class="required">Localidade</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                        <select name="classe" id="required" class="form-control ">
                        <option value="1">Luanda</option>
                        <option value="2">Malanje</option>
                        <option value="3">Cunene</option>
                       
                              </select> 
                        </div>
                      </div>
                      <div class="form-group row">
                      <label class="col-form-label col-md-3 col-sm-3 label-align" for="turma"> <span class="required">Municipio</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                        <select name="turma" id="required" class="form-control ">
                        <option value="1">Luanda</option>
                        <option value="2">Malanje</option>
                        <option value="3">Cuanhama</option>
                                
                              </select> 
                        </div>
                      </div>
                     
                     
                                 
                                   
            
                                     
                     
                      <div class="ln_solid"></div>
                      <div class=" form-group">
                        <div class="col-form-label col-md-3 col-sm-3 label-align">
                          <button class="btn btn-primary" type="button">Cancelar</button>
                          <button class="btn btn-primary" type="reset">Limpar</button>
                          <button type="submit" class="btn btn-success">Pesquisar</button>
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
        

        <div class="contacts-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="student-inner-std res-mg-b-30">
                    <div class="student-img">
                        <img src="/ondjiva/img/one.JPG" alt="" />
                    </div>
                    <div class="student-dtl">
                        <h2>AAlexa</h2>
                        <p class="dp">Curso</p>
                        <p class="dp-ag"><b>Idade:</b> 20 Years</p>
                      <a href=" {{ route('empresa.info') }}"> 
                        <button data-toggle="tooltip" title="Enviar notificação" class="pd-setting-ed"><i class="fa fa-send-o" aria-hidden="true"></i></button>

                      </a>
                         <button data-toggle="tooltip" title="Ver Informaçoes" class="pd-setting-ed"><i class="fa fa-eye" aria-hidden="true"></i></button>
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="student-inner-std res-mg-b-30">
                    <div class="student-img">
                        <img src="/ondjiva/img/dois.JPG" alt="" />
                    </div>
                    <div class="student-dtl">
                        <h2>AAlexa Jose</h2>
                        <p class="dp">Curso</p>
                        <p class="dp-ag"><b>Idade:</b> 20 Years</p>
                        <button data-toggle="tooltip" title="Enviar notificação" class="pd-setting-ed"><i class="fa fa-send-o" aria-hidden="true"></i></button>
                                  <button data-toggle="tooltip" title="Ver Informaçoes" class="pd-setting-ed"><i class="fa fa-eye" aria-hidden="true"></i></button>
  
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="student-inner-std res-mg-b-30 res-tablet-mg-t-30 dk-res-t-pro-30">
                    <div class="student-img">
                        <img src="/ondjiva/img/tres.JPG" alt="" />
                    </div>
                    <div class="student-dtl">
                        <h2>AAlexa</h2>
                        <p class="dp">Curso</p>
                        <p class="dp-ag"><b>Idade:</b> 20 Years</p>
                        <button data-toggle="tooltip" title="Enviar notificação" class="pd-setting-ed"><i class="fa fa-send-o" aria-hidden="true"></i></button>
                                  <button data-toggle="tooltip" title="Ver Informaçoes" class="pd-setting-ed"><i class="fa fa-eye" aria-hidden="true"></i></button>
  
                    </div>
                </div>
            </div>
            
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="student-inner-std mg-t-30">
                    <div class="student-img">
                        <img src="/ondjiva/img/cinco.JPG" alt="" />
                    </div>
                    <div class="student-dtl">
                        <h2>AAlexa</h2>
                        <p class="dp">Curso</p>
                        <p class="dp-ag"><b>Idade:</b> 20 Years</p>
                        <button data-toggle="tooltip" title="Enviar notificação" class="pd-setting-ed"><i class="fa fa-send-o" aria-hidden="true"></i></button>
                                  <button data-toggle="tooltip" title="Ver Informaçoes" class="pd-setting-ed"><i class="fa fa-eye" aria-hidden="true"></i></button>
  
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="student-inner-std mg-t-30">
                    <div class="student-img">
                        <img src="/ondjiva/img/seis.JPG" alt="" />
                    </div>
                    <div class="student-dtl">
                        <h2>AAlexa</h2>
                        <p class="dp">Curso</p>
                        <p class="dp-ag"><b>Idade:</b> 20 Years</p>
                        <button data-toggle="tooltip" title="Enviar notificação" class="pd-setting-ed"><i class="fa fa-send-o" aria-hidden="true"></i></button>
                                  <button data-toggle="tooltip" title="Ver Informaçoes" class="pd-setting-ed"><i class="fa fa-eye" aria-hidden="true"></i></button>
  
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="student-inner-std mg-t-30">
                    <div class="student-img">
                        <img src="/ondjiva/img/sete.JPG" alt="" />
                    </div>
                    <div class="student-dtl">
                        <h2>AAlexa</h2>
                        <p class="dp">Curso</p>
                        <p class="dp-ag"><b>Idade:</b> 20 Years</p>
                        <button data-toggle="tooltip" title="Enviar notificação" class="pd-setting-ed"><i class="fa fa-send-o" aria-hidden="true"></i></button>
                                  <button data-toggle="tooltip" title="Ver Informaçoes" class="pd-setting-ed"><i class="fa fa-eye" aria-hidden="true"></i></button>
  
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="student-inner-std mg-t-30">
                    <div class="student-img">
                        <img src="/ondjiva/img/oito.JPG" alt="" />
                    </div>
                    <div class="student-dtl">
                        <h2>AAlexa</h2>
                        <p class="dp">Curso</p>
                        <p class="dp-ag"><b>Idade:</b> 20 Years</p>
                        <button data-toggle="tooltip" title="Enviar notificação" class="pd-setting-ed"><i class="fa fa-send-o" aria-hidden="true"></i></button>
                                  <button data-toggle="tooltip" title="Ver Informaçoes" class="pd-setting-ed"><i class="fa fa-eye" aria-hidden="true"></i></button>
  
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection