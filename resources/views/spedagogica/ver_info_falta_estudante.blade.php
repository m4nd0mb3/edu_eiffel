@extends('layouts.main_spo')
@section('title','Ver Faltas')
@section('content')
<section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title" style=" font-weight:bolder ;">Faltas dos Estudantes </h3> 

          <div class="card-tools">
           

              <a class="btn btn-app bg-danger" href="{{ route('secretaria_pedagogica.falta_professores') }}" >
                <i class="fas fa-edit"></i> Enviar Nova Falta
              </a>
          </div>

          
        </div>
        <div class="card-body p-0">
            
          <table class="table table-striped projects">
              <thead>
                  
              <th>Id</th>
                                        <th>Nome do Estudante</th>
                                        <th>Número de Faltas</th>
                                      
                                      
                                       
                                        
                                    </tr>
                                    @foreach( $totals as $plano) 
                                    <tr>
                                    <td> {{ $plano->id}} </td>
                                    <td> {{ $plano->name}} </td>
                                    <td> {{ $plano->total}} </td>
                                 
                                   
                                     
                                       
                                       
                                       
                                       <td>

                                       <td>
                                            <a class="btn btn-primary btn-sm" href="/secretaria_pedagogica/ver_info_falta_total_estudante/{{$plano->liceu}}/{{$plano->classe}}/{{$plano->id}}">
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