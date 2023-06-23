@extends('layouts.main_go')
@section('title','Ver Faltas')
@section('content')
<section class="content">

<!-- Default box -->
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Faltas Enviadas Director Pedagógico</h3>

    <div class="card-tools">
    <a class="btn btn-app bg-success" href="{{ route('geral.falta_directores') }}" >
                <i class="fas fa-edit"></i> Enviar Nova Falta
    </a>
    </div>
  </div>
  <div class="card-body p-0">
    <table class="table table-striped projects">
        <thead>
            <tr>
            <th>id</th>
                                        <th>Nome</th>
                                        <th>Tipo</th>
                                        <th>Data</th>
                               
            </tr>
        </thead>
        <tbody>
        @foreach( $pedagogicos as $solicitacao) 
                               
                               <td> {{ $solicitacao->id}} </td>
                               <td> {{ $solicitacao->pedagogia->name}} </td>
                               <td> @if($solicitacao->tipo_falta == 1)
                                 Administrativa
                                   @elseif($solicitacao->tipo_falta == 2)
                                       Outros
                             
                                                                     
                               @endif</td>
                               <td> {{ $solicitacao->created_at}} </td>

                           </tr>
                           @endforeach  
                                  
        </tbody>
    </table>
  </div>
  <!-- /.card-body -->
</div>
<!-- /.card -->


<div class="card">
    <div class="card-header">
      <h3 class="card-title">Faltas Enviadas para o Director Administrativo</h3>
  
      <div class="card-tools">
      <a class="btn btn-app bg-success" href="{{ route('geral.falta_directores') }}" >
                  <i class="fas fa-edit"></i> Enviar Nova Falta
      </a>
      </div>
    </div>
    <div class="card-body p-0">
      <table class="table table-striped projects">
          <thead>
              <tr>
              <th>id</th>
                                          <th>Nome</th>
                                          <th>Tipo</th>
                                          <th>Data</th>
                                 
              </tr>
          </thead>
          <tbody>
          @foreach( $administrativos as $solicitacao) 
                                 
                                 <td> {{ $solicitacao->id}} </td>
                                 <td> {{ $solicitacao->administrativo->name}} </td>
                                 <td> @if($solicitacao->tipo_falta == 1)
                                   Administrativa
                                     @elseif($solicitacao->tipo_falta == 2)
                                         Outros
                               
                                                                       
                                 @endif</td>
                                 <td> {{ $solicitacao->created_at}} </td>
  
                             </tr>
                             @endforeach  
                                    
          </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->

  
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Faltas dos Secretarios</h3>
  
      <div class="card-tools">
      <a class="btn btn-app bg-success" href="{{ route('geral.falta_directores') }}" >
                  <i class="fas fa-edit"></i> Enviar Nova Falta
      </a>
      </div>
    </div>
    <div class="card-body p-0">
      <table class="table table-striped projects">
          <thead>
              <tr>
              <th>id</th>
                                          <th>Nome</th>
                                          <th>Tipo</th>
                                          <th>Data</th>
                                 
              </tr>
          </thead>
          <tbody>
          @foreach( $secretarios as $solicitacao) 
                                 
                                 <td> {{ $solicitacao->id}} </td>
                                 <td> {{ $solicitacao->secretario->name}} </td>
                                 <td> @if($solicitacao->tipo_falta == 1)
                                   Administrativa
                                     @elseif($solicitacao->tipo_falta == 2)
                                         Outros
                               
                                                                       
                                 @endif</td>
                                 <td> {{ $solicitacao->created_at}} </td>
  
                             </tr>
                             @endforeach  
                                    
          </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
  
</section>
          
@endsection