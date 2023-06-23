@extends('layouts.main_po')
@section('title','Editar Plano de aula')
@section('content')


<form action="/professor/editar_pl/{{$planos->id}}" method = "post" enctype="multipart/form-data">


    {{csrf_field()}}
    @method('PUT')


    <!-- SELECT2 EXAMPLE -->
    <div class="card card-default">
      <div class="card-header">
        <h3 class="card-title" style="font-weight: bolder; color: red;">Selecione os dados da preparação de aula</h3>

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
                <label>Trimestre</label>
                <select name="trimestre_id" id="required" class="form-control ">
                  @foreach( $trimestres as $prova) 
                  <option value="{{$prova->id}}">{{$prova->trimestre}}
                             </option>
                  @endforeach      
                         
                          
                        </select> 
              </div>
            <div class="form-group">
              <label>Tipo De preparação Aula</label>
              <select name="tipo" id="required" class="form-control " >
                      
                            <option value="1" >
                                @if($planos->tipo == 1)
                                Nenhum Tipo de Plano
                            @elseif($planos->tipo == 2)
                                  Aula Diária
                            @elseif($planos->tipo == 3)
                                Continuação da Aula Anterior
                            @elseif($planos->tipo == 4)
                            Preparação de Aula
                            @elseif($planos->tipo == 5)
                            Plano de aula Semanal
                            @elseif($planos->tipo == 6)
                            Plano de aula Quinzenal             
                            @elseif($planos->tipo == 7)
                           Dosificação Trimestral
                        
                           
                            @endif
                                       </option>
                
                                       <option value="2">
                                       Aula Diária
                                       </option>
                                       <option value="3">
                                 Continuação da Aula Anterior
                                       </option>
                                       
                                       <option value="4">
                                    Plano de aula Semanal
                                       </option>
                                      

                                       <option value="5">
                                      Plano de aula Quinzenal
                                       </option>

                                       <option value="6">
                                       Plano Mensal
                                       </option>
                                       <option value="7">
                                       Dosificação Trimestral
                                       </option>
                                 
                              </select> 
                        </div>
            <!-- /.form-group -->
            <div class="form-group">
                <label>Data</label>
                
                <input id="data" name="data" value="{{ $planos->data}}" class="date-picker form-control" placeholder="dd-mm-yyyy" type="text" required="required" type="text" onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'" onblur="this.type='text'" onmouseout="timeFunctionLong(this)">
            
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

            <div class="col-sm-6">
                <!-- textarea -->
                <div class="form-group">
                  <label>Descrição</label>

                  <textarea class="form-control"  rows="2" name="tema" style="width: 700px;" placeholder="">{{ $planos->tema}}</textarea>
               
                </div>
              </div>

              <div class="form-group">
                <label for="exampleInputFile">Ficheiro a anexar</label>
                <div class="input-group">
                  <div class="custom-file">
                  <input type="file" id = "plano" name = "plano" class="from-control-file">  </div>
                 
                </div>
              </div>
          </div>
          <!-- /.col -->
          <div class="col-md-6">
            <div class="form-group">
                <label>Disciplina</label>
                <select name="disciplina" id="required" class="form-control ">


                    @foreach( $disciplinas as $professor) 
                    <option value="{{$professor->disciplina_id}}">
                        @if($professor->disciplina_id == 1)
                        Matemática
                    @elseif($professor->disciplina_id == 2)
                          Química
                    @elseif($professor->disciplina_id == 3)
                         Fisica
                    @elseif($professor->disciplina_id == 4)
                    L. Portuguesa
                    @elseif($professor->disciplina_id == 5)
                    Francês
                    @elseif($professor->disciplina_id == 6)
                    Inglês                
                    @elseif($professor->disciplina_id == 7)
                    Biologia
                    @elseif($professor->disciplina_id == 8)
                          Geologia
                    @elseif($professor->disciplina_id == 9)
                          Filosofia
                    @elseif($professor->disciplina_id == 10)
                        Informática
                    @elseif($professor->disciplina_id == 11)
                         Geometria Descritiva
                    @elseif($professor->disciplina_id == 12)
                        DNL
                    @elseif($professor->disciplina_id == 13)
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
                    
                    <option value="{{ $planos->classe}}"> @if($planos->classe == 1)
                        10 A
        @elseif($planos->classe == 2)
            10 B
        @elseif($planos->classe == 3)
            11 A
        @elseif($planos->classe == 4)
            11 B
        @elseif($planos->classe == 5)
            12 A
        @elseif($planos->classe == 6)
            12 B
        @elseif($planos->classe== 7)
            -        
        @endif</option>
                        @foreach( $professores as $professor) 
                        <option value="{{$professor->classe_um}}">
                            @if($professor->classe_um == 1)
                                            10 A
                            @elseif($professor->classe_um == 2)
                                10 B
                            @elseif($professor->classe_um == 3)
                                11 A
                            @elseif($professor->classe_um == 4)
                                11 B
                            @elseif($professor->classe_um == 5)
                                12 A
                            @elseif($professor->classe_um == 6)
                                12 B
                            @elseif($professor->classe_um == 7)
                                -
                                      
                            @endif
                                       </option>
                             <option value="{{$professor->classe_dois}}">
                             @if($professor->classe_dois == 1)
                                            10 A
                            @elseif($professor->classe_dois == 2)
                                10 B
                            @elseif($professor->classe_dois == 3)
                                11 A
                            @elseif($professor->classe_dois == 4)
                                11 B
                            @elseif($professor->classe_dois == 5)
                                12 A
                            @elseif($professor->classe_dois == 6)
                                12 B
                            @elseif($professor->classe_dois == 7)
                                -        
                            @endif
                        </option>


                        <option value="{{$professor->classe_tres}}">
                             @if($professor->classe_tres == 1)
                                            10 A
                            @elseif($professor->classe_tres == 2)
                                10 B
                            @elseif($professor->classe_tres == 3)
                                11 A
                            @elseif($professor->classe_tres == 4)
                                11 B
                            @elseif($professor->classe_tres == 5)
                                12 A
                            @elseif($professor->classe_tres == 6)
                                12 B
                            @elseif($professor->classe_tres == 7)
                               -       
                            @endif
                        </option> 

                        <option value="{{$professor->classe_quatro}}">
                             @if($professor->classe_quatro == 1)
                                            10 A
                            @elseif($professor->classe_quatro == 2)
                                10 B
                            @elseif($professor->classe_quatro == 3)
                                11 A
                            @elseif($professor->classe_quatro == 4)
                                11 B
                            @elseif($professor->classe_quatro == 5)
                                12 A
                            @elseif($professor->classe_quatro == 6)
                                12 B
                            @elseif($professor->classe_quatro == 7)
                              -        
                            @endif
                        </option> 

                        <option value="{{$professor->classe_cinco}}">
                             @if($professor->classe_cinco == 1)
                                            10 A
                            @elseif($professor->classe_cinco == 2)
                                10 B
                            @elseif($professor->classe_cinco == 3)
                                11 A
                            @elseif($professor->classe_cinco == 4)
                                11 B
                            @elseif($professor->classe_cinco == 5)
                                12 A
                            @elseif($professor->classe_cinco == 6)
                                12 B
                            @elseif($professor->classe_cinco == 7)
                               -        
                            @endif
                        </option> 

                        <option value="{{$professor->classe_seis}}">
                             @if($professor->classe_seis == 1)
                                            10 A
                            @elseif($professor->classe_seis == 2)
                                10 B
                            @elseif($professor->classe_seis == 3)
                                11 A
                            @elseif($professor->classe_seis == 4)
                                11 B
                            @elseif($professor->classe_seis == 5)
                                12 A
                            @elseif($professor->classe_seis == 6)
                                12 B
                            @elseif($professor->classe_seis == 7)
                                -        
                            @endif
                        </option> 
                             @endforeach      
                        
                        
                              </select> 
                        
              </div>

             
            
            <!-- /.form-group -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

        <!-- /.row -->
      </div>
      <div class=" form-group">
              <div class="col-form-label col-md-3 col-sm-3 label-align">
                <button class="btn btn-primary" type="button">Cancelar</button>
                <button class="btn btn-primary" type="reset">Limpar</button>
                <button type="submit" class="btn btn-success">Actualizar</button>
              </div>
            </div>
      <!-- /.card-body -->
            
    </div>
    <!-- /.card -->

            <div class="ln_solid"></div>
           
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