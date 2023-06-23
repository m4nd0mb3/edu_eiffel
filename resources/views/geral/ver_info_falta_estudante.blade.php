@extends('layouts.main_go')
@section('title','Ver Faltas')
@section('content')
<section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title" style=" font-weight:bolder ;">Faltas dos Estudantes</h3> 

          <div class="card-tools">
           

              
          </div>

          
        </div>
        <div class="card-body p-0">
            
          <table class="table table-striped projects">
              <thead>
                <tr>
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
        <td class="project-actions text-right" >
            <a class="btn btn-primary btn-sm" href="/geral/ver_info_falta_total_estudante/{{ $plano->liceu}}/{{ $plano->classe}}/{{ $plano->id}}">
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