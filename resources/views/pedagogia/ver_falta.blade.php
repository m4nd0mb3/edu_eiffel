@extends('layouts.main_do')
@section('title','Ver Faltas')
@section('content')
<section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title" style=" font-weight:bolder ;">Faltas dos Professores </h3> 

          <div class="card-tools">
           

             
          </div>

          
        </div>
        <div class="card-body p-0">
            
          <table class="table table-striped projects">
              <thead>
                  <tr>
                  <th>Id</th>
                                        <th>Nome do Professor</th>
                                        <th>Número de Faltas</th>
                                      
                                      
                                       
                    
                  </tr>
              </thead>
              <tbody>
              @foreach( $professores as $plano) 
                                    <tr>
                                    <td> {{ $plano->id}} </td>
                                    <td> {{ $plano->name}} </td>
                                    <td> {{ $plano->total}} </td>
                 <td>
                                       <a class="btn btn-primary btn-sm" href="/pedagogia/ver_info_falta_professor/{{ $plano->liceu}}/{{ $plano->id}}">
                <i class="fa-solid fa-eye"></i>
                </i>
                Ver
            </a>
                                       </td>
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