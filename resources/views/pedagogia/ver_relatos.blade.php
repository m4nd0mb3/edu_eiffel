@extends('layouts.main_do')
@section('title','Professor')
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
          <h3 class="card-title" style=" font-weight:bolder ;">Solicitações </h3> 

          <div class="card-tools">
           

              <a class="btn btn-app bg-success" href="{{ route('pedagogia.relatar') }}" >
                <i class="fas fa-edit"></i> Enviar Nova Solicitação
              </a>
          </div>

          
        </div>
        <div class="card-body p-0">
            
          <table class="table table-striped projects">
              <thead>
                  <tr>
                     

                  <th>Nivel de Prioridade</th>
                                        <th>Descrição</th>
                                        <th>Data de Envio</th>
                    
                    
                  </tr>
              </thead>
              <tbody>
              @foreach( $relatos as $prova) 
                                    <tr>
                                       
                                       
                                  
                                     
                                    <td>@if($prova->tipo == 1)
                                          Normal
                                        @elseif($prova->tipo == 2)
                                        Urgente
                                        @elseif($prova->tipo == 3)
                                           Urgenência Maxima
                                      
                                       
                                        @endif
                                        </td>

                                        <td>{{ $prova->relato}}</td>
                                        <td>{{ $prova->created_at}}</td>
                                        <td>
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