@extends('layouts.main_po')
@section('title','Relatar')
@section('content')



<form action="{{ route ('professor.enviar_relato')}}" method = "post" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
           
               

    {{csrf_field()}}

    <!-- SELECT2 EXAMPLE -->
    <div class="card card-default">
      <div class="card-header">
        <h3 class="card-title" style="font-weight: bolder; color: red;">Selecione os dados da prova</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
          <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label>Prioridade</label>
              <select name="tipo" id="required" class="form-control ">
                                          <option value="1">Normal</option>
                                               <option value="2"> Urgente</option>
                                               <option value="3"> Maxima Urgência</option>
                                               
                                               
                                                </select>  
            </div>
           
            <!-- /.form-group -->
            <div class="form-group">
                <label>Descreva a sua dificuldade</label>
                <textarea type="text" id="orientacao" name="relato" rows="5" required="required" class="form-control " style="height: 100px;"></textarea>

              </div>

              <div class="col-md-6">
            <div class="form-group">
              <label>Liceu</label>
              <select name="liceu" id="required" class="form-control ">
                        <option value="  {{ Auth::guard('professor')->user()->liceu }}">
                              
                              @if(Auth::guard('professor')->user()->liceu == 1)
                                              Caxito
                                          @elseif(Auth::guard('professor')->user()->liceu == 2)
                                                Malanje
                                          @elseif(Auth::guard('professor')->user()->liceu == 3)
                                Ndalatando
                                          @elseif(Auth::guard('professor')->user()->liceu == 4)
                                                
                                              Ondjiva
                              @endif</option>
                        </select>  
            </div>
            <!-- /.form-group -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

        <!-- /.row -->
      </div>
      <!-- /.card-body -->
      
    </div>
    <!-- /.card -->                
                                   
            
                                     
                     
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