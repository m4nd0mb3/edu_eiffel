@extends('layouts.main_go')
@section('title','Ver Faltas')
@section('content')

<section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title" style=" font-weight:bolder ;">Faltas dos estudantes </h3> 

          <div class="card-tools">
           

             
          </div>

          
        </div>
        <div class="card-body p-0">
            
          <table class="table table-striped projects">
              <thead>
                  <tr>
                  <th>Classe / Turma</th>
                 <th>Número de Faltas Mensal</th>
                                      
                                      
                                       
                    
                  </tr>
              </thead>
              <tbody>
              @foreach( $estudantes as $plano) 
                                    <tr>
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
                 <td> {{ $plano->total}} </td>
                 <td>
                                       <a class="btn btn-primary btn-sm" href="/geral/ver_info_falta_estudante/{{ $plano->classe}}">
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