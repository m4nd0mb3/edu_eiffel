@extends('layouts.main_coordenador')
@section('title','Notas dos Professores')
@section('content')



<section class="content">

    <!-- Default box -->
    <div class="card">
      <div class="card-header">
       
          
                    <h4> Notas validadas </h4>
       

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
                                            <a class="btn btn-primary btn-sm" href="/coordenacao/ver_nota_validada_individual/{{ $plano->liceu}}/{{ $plano->id}}">
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