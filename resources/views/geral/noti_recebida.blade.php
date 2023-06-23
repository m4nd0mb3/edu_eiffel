@extends('layouts.main_go')
@section('title','Notificações Recebidas')
@section('content')


<section class="content">

<!-- Default box -->
  
  
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Notificação Recebidas</h3>
  
      <div class="card-tools">
     
      </div>
    </div>
    <div class="card-body p-0">
      <table class="table table-striped projects">
          <thead>
          <tr>
                                       
                                    
                                       <th>Tipo</th>
                                       <th>mensagem</th>
                                       <th>Data</th>
                                       
                                   </tr>
                                   @foreach( $notificacao as $prova) 
                                   <tr>
                                      
                                      
                                  <td>@if($prova->tipo == 1)
                                           Pedagogica
                                       @elseif($prova->tipo == 2)
                                             Formação
                                       @elseif($prova->tipo == 3)
                                            Atrasos
                                            @elseif($prova->tipo == 4)
                                            Outros
                                     
                                       @endif
                                       </td>

                                    
                                      
                                     
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
  
  
  
    <!-- /.card-body -->
  <!-- /.card -->
  
</section>


@endsection
