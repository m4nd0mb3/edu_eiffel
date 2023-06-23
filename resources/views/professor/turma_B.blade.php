@extends('layouts.main_po')
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
                        <strong>Notas!</strong> Enviadas com Sucesso, <a href="{{ route('professor_ondjiva.ver_nota') }}"><span>Ver</span></a>.
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
                        <strong>Erro!</strong> Notas não enviadas, <a href="{{ route('professor_ondjiva.ver_nota') }}"><span>Ver</span></a>..
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif




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
                            <li> Para Notas com Frações utlilize Pontos em vez de virgulas exemplo (10.5 em vez de 10.50)</li>
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
                                <form action="{{ route ('professor_ondjiva.tur_B')}}" method = "post" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
           
           
                                    {{csrf_field()}}
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                <div class="form-group row">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="tipo"> <span class="required">Tipo de Prova</span>
                        </label>
                        <div class="col-md-6 scol-sm-6 ">
                        <select name="tipo" id="required" class="form-control ">
                        <option value="1">Avalição</option>
                                <option value="2">Prova do Professor</option>  
                                
                              </select> 
                        </div>
                      </div>
             
           <div class="form-group row">
                      <label class="col-form-label col-md-3 col-sm-3 label-align" for="disciplina"> <span class="required">Disciplina</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                        <select name="disciplina" id="required" class="form-control ">
                        @foreach( $professores as $professor) 
                        <option value="{{$professor->disciplina_um}}">
                                        @if($professor->disciplina_um == 1)
                                            Matemática
                                        @elseif($professor->disciplina_um == 2)
                                              Química
                                        @elseif($professor->disciplina_um == 3)
                                             Fisica
                                        @elseif($professor->disciplina_um == 4)
                                        L. Portuguesa
                                        @elseif($professor->disciplina_um == 5)
                                        Francês
                                        @elseif($professor->disciplina_um == 6)
                                        Inglês                
                                        @elseif($professor->disciplina_um == 7)
                                        Biologia
                                        @elseif($professor->disciplina_um == 8)
                                              Geologia
                                        @elseif($professor->disciplina_um == 9)
                                              Filosofia
                                        @elseif($professor->disciplina_um == 10)
                                            Informática
                                        @elseif($professor->disciplina_um == 11)
                                             Geometria Descritiva
                                        @elseif($professor->disciplina_um == 12)
                                            DNL
                                        @elseif($professor->disciplina_um == 13)
                                           Educação Física
                                        @elseif($professor->disciplina_um == 14)
                                           -
                                       
                                        @endif
                                       </option>
                             <option value="{{$professor->disciplina_dois}}"> 
                             @if($professor->disciplina_dois == 1)
                                            Matemática
                                        @elseif($professor->disciplina_dois == 2)
                                              Química
                                        @elseif($professor->disciplina_dois == 3)
                                             Fisica
                                        @elseif($professor->disciplina_dois == 4)
                                        L. Portuguesa
                                        @elseif($professor->disciplina_dois == 5)
                                        Francês
                                        @elseif($professor->disciplina_dois == 6)
                                        Inglês                
                                        @elseif($professor->disciplina_dois == 7)
                                        Biologia
                                        @elseif($professor->disciplina_dois == 8)
                                              Geologia
                                        @elseif($professor->disciplina_dois == 9)
                                              Filosofia
                                        @elseif($professor->disciplina_dois == 10)
                                            Informática
                                        @elseif($professor->disciplina_dois == 11)
                                             Geometria Descritiva
                                        @elseif($professor->disciplina_dois == 12)
                                            DNL
                                        @elseif($professor->disciplina_dois == 13)
                                           Educação Física
                                         @elseif($professor->disciplina_dois == 14)
                                           -
                                       
                                        @endif
                                        </option>
                             <option value="{{$professor->disciplina_tres}}">
                                @if($professor->disciplina_tres == 1)
                                            Matemática
                                        @elseif($professor->disciplina_tres == 2)
                                              Química
                                        @elseif($professor->disciplina_tres == 3)
                                             Fisica
                                        @elseif($professor->disciplina_tres == 4)
                                        L. Portuguesa
                                        @elseif($professor->disciplina_tres == 5)
                                        Francês
                                        @elseif($professor->disciplina_tres == 6)
                                        Inglês                
                                        @elseif($professor->disciplina_tres == 7)
                                        Biologia
                                        @elseif($professor->disciplina_tres == 8)
                                              Geologia
                                        @elseif($professor->disciplina_tres == 9)
                                              Filosofia
                                        @elseif($professor->disciplina_tres == 10)
                                            Informática
                                        @elseif($professor->disciplina_tres == 11)
                                             Geometria Descritiva
                                        @elseif($professor->disciplina_tres == 12)
                                            DNL
                                        @elseif($professor->disciplina_tres == 13)
                                           Educação Física
                                        @elseif($professor->disciplina_tres == 14)
                                           -
                                       
                                        @endif
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
                        <option value="2">10ª B</option>
                       
                              </select> 
                        </div>
                      </div>
                     
                      <div class="form-group row">
                      <label class="col-form-label col-md-3 col-sm-3 label-align" for="liceu"> <span class="required">Liceu</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                        <select name="liceu" id="required" class="form-control ">
                        
                                <option value="4">Ondjiva</option> 
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