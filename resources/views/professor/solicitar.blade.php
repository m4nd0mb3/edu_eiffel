@extends('layouts.main_po')
@section('title','Solicitar')
@section('content')

<form action="{{ route ('professor.sol')}}" method = "post" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
           
               

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
              <label>Tipo de Declaração</label>
              <select name="tipo_id" id="required" class="form-control ">
                        @foreach( $tipedocs as $tipedoc) 
                        <option value="{{$tipedoc->id}}">
                                       {{ $tipedoc ->tp_pdoc}}
                                 </option>
                           
                             @endforeach     
                             
                              </select> 
            </div>
           
            <!-- /.form-group -->
            <div class="form-group">
                <label>Classe/Turma</label>
                <select name="liceu" id="required" class="form-control ">
                        @foreach( $professores as $professor) 
                        <option value="{{$professor->liceu}}">
                                        @if($professor->liceu == 1)
                                            Caxito
                                        @elseif($professor->liceu == 2)
                                              Malanje
                                        @elseif($professor->liceu == 3)
                                                Ndalatando
                                        @elseif($professor->liceu == 4)
                                              
                                            Ondjiva
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