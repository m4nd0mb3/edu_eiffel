@extends('layouts.main_do')
@section('title','Diretor Pedagogico')
@section('content')


@foreach( $estudantess as $prova) 
            <form action="/pedagogia/enviar_nota/{{$prova->liceu}}/{{$prova->classe}}/{{$prova->created_at}}" method = "post" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
           
@endforeach   

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
              <label>Tipo de Prova</label>
              <select name="tipo_id" id="required" class="form-control ">
                                        @foreach( $tipo_provas as $prova) 
                                        <option value="{{$prova->tipo_id}}">
                                            @if($prova->tipo_id == 1)
                                            Avaliação 
                                        @elseif($prova->tipo_id == 2)
                                            Prova do Professor
                                        @elseif($prova->tipo_id == 3)
                                             Prova Trimestral
                                        @elseif($prova->tipo_id == 4)
                                             MAC   
                                        @endif
                                                   </option>
                                        @endforeach      
                                               
                                                
                                              </select> 
            </div>
            <!-- /.form-group -->
            <div class="form-group">
                <label>Data</label>
                @foreach( $disciplinas as $professor) 

                <input id="data" name="data" class="date-picker form-control" placeholder="dd-mm-yyyy" type="text"value="{{$professor->data}}" required="required" type="text" onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'" onblur="this.type='text'" onmouseout="timeFunctionLong(this)">
                @endforeach   
                <script>
                  function timeFunctionLong(input) {
                    setTimeout(function() {
                      input.type = 'text';
                    }, 60000);
                  }
                </script>
              </div>

              <div class="form-group">
                <label>Liceu</label>
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
            <!-- /.form-group -->
          </div>
          <!-- /.col -->
          <div class="col-md-6">
            <div class="form-group">
                <label>Disciplina</label>
                <select name="mix_id" id="required" class="form-control " >
                                          @foreach( $disciplinas as $professor) 
                                          <option value="{{$professor->mix_id}}">
                                          @if($professor->mix_id == 1)
                                                              Matemática
                                                          @elseif($professor->mix_id == 2)
                                                                Química
                                                          @elseif($professor->mix_id == 3)
                                                               Fisica
                                                          @elseif($professor->mix_id == 4)
                                                          L. Portuguesa
                                                          @elseif($professor->mix_id == 5)
                                                          Francês
                                                          @elseif($professor->mix_id == 6)
                                                          Inglês                
                                                          @elseif($professor->mix_id == 7)
                                                          Biologia
                                                          @elseif($professor->mix_id == 8)
                                                                Geologia
                                                          @elseif($professor->mix_id == 9)
                                                                Filosofia
                                                          @elseif($professor->mix_id == 10)
                                                              Informática
                                                          @elseif($professor->mix_id == 11)
                                                               Geometria Descritiva
                                                          @elseif($professor->mix_id == 12)
                                                              DNL
                                                          @elseif($professor->mix_id == 13)
                                                             Educação Física
                                                         
                                                         
                                                          @endif
                                                         </option>
                  
                                            
                                               @endforeach      
                                          
                                                </select> 
                                              
              </div>
            <!-- /.form-group -->
            <div class="form-group">
                <label>Classe/Turma</label>
                <select name="classe" id="required" class="form-control ">
                @foreach( $disciplinas as $prova) 
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

                       <!-- /.form-group -->
             <div class="form-group">

                <label>Data de Evio</label>
                @foreach( $disciplinas as $professor) 

                <input id="data" name="created_at" class="date-picker form-control" placeholder="dd-mm-yyyy" type="text" value="{{$professor->created_at}}" required="required" >
                @endforeach      
              
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

    <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title" style="font-weight: bolder; color: red;"> Dados da Turma</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example2" class="table table-bordered table-hover">
              <thead>
                <tr>
                                           
                    <th data-field="id">ID</th>
                    <th data-field="name">Nome</th>
                   
                    <th data-field="complete">Email</th>
                    <th data-field="task" >Nota</th>
                    <th data-field="task" >Id Professor</th>
                   
                </tr>
              </thead>
              <tbody>
              @foreach( $provas as $estudante) 
                                            <tr>
                                               
                                                <td ><input type="text" id="estudante_id" readonly required="required" value="{{ $estudante->estudante_id}}" class="form-control  " name="estudante_id[]" /> </td>
                                                <td>{{ $estudante->estudante->name}}</td>
                                                <td>{{ $estudante->estudante->email}}</td>
                                               
                                               
                                             
                                                <td ><input type="text" readonly value="{{ $estudante->nota}}" id="nota" required="required" class="form-control  " name="nota[]" /> </td>
                                          
                                                <td ><input type="text" readonly id="professor_id" required="required" value="{{ $estudante->professor_id}}" class="form-control  " name="professor_id" /> </td>
                                              
                                            </tr>
                                        @endforeach 
                     </tbody>
              <tfoot>
              
              </tfoot>
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
          <!-- /.card-body -->
        </div>
    </div>
    


</form>
 
<br>
<br>
<br>
<br>

      
@endsection