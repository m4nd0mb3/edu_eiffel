@extends('layouts.main_eo')
@section('title','Estudante')
@section('content')
 
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Notificação</h3>
  
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
                                   @foreach( $administrativa as $prova) 
                                   <tr>
                                      
                                      
                                  <td>@if($prova->tipo == 1)
                                           Prova
                                       @elseif($prova->tipo == 2)
                                             Concurso
                                       @elseif($prova->tipo == 3)
                                            Aviso
                                     
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
  
  
 
           
@endsection