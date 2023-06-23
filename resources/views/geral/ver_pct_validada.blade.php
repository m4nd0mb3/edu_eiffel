@extends('layouts.main_go')
@section('title','Ver Notas')
@section('content')<section class="content">

<!-- Default box -->
<div class="card">
  <div class="card-header">
          
            
                <h4>Boletins do Professor Validadas</h4> 

    <div class="card-tools">
                    
    </div>
                       
    <div class="card-body p-0">
                            <table class="table table-striped projects">
                                <tr>
                                   
                                    <th>Id</th>
                                    <th>Nome do Professor</th>
                                    <th>Número de Provas Submetidas</th>
                                  
                                  
                                    <th>Ver Boletins</th>
                                   
                                    
                                </tr>
                                @foreach( $totals as $plano) 
                                <tr>
                                <td> {{ $plano->id}} </td>
                                <td> {{ $plano->name}} </td>
                               
                                <td> {{ $plano->total}} </td>
                             
                               
                                 
                                   
                                   
                                   
                                   <td>

                                    <a class="btn btn-primary btn-sm" href="/geral/ver_nota_professor_pct_validada/{{ $plano->id}}">
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