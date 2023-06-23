@extends('layouts.main_spo')
@section('title','Enviar Falta')
@section('content')

@foreach( $estudantes as $estudante) 

<form action="/secretaria_pedagogica/dec_A/{{ Auth::guard('secretaria_pedagogica')->user()->liceu }}/{{$estudante->classe}}" method = "post" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">

@endforeach 
                                    {{csrf_field()}}
                          
    <!-- SELECT2 EXAMPLE -->
    <div class="card card-default">
      <div class="card-header">
        <h3 class="card-title" style="font-weight: bolder; color: red;">Selecione os dados </h3>

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
              
                        @foreach( $estudantes as $estudante) 
                        <label>{{$estudante->name}}</label>
                        <input type="checkbox"  value="{{$estudante->id}}" name="estudante_id[]">
                        <br>
                               
                        @endforeach        
            
            </div>

            <div class="form-group">
              <label>Turma</label>
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

        
           

              <div class="form-group">
                <label>Liceu</label>
                <select name="liceu" id="required" class="form-control ">
                        
                    <option value="  {{ Auth::guard('secretaria_pedagogica')->user()->liceu }}">
                          
                          @if(Auth::guard('secretaria_pedagogica')->user()->liceu == 1)
                                          Caxito
                                      @elseif(Auth::guard('secretaria_pedagogica')->user()->liceu == 2)
                                            Malanje
                                      @elseif(Auth::guard('secretaria_pedagogica')->user()->liceu == 3)
                            Ndalatando
                                      @elseif(Auth::guard('secretaria_pedagogica')->user()->liceu == 4)
                                            
                                          Ondjiva
                          @endif</option>
                          </select> 
              </div>
            <!-- /.form-group -->
          </div>
          <!-- /.col -->
          <div class="col-md-6">
            <div class="form-group">
                <label>Disciplina</label>
                <select name="disciplina" id="required" class="form-control ">
                            @foreach( $disciplinas as $disciplina) 
                            <option value="{{ $disciplina->id}}">{{$disciplina->disciplina}}</option>
                    @endforeach  
                              </select> 
              </div>
          

              <div class="form-group">
                <label>Data</label>
                <input id="data" name="data" class="date-picker form-control" placeholder="dd-mm-yyyy" type="text" required="required" type="text" onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'" onblur="this.type='text'" onmouseout="timeFunctionLong(this)">
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