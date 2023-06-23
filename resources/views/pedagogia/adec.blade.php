@extends('layouts.main_do')
@section('title','Ver Estudantes')
@section('content')
  

<section class="content">

<!-- Default box -->
<div class="card">
  <div class="card-header">
    <h3 class="card-title" style=" font-weight:bolder ;">Estudantes</h3> 

    <div class="card-tools">
     

       
    </div>

    
  </div>
  <div class="card-body p-0">
      
    <table class="table table-striped projects">
        <thead>
            <tr>
            <th>Id</th>
                                        <th>Nome do Estudante</th>
                                        <th>Classe / Turma</th>
                                        <th>Liceu</th>
                                        <th>Ultimo Login</th>
                                        <th>Penultimo Login</th>
                                      
                                      
                                        <th>Ver Informações</th>
              
              
            </tr>
        </thead>
        <tbody>
        @foreach( $estudantes as $plano) 
                                    <tr>
                                    <td> {{ $plano->id}} </td>
                                    <td> {{ $plano->name}} </td>
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
                                       <a class="btn btn-primary btn-sm" href="/pedagogia/ver_dado_estudante/{{ $plano->id}}">
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