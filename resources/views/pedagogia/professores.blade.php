@extends('layouts.main_do')
@section('title','Todos os Professores')
@section('content')


<section class="content">

    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title" style=" font-weight:bolder ;">Professores</h3> 
    
        <div class="card-tools">
         
    
           
        </div>
    
        
      </div>
      <div class="card-body p-0">
          
        <table class="table table-striped projects">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome do Professor</th>
                    <th>Idade</th>
                    <th>Liceu</th>
                  
                  
                    <th>Ultimo Login</th>
                    <th>Penultimo Login</th>
                  
                  
                </tr>
            </thead>
            <tbody>
                @foreach( $professores as $plano) 
                <tr>
                <td> {{ $plano->id}} </td>
                <td> {{ $plano->name}} </td>
                <td> {{ $plano->idade}} </td>
                <td>  @if($plano->liceu == 1)
                        Caxito
        @elseif($plano->liceu == 2)
            Malanje
        @elseif($plano->liceu == 3)
            Ndalatando
        @elseif($plano->liceu == 4)
            Ondjiva
           
        @endif  </td>
                                     <td>{{$plano->current_sign_in_at}}</td>   
        <td>{{$plano->last_sign_in_at}}</td>

                                           
                                           
                                           
                                           <td>
                                           <a class="btn btn-primary btn-sm" href="/pedagogia/ver_dado_professor/{{ $plano->id}}">
                                           <i class="fa-solid fa-circle-exclamation"></i>
    
                    
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