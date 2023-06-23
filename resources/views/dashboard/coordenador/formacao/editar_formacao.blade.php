@extends('layouts.main_coordenador')
@section('title','Editar Formacao')
@section('content')



<form action="/coordenacao/editar_form" method = "post" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">

           
    {{csrf_field()}}

    @method('PUT')

    <!-- SELECT2 EXAMPLE -->
    <div class="card card-default">
      <div class="card-header">
        <h3 class="card-title" style="font-weight: bolder; color: red;">Selecione os dados da Formação</h3>

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
              <label>Id</label>
              <input id="data" name="id" value="{{$formacoes->id}}" readonly class="date-picker form-control" placeholder="dd-mm-yyyy" type="text" required="required" type="text" onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'" onblur="this.type='text'" onmouseout="timeFunctionLong(this)">
              </div>
            
            <!-- /.form-group -->
            <div class="form-group">
                <label>Liceu</label>
                <select name="liceu" id="required" class="form-control ">
                  @foreach( $liceu as $disciplina) 
                          <option value="{{ $disciplina->id}}">{{$disciplina->liceu}}</option>
                  @endforeach 
                        </select>
              </div>
            <!-- /.form-group -->
            <div class="form-group">
            <label>Professors da Disciplina </label>
              <select name="disciplina" id="required" class="form-control ">
                  @foreach( $disciplinas as $disciplina) 
                          <option value="{{ $disciplina->id}}">{{$disciplina->disciplina}}</option>
                  @endforeach 
                        </select> 
            </div>
            <!-- /.form-group -->
            <div class="form-group">
                <label>Data de Inicio</label>

              <input id="data" name="data_inicio" value="{{$formacoes->data_inicio}}" class="date-picker form-control" placeholder="dd-mm-yyyy" type="text" required="required" type="text" onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'" onblur="this.type='text'" onmouseout="timeFunctionLong(this)">
              <script>
                  function timeFunctionLong(input) {
                    setTimeout(function() {
                      input.type = 'text';
                    }, 60000);
                  }
                </script>
              </div>

               <!-- /.form-group -->
            <div class="form-group">
              <label>Data de Termino</label>
              <input id="data" name="data_termino" value="{{$formacoes->data_termino}}" class="date-picker form-control" placeholder="dd-mm-yyyy" type="text" required="required" type="text" onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'" onblur="this.type='text'" onmouseout="timeFunctionLong(this)">
            
            <script>
                function timeFunctionLong(input) {
                  setTimeout(function() {
                    input.type = 'text';
                  }, 60000);
                }
              </script>
            </div>

             
            <!-- /.form-group -->
          </div>
          <!-- /.col -->
          <div class="col-md-6">
            <div class="form-group">
                <label> E Disciplina</label>
                <select name="disciplina_um" id="required" class="form-control ">
                  @foreach( $disciplinas as $disciplina) 
                          <option value="{{ $disciplina->id}}">{{$disciplina->disciplina}}</option>
                  @endforeach 
                        </select> 
              </div>
              <div class="form-group">
                <label> Tipo</label>
                <select name="tipo" id="required" class="form-control ">
                  @foreach( $tipos as $disciplina) 
                          <option value="{{ $disciplina->id}}">{{$disciplina->formacao}}</option>
                  @endforeach 
                        </select> 
              </div>
            <!-- /.form-group -->
            <div class="col-sm-6">
              <!-- textarea -->
              <div class="form-group">
                <label>Descrição</label>
                <textarea class="form-control" rows="2" name="mensagem" style="width: 680px;" value="{{$formacoes->mensagem}}">{{$formacoes->mensagem}}</textarea>
              </div>
            </div>

            <div class="col-sm-6">
              <!-- textarea -->
              <div class="form-group">
                <label>Id da Formação</label>
                <textarea class="form-control" rows="2" name="id_formacao" style="width: 680px;" value="{{$formacoes->id_formacao}}">{{$formacoes->mensagem}}</textarea>
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
      
      <div class="ln_solid"></div>
            <div class=" form-group">
              <div class="col-form-label col-md-3 col-sm-3 label-align">
                <button class="btn btn-primary" type="button">Cancelar</button>
                <button class="btn btn-primary" type="reset">Limpar</button>
                <button type="submit" class="btn btn-success">Enviar</button>
              </div>
            </div>
          </div>
    </div>
    <!-- /.card -->

    
          <!-- /.card-body -->
        </div>
        
    </div>
    


</form>
 
<br>
<br>
<br>
<br>


@endsection
