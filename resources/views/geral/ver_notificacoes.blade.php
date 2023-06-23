@extends('layouts.main_go')
@section('title','Notificações')
@section('content')
<section class="content">

<!-- Default box -->
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Notificação Enviadas para o Director Pedagógico</h3>

    <div class="card-tools">
    <a class="btn btn-app bg-success" href="{{ route('geral.notificacao_pedagogico') }}" >
                <i class="fas fa-edit"></i> Enviar Nova Notificação
    </a>
    </div>
  </div>
  <div class="card-body p-0">
    <table class="table table-striped projects">
        <thead>
        <tr>
                                       
                                    
                                       <th>Tipo</th>
                                       <th>Nome do Professor</th>
                                       <th>Mensagem</th>
                                       <th>Data</th>
                                       
                                   </tr>
                                   @foreach( $pedagogicos as $prova) 
                                   <tr>
                                      
                                      
                                  <td>@if($prova->tipo == 1)
                                           Atrasos
                                       @elseif($prova->tipo == 2)
                                             Irregularidades
                                       @elseif($prova->tipo == 3)
                                            Aviso
                                     
                                       @endif
                                       </td>

                                    
                                       <td>{{ $prova->pedagogia->name}}</td>
                                       <td>{{ $prova->mensagem}}</td>
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


<div class="card">
    <div class="card-header">
      <h3 class="card-title">Notificação Enviadas para o Director Administrativo</h3>
  
      <div class="card-tools">
      <a class="btn btn-app bg-success" href="{{ route('geral.notificacao_administrativo') }}" >
                  <i class="fas fa-edit"></i> Enviar Nova Notificação
      </a>
      </div>
    </div>
    <div class="card-body p-0">
      <table class="table table-striped projects">
          <thead>
          <tr>
                                       
                                    
                                       <th>Tipo</th>
                                       <th>Nome do Professor</th>
                                       <th>Mensagem</th>
                                       <th>Data</th>
                                       
                                   </tr>
                                   @foreach( $administrativos as $prova) 
                                   <tr>
                                      
                                      
                                  <td>@if($prova->tipo == 1)
                                           Atrasos
                                       @elseif($prova->tipo == 2)
                                             Irregularidades
                                       @elseif($prova->tipo == 3)
                                            Aviso
                                     
                                       @endif
                                       </td>

                                    
                                       <td>{{ $prova->administrativo->name}}</td>
                                       <td>{{ $prova->mensagem}}</td>
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

  
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Notificação dos Professores</h3>
  
      <div class="card-tools">
      <a class="btn btn-app bg-success" href="{{ route('geral.notificacao_professor') }}" >
                  <i class="fas fa-edit"></i> Enviar Nova Notificação
      </a>
      </div>
    </div>
    <div class="card-body p-0">
      <table class="table table-striped projects">
          <thead>
          <tr>
                                       
                                    
                                       <th>Tipo</th>
                                       <th>Nome do Professor</th>
                                       <th>Mensagem</th>
                                       <th>Data</th>
                                       
                                   </tr>
                                   @foreach( $professores as $prova) 
                                   <tr>
                                      
                                      
                                  <td>@if($prova->tipo == 1)
                                           Falta
                                       @elseif($prova->tipo == 2)
                                             Avisos
                                       @elseif($prova->tipo == 3)
                                            Atrasos
                                     
                                       @endif
                                       </td>

                                    
                                       <td>{{ $prova->professor->name}}</td>
                                       <td>{{ $prova->mensagem}}</td>
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
  
  
  
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Notificação dos Estudantes</h3>
  
      <div class="card-tools">
      <a class="btn btn-app bg-success" href="{{ route('geral.enviar_nestudante') }}" >
                  <i class="fas fa-edit"></i> Enviar Nova Notificação
      </a>
      </div>
    </div>
    <div class="card-body p-0">
      <table class="table table-striped projects">
          <thead>
          <tr>
                                       
                                    
                                       <th>Tipo</th>
                                       <th>Nome do Estudante</th>
                                       <th>Classe</th>
                                       <th>mensagem</th>
                                       <th>Data</th>
                                       
                                   </tr>
                                   @foreach( $estudantes as $prova) 
                                   <tr>
                                      
                                      
                                  <td>@if($prova->tipo == 1)
                                           Prova
                                       @elseif($prova->tipo == 2)
                                             Concurso
                                       @elseif($prova->tipo == 3)
                                            Aviso
                                     
                                       @endif
                                       </td>

                                    
                                       <td>{{ $prova->estudante->name}}</td>
                                       <td>   @if($prova->classe == 1)
                                           10 A
                           @elseif($prova->classe == 2)
                               10 B
                           @elseif($prova->classe == 3)
                               11 A
                           @elseif($prova->classe == 4)
                               11 B
                           @elseif($prova->classe == 5)
                               12 A
                           @elseif($prova->classe == 6)
                               12 B
                           @elseif($prova->classe == 7)
                               -        
                           @endif  </td>
                                     
                                       <td>{{ $prova->mensagem}}</td>
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
  
  
  
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Notificação dos Secretarios</h3>
  
      <div class="card-tools">
      <a class="btn btn-app bg-success" href="{{ route('geral.notificacao_secretario') }}" >
                  <i class="fas fa-edit"></i> Enviar Nova Notificação
      </a>
      </div>
    </div>
    <div class="card-body p-0">
      <table class="table table-striped projects">
          <thead>
          <tr>
                                       
                                    
                                       <th>Tipo</th>
                                       <th>Nome do Professor</th>
                                       <th>Mensagem</th>
                                       <th>Data</th>
                                       
                                   </tr>
                                   @foreach( $secretarios as $prova) 
                                   <tr>
                                      
                                      
                                  <td>@if($prova->tipo == 1)
                                           Atrasos
                                       @elseif($prova->tipo == 2)
                                             Irregularidades
                                       @elseif($prova->tipo == 3)
                                            Aviso
                                     
                                       @endif
                                       </td>

                                    
                                       <td>{{ $prova->secretaria->name}}</td>
                                       <td>{{ $prova->mensagem}}</td>
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
@endsection