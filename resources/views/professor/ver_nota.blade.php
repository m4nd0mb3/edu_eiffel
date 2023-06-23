@extends('layouts.main_po')
@section('title','Boletins')
@section('content')
<section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title" style=" font-weight:bolder ;">Notas não Validadas</h3> 

          <div class="card-tools">
        
            
              <a class="btn btn-app bg-success" href="{{ route('professor.turmas') }}" >
                <i class="fas fa-edit"></i> Enviar Novo  Boletim
              </a>

                 
          <a class="btn btn-app bg-success" href="" >
          <i class="fa fa-file-pdf"></i>  Importar caderneta pdf
              </a>


          <a class="btn btn-app bg-success" href="" >
          <i class="fas fa-file-excel"></i>  Importar caderneta excel
              </a>

          </div>

          
        </div>
        <div class="card-body p-0">
            
          <table class="table table-striped projects">
              <thead>
                  <tr>
                    <th  style="color: red;">Data de Envio</th>
                    <th  style="color: red;">Número de provas</th>
                    <th  style="color: red;">Classe</th>
                    
                    
                  </tr>
              </thead>
              <tbody>
                @foreach( $provas as $prova) 
                <tr>
               
                 
                   
                    <td>{{ $prova->created_at}}</td>
                    <td>{{ $prova->total}}</td>
                   
                    <td>@if($prova->classe == 1)
                        10 A
        @elseif($prova->classe == 2)
            10 B
        @elseif($prova->classe == 3)
            11 A
        @elseif($prova->classe == 4)
            11 B
        @elseif($prova->classe == 5)
            12 A
        @elseif($prova->classe == 6)
            12 B
        @elseif($prova->classe == 7)
            -
                  
        @endif</td>

        <td class="project-actions text-right"  style="display: flex;">
            <a class="btn btn-primary btn-sm" href="/professor/ver_info_nota_professor/{{ $prova->created_at}}">
                <i class="fa-solid fa-eye"></i>
                
                Ver
            </a>
            <a class="btn btn-info btn-sm" href="/professor/editar_provas/{{ $prova->created_at}}">
                <i class="fas fa-pencil-alt">
                </i>
                Editar
            </a>

            <form action=" /professor/eliminar_p/{{ $prova->mix_id}}/{{ $prova->created_at}}" method="post">

                @csrf
               @method('DELETE')

               <button type="submit" class="btn btn-danger btn-sm"> <i class="fas fa-trash">
                </i>Eliminar</button>
   
                </form>
           
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
    