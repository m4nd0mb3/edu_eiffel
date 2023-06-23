@extends('layouts.main_spo')
@section('title',' Orientações enviadas')
@section('content')
<section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title" style=" font-weight:bolder ;">Orientações de aula</h3> 

          <div class="card-tools">
           

             
          </div>

          
        </div>
        <div class="card-body p-0">
            
          <table class="table table-striped projects">
              <thead>
                  <tr>
                    
                  <th>Id</th>
                                        <th>Nome do Professor</th>
                                        <th>Número de Orientações Entregues</th>


                                      
                                      
                  </tr>
              </thead>
              <tbody>
              @foreach( $orientacoes as $plano) 
                                    <tr>
                                    <td> {{ $plano->id}} </td>
                                    <td> {{ $plano->name}} </td>
                                    <td> {{ $plano->total}} </td>
                                 
                    
                                       

        <td class="project-actions text-right" >
            <a class="btn btn-primary btn-sm" href="/secretaria_pedagogica/ver_orientacao_professor/{{ $plano->id}}">
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