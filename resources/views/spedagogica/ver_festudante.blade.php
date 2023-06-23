@extends('layouts.main_spo')
@section('title','Ver Faltas')
@section('content')
@if (Session::get('success'))<!-- /.card-header -->
<div class="card-body">
  
  <div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h5><i class="icon fas fa-check"></i> Sucesso!</h5>
    {{ Session::get('success') }} 
  </div>
</div>
<!-- /.card-body -->

@endif
@if (Session::get('fail'))
<!-- /.card-header -->
<div class="card-body">
    <div class="alert alert-danger alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <h5><i class="icon fas fa-ban"></i> Falha!</h5>
      {{ Session::get('fail') }} 
    </div>
    
  </div>
  <!-- /.card-body -->

@endif
<section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title" style=" font-weight:bolder ;">Faltas de Aulas </h3> 

          <div class="card-tools">
           

              <a class="btn btn-app bg-danger" href="{{ route('secretaria_pedagogica.falta') }}" >
                <i class="fas fa-edit"></i> Enviar Nova Falta
              </a>
          </div>

          
        </div>
        <div class="card-body p-0">
            
          <table class="table table-striped projects">
              <thead>
              <tr>
                                       
                                        <th>Classe / Turma</th>
                                        <th>Número de Faltas Mensal</th>
                                      
                                      
                                    
                                       
                                        
                                    </tr>
                                    @foreach( $estudantes as $plano) 
                                    <tr>
                                    <td> @if($plano->classe == 1)
                                            10 A
                            @elseif($plano->classe == 2)
                                10 B
                            @elseif($plano->classe == 3)
                                11 A
                            @elseif($plano->classe == 4)
                                11 B
                            @elseif($plano->classe == 5)
                                12 A
                            @elseif($plano->classe == 6)
                                12 B
                            @elseif($plano->classe == 7)
                                -
                                      
                            @endif </td>
                                    <td> {{ $plano->total}} </td>
                                 
                                   
                                     
                                       
                                       
                                       
                                       <td>
                                   
                           <td> Não Justificada </td>
                           <td>
                                            <a class="btn btn-primary btn-sm" href="/secretaria_pedagogica/ver_info_falta_estudante/{{ $plano->classe}}">
                                            <i class="fa-solid fa-eye"></i>
                                            
                                            Ver
                                        </a>

                    </td>
                                   </tr>
                                   @endforeach  
                                                            
              </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
     <br>
     <br>
     <br>
     <br>
     <br>

@endsection