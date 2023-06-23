@extends('layouts.main_do')
@section('title','Boletins de Nota')
@section('content')
   <!-- Main content -->
   <section class="content">
      <div class="container-fluid">
        

        
        <!-- /.row -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Ultimos Planos Lançados</h3>

                <div class="card-tools">
                  
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <th style = "color:red;">Nome Professor</th>
                                       
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
              
                 <td> {{ $plano->professor->name}} </td>
                    
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



</td>
                 </tr>
                 @endforeach  

                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->



        <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Ultimas Faltas dos Professores</h3>
  
                  <div class="card-tools">
                    
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0" style="height: 300px;">
                  <table class="table table-head-fixed text-nowrap">
                    <thead>
                        <tr>
                                       
                                        
                            <th>Nome Professor</th>
                            <th>Disciplina</th>
                            <th>Data</th>
                            <th>Classe / Turma</th>
                            
                          
                            
                        </tr>
                        @foreach( $faltas_p as $solicitacao) 

                                           <td> {{ $plano->professor->name}} </td>


                   
                            <td>  @if($solicitacao->disciplina == 1)
                                Matemática
                            @elseif($solicitacao->disciplina == 2)
                                  Química
                            @elseif($solicitacao->disciplina == 3)
                                 Fisica
                            @elseif($solicitacao->disciplina == 4)
                            L. Portuguesa
                            @elseif($solicitacao->disciplina == 5)
                            Francês
                            @elseif($solicitacao->disciplina == 6)
                            Inglês                
                            @elseif($solicitacao->disciplina == 7)
                            Biologia
                            @elseif($solicitacao->disciplina == 8)
                                  Geologia
                            @elseif($solicitacao->disciplina == 9)
                                  Filosofia
                            @elseif($solicitacao->disciplina == 10)
                                Informática
                            @elseif($solicitacao->disciplina == 11)
                                 Geometria Descritiva
                            @elseif($solicitacao->disciplina == 12)
                                DNL
                            @elseif($solicitacao->disciplina == 13)
                               Educação Física
                           
                           
                            @endif
                            </td>

                            <td> {{ $solicitacao->data}} </td>
                            <td>   @if($solicitacao->classe == 1)
                                10 A
                @elseif($solicitacao->classe == 2)
                    10 B
                @elseif($solicitacao->classe == 3)
                    11 A
                @elseif($solicitacao->classe == 4)
                    11 B
                @elseif($solicitacao->classe == 5)
                    12 A
                @elseif($solicitacao->classe == 6)
                    12 B
                @elseif($solicitacao->classe == 7)
                    -        
                @endif </td>
                           

                        </tr>
                        @endforeach  
                       
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
          </div>
        
          

          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Ultimas Notas Lançadas</h3>
  
                  <div class="card-tools">
                    
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0" style="height: 300px;">
                  <table class="table table-head-fixed text-nowrap">
                    <thead>

                     <tr>
                  <th>Nome do Professor</th>
                  <th>Data de Envio</th>
                                        <th>Número de provas</th>
                                        <th>Disciplina</th>
                                        <th>classe</th>
                                        <th>Opção</th>
                    
                    
                  </tr>
              </thead>
              <tbody>
                @foreach( $provas as $prova) 
                <tr>
               
                 
                   
                    <td> {{ $prova->professor_id}} </td>

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
            <a class="btn btn-primary btn-sm" href="/geral/ver_info_nota_professor/{{ $prova->created_at}}">
            <i class="fa-solid fa-eye"></i>
                
                Ver
         

         
           
        </td>
               

                
                </tr>
                @endforeach  
                  
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
          </div>
        
          

          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Ultimas Orientações </h3>
  
                  <div class="card-tools">
                    
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0" style="height: 300px;">
                  <table class="table table-head-fixed text-nowrap">
                    <thead>
                        <tr>
                            <th>Id do Professor</th>
                                                 
                            <th>Disciplina</th>
                                                 
                                                
                                                 <th>classe / Turma</th>
                                                 <th>Orientação dada</th>
                                                 <th>Link</th>
                              
                              
                            </tr>
                        </thead>
                        <tbody>                   
                                           @foreach( $orientacoes as $orientacao) 
                                              <tr>
                                                <td> {{ $orientacao->professor->name}} </td>

                                                 
                                             <td> @if($orientacao->disciplina == 1)
                                                      Matemática
                                                  @elseif($orientacao->disciplina == 2)
                                                        Química
                                                  @elseif($orientacao->disciplina == 3)
                                                       Fisica
                                                  @elseif($orientacao->disciplina == 4)
                                                  L. Portuguesa
                                                  @elseif($orientacao->disciplina == 5)
                                                  Francês
                                                  @elseif($orientacao->disciplina == 6)
                                                  Inglês                
                                                  @elseif($orientacao->disciplina == 7)
                                                  Biologia
                                                  @elseif($orientacao->disciplina == 8)
                                                        Geologia
                                                  @elseif($orientacao->disciplina == 9)
                                                        Filosofia
                                                  @elseif($orientacao->disciplina == 10)
                                                      Informática
                                                  @elseif($orientacao->disciplina == 11)
                                                       Geometria Descritiva
                                                  @elseif($orientacao->disciplina == 12)
                                                      DNL
                                                  @elseif($orientacao->disciplina == 13)
                                                     Educação Física
                                                 
                                                  @endif </td>
          
                                               
                                                 
                                                  <td>  @if($orientacao->classe == 1)
                                                      10 A
                                      @elseif($orientacao->classe == 2)
                                          10 B
                                      @elseif($orientacao->classe == 3)
                                          11 A
                                      @elseif($orientacao->classe == 4)
                                          11 B
                                      @elseif($orientacao->classe == 5)
                                          12 A
                                      @elseif($orientacao->classe == 6)
                                          12 B
                                      @elseif($orientacao->classe == 7)
                                          -
                                                
                                      @endif</td>
                                                 
                                                  <td> {{ $orientacao->orientacao}} </td>
          
                                                  <td> <a href="{{ $orientacao->link}}">{{ $orientacao->link}}</a> </td>
                                              
                                                 
          
                                                  <td class="project-actions text-right" >
                      <a class="btn btn-primary btn-sm" href="/professor/media/orientacao/{{ $orientacao->ficheiro}}" download = "Orientacao @if($orientacao->disciplina == 1)
                                                          Matemática
                                                      @elseif($orientacao->disciplina == 2)
                                                            Química
                                                      @elseif($orientacao->disciplina == 3)
                                                           Fisica
                                                      @elseif($orientacao->disciplina == 4)
                                                      L. Portuguesa
                                                      @elseif($orientacao->disciplina == 5)
                                                      Francês
                                                      @elseif($orientacao->disciplina == 6)
                                                      Inglês                
                                                      @elseif($orientacao->disciplina == 7)
                                                      Biologia
                                                      @elseif($orientacao->disciplina == 8)
                                                            Geologia
                                                      @elseif($orientacao->disciplina == 9)
                                                            Filosofia
                                                      @elseif($orientacao->disciplina == 10)
                                                          Informática
                                                      @elseif($orientacao->disciplina == 11)
                                                           Geometria Descritiva
                                                      @elseif($orientacao->disciplina == 12)
                                                          DNL
                                                      @elseif($orientacao->disciplina == 13)
                                                         Educação Física
                                                     
                                                      @endif   ">
                      <i class="fa fa-download"></i>
                          
                          Baixar
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
            </div>
          </div>
          
      </div><!-- /.container-fluid -->
    </section>

    
@endsection