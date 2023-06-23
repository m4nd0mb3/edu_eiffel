@extends('layouts.main_go')
@section('title','Enviar Notificação')
@section('content')


<form action="{{ route ('geral.noti_professor')}}" method = "post" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
           
    {{csrf_field()}}

    <!-- SELECT2 EXAMPLE -->
    <div class="card card-default">
      <div class="card-header">
        <h3 class="card-title" style="font-weight: bolder; color: red;">Selecione os dados ova</h3>

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
              <label>Professor</label>
              <select name="professor_id" id="required" class="form-control ">
                        @foreach( $professores as $professor) 
                                <option value="{{ $professor->id}}">{{$professor->name}}</option>
                        @endforeach 
                               
                              </select> 
            </div>
           
        

              <div class="form-group">
                <label>Liceu</label>
                <select name="liceu" id="required" class="form-control ">
                        
                    <option value="  {{ Auth::guard('geral')->user()->liceu }}">
                          
                          @if(Auth::guard('geral')->user()->liceu == 1)
                                          Caxito
                                      @elseif(Auth::guard('geral')->user()->liceu == 2)
                                            Malanje
                                      @elseif(Auth::guard('geral')->user()->liceu == 3)
                            Ndalatando
                                      @elseif(Auth::guard('geral')->user()->liceu == 4)
                                            
                                          Ondjiva
                          @endif</option>
                          </select> 
              </div>
            <!-- /.form-group -->
          </div>
          <!-- /.col -->
          <div class="col-md-6">
            <div class="form-group">
                <label>Tipo</label>
                <select name="tipo" id="required" class="form-control ">
                        <option value="1">Pedagogica</option>
                             <option value="2"> Formação</option>
                             <option value="3"> Normal</option> 
                             <option value="4"> Atrasos</option> 
                             
                              </select> 
              </div>
            <!-- /.form-group -->
            <div class="col-sm-6">
              <!-- textarea -->
              <div class="form-group">
                <label>Descrição</label>
                <textarea class="form-control" rows="2" name="mensagem" style="width: 680px;" placeholder=""></textarea>
              </div>
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
          <!-- /.card-body -->
        </div>
    </div>
    


</form>
 
<br>
<br>
<br>
<br>

@endsection