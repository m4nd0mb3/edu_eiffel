@extends('layouts.main_go')
@section('title','Ver Faltas')
@section('content')
<section class="content">



  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Faltas dos Funcionarios</h3>
  
      <div class="card-tools">
      <a class="btn btn-app bg-success" href="{{ route('geral.f_funcionario') }}" >
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
          @foreach( $professores as $solicitacao) 
          <tr>

                                 
                                 <td> {{ $solicitacao->id}} </td>
                                 <td> {{ $solicitacao->funcionario}} </td>
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