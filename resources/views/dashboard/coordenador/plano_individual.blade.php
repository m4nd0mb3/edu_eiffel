@extends('layouts.main_coordenador')
@section('title','Preparações  de aula')
@section('content')



<section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title" style=" font-weight:bolder ;">Preparações  de aula </h3> 

          <div class="card-tools">
           

             
          </div>

          
        </div>
        <div class="card-body p-0">
            
          <table class="table table-striped projects">
              <thead>
                  <tr>
                  <th style = "color:red;">Id</th>
                                       
                                       <th style = "color:red;">Disciplina</th>
                                     
                                     
                                       <th style = "color:red;">Tema / Descrição</th>
                                       <th style = "color:red;">Data do Inicio do Plano</th>
                                       <th style = "color:red;">Data de Submissão</th>
                                       <th style = "color:red;">Classe / Turma</th>
                    
                    
                  </tr>
              </thead>
              <tbody>
              @foreach( $planos as $plano) 
                                    <tr>
                                 
                                    <td> {{ $plano->id}} </td>
                                       
                                   <td> @if($plano->disciplina == 1)
                                            Matemática
                                        @elseif($plano->disciplina == 2)
                                              Química
                                        @elseif($plano->disciplina == 3)
                                             Fisica
                                        @elseif($plano->disciplina == 4)
                                        L. Portuguesa
                                        @elseif($plano->disciplina == 5)
                                        Francês
                                        @elseif($plano->disciplina == 6)
                                        Inglês                
                                        @elseif($plano->disciplina == 7)
                                        Biologia
                                        @elseif($plano->disciplina == 8)
                                              Geologia
                                        @elseif($plano->disciplina == 9)
                                              Filosofia
                                        @elseif($plano->disciplina == 10)
                                            Informática
                                        @elseif($plano->disciplina == 11)
                                             Geometria Descritiva
                                        @elseif($plano->disciplina == 12)
                                            DNL
                                        @elseif($plano->disciplina == 13)
                                           Educação Física
                                       
                                       
                                        @endif
                                        </td>

                                     
                                       
                                        <td> {{ $plano->tema}} </td>
                                        <td> {{ $plano->data}} </td>
                                        <td> {{ $plano->created_at}} </td>
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
                                      
                            @endif</td>
                                       

                                        <td class="project-actions text-right" >
            <a class="btn btn-primary btn-sm" href="/media/professor/planos/{{$plano->plano}}" download = "Plano {{ $plano->professor->name}} {{ $plano->data}}  @if($plano->disciplina == 1)
                                            Matemática
                                        @elseif($plano->disciplina == 2)
                                              Química
                                        @elseif($plano->disciplina == 3)
                                             Fisica
                                        @elseif($plano->disciplina == 4)
                                        L. Portuguesa
                                        @elseif($plano->disciplina == 5)
                                        Francês
                                        @elseif($plano->disciplina == 6)
                                        Inglês                
                                        @elseif($plano->disciplina == 7)
                                        Biologia
                                        @elseif($plano->disciplina == 8)
                                              Geologia
                                        @elseif($plano->disciplina == 9)
                                              Filosofia
                                        @elseif($plano->disciplina == 10)
                                            Informática
                                        @elseif($plano->disciplina == 11)
                                             Geometria Descritiva
                                        @elseif($plano->disciplina == 12)
                                            DNL
                                        @elseif($plano->disciplina == 13)
                                           Educação Física
                                       
                                       
                                        @endif  ">
            <i class="fa fa-download"></i>
                
                Baixar
            </a>
           
            <a class="btn btn-success btn-sm" href="/media/professor/planos/{{$plano->plano}}"  target="_blank">
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
