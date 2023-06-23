@extends('layouts.main_coordenador')
@section('title','Enviar por Disciplina')
@section('content')



@foreach( $liceus as $disciplina) 

<form action="/coordenacao/formacao/{{$disciplina->id}}" method = "post" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
@endforeach 
        
    {{csrf_field()}}

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
              <label>Professors da Disciplina </label>
              <select name="disciplina" id="required" class="form-control ">
                  @foreach( $disciplinas as $disciplina) 
                          <option value="{{ $disciplina->id}}">{{$disciplina->disciplina}}</option>
                  @endforeach 
                        </select> 
            </div>
            <!-- /.form-group -->
            <div class="form-group">
                <label>Data de Termino</label>
                <input id="data" name="data_inicio" class="date-picker form-control" placeholder="dd-mm-yyyy" type="text" required="required" type="text" onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'" onblur="this.type='text'" onmouseout="timeFunctionLong(this)">
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
              <input id="data" name="data_termino" class="date-picker form-control" placeholder="dd-mm-yyyy" type="text" required="required" type="text" onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'" onblur="this.type='text'" onmouseout="timeFunctionLong(this)">
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
                <label>Segunda Disciplina</label>
                <select name="disciplina_um" id="required" class="form-control ">
                  @foreach( $disciplinas as $disciplina) 
                          <option value="{{ $disciplina->id}}">{{$disciplina->disciplina}}</option>
                  @endforeach 
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

            <div class="col-sm-6">
              <!-- textarea -->
              <div class="form-group">
                <label>Id da Formação</label>
                <textarea class="form-control" rows="2" name="id_formacao" style="width: 680px;" placeholder=""></textarea>
              </div>
            </div>

            
            <!-- /.form-group -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
        <div class="ln_solid"></div>
            <div class=" form-group">
              <div class="col-form-label col-md-3 col-sm-3 label-align">
                <button class="btn btn-primary" type="button">Cancelar</button>
                <button class="btn btn-primary" type="reset">Limpar</button>
                <button type="submit" class="btn btn-success">Enviar</button>
              </div>
            </div>
          </div>
        <!-- /.row -->
      </div>
      <!-- /.card-body -->
      
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
