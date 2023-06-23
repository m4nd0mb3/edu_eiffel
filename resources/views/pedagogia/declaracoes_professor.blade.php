@extends('layouts.main_do')
@section('title','Pedagogia')
@section('content')


<section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title" style=" font-weight:bolder ;">Declarações</h3> 

          <div class="card-tools">
           

             
          </div>

          
        </div>
        <div class="card-body p-0">
            
          <table class="table table-striped projects">
              <thead>
              <tr>
                                <th>Número</th>
                                <th>Nome do Professor</th>
                                <th>Tipo</th>
                                <th>Data</th>
                               
                            </tr>

                            @foreach( $declaracoes as $declaracao) 
                            <tr>
                                <td>{{$declaracao->id}}</td>
                                <td>{{$declaracao->professor->name}}</td>
                                <td> @if($declaracao->tipo_id == 1)
                            Declaração sem nota
                        @elseif($declaracao->tipo_id == 2)
                            Declaração com notas
                            @elseif($declaracao->tipo_id == 3)
                            Outro
                        
                                                              
                        @endif</td>
                                <td>{{$declaracao->created_at}}</td>
                                              

       
               

                
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