@extends('layouts.main_do')
@section('title','Boletins')
@section('content')


<section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title" style=" font-weight:bolder ;">Notas Antigas Parte 2</h3> 

          <div class="card-tools">
           

            
          </div>

          
        </div>
        <div class="card-body p-0">
            
          <table class="table table-striped projects">
              <thead>
                  <tr>
                  <th>Data de Envio</th>
                                        <th>Número de provas</th>
                                        <th>Disciplina</th>
                                        <th>classe</th>
                    
                    
                  </tr>
              </thead>
              <tbody>
                @foreach( $provas as $prova) 
                <tr>
               
                 
                   
                    <td>{{ $prova->created_at}}</td>
                    <td>{{ $prova->total}}</td>
                    <td>@if($prova->mix_id == 1)
                        Matemática
                    @elseif($prova->mix_id == 2)
                          Química
                    @elseif($prova->mix_id == 3)
                         Fisica
                    @elseif($prova->mix_id == 4)
                    L. Portuguesa
                    @elseif($prova->mix_id == 5)
                    Francês
                    @elseif($prova->mix_id == 6)
                    Inglês                
                    @elseif($prova->mix_id == 7)
                    Biologia
                    @elseif($prova->mix_id == 8)
                          Geologia
                    @elseif($prova->mix_id == 9)
                          Filosofia
                    @elseif($prova->mix_id == 10)
                        Informática
                    @elseif($prova->mix_id == 11)
                         Geometria Descritiva
                    @elseif($prova->mix_id == 12)
                        DNL
                    @elseif($prova->mix_id == 13)
                       Educação Física
                   
                   
                    @endif</td>
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

        <td class="project-actions text-right" >
            <a class="btn btn-primary btn-sm" href="/pedagogia/ver_info_nota_professor_um/{{ $prova->created_at}}">
            <i class="fa-solid fa-pen-to-square"></i>
                
                Validar
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
    