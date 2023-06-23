@extends('layouts.main_eo')
@section('title','Estudante')
@section('content')


 <!-- Main content -->
 <section class="content">
      <div class="container-fluid">
        

        
        <!-- /.row -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Professores </h3>

                <div class="card-tools">
                  
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <th style = "color:red;">Nome Professor</th>
                                       
                  
                  
                    
 
 
</tr>
</thead>
<tbody>
@foreach( $professores as $plano) 
                 <tr>
              
                 <td> {{ $plano->name}} </td>
  
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
                  <h3 class="card-title">Colegas de Turma</h3>
  
                  <div class="card-tools">
                    
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0" style="height: 300px;">
                  <table class="table table-head-fixed text-nowrap">
                    <thead>

                     <tr>
                  <th>Nome</th>
                  
                    
                  </tr>
              </thead>
              <tbody>
                @foreach( $estudantes as $prova) 
                <tr>
               
                 
                   
                    <td> {{ $prova->name}} </td>

                  
               

                
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
                  <h3 class="card-title">Directores</h3>
  
                  <div class="card-tools">
                    
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0" style="height: 300px;">
                  <table class="table table-head-fixed text-nowrap">
                    <thead>
                        <tr>
                                       
                                        
                            <th>Nome Director</th>
                            <th>Função</th>
                         
                            
                          
                            
                        @foreach( $gerais as $solicitacao) 
                        </tr>

                           <td> {{ $solicitacao->name}} </td>
                           <td> Director Geral </td>

                        </tr>
                        @endforeach  
                       
                        @foreach( $pedagogicos as $solicitacao) 
                        </tr>

                           <td> {{ $solicitacao->name}} </td>
                           <td> Director Pedagógico </td>

                        </tr>
                        @endforeach  

                        @foreach( $administrativos as $solicitacao) 
                        </tr>

                           <td> {{ $solicitacao->name}} </td>
                           <td> Director Administrativo </td>

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
                  <h3 class="card-title">Disciplinas </h3>
  
                  <div class="card-tools">
                    
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0" style="height: 300px;">
                  <table class="table table-head-fixed text-nowrap">
                    <thead>
                        <tr>
                            <th>Disciplina</th>
                                                 
                                           
                              
                              
                            </tr>
                        </thead>
                        <tbody>                   
                    @foreach( $disciplinas as $orientacao) 
                                              <tr>
                           <td> {{ $orientacao->disciplina}} </td>

                                                 
                                          
                                                 
                                                
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

   <br> 

   <br> 
   <br> 
   <br> 
   <br> 
   <br> 
   <br> 
   <br> 
   <br> 
   <br> 
   <br> 
   <br> 
@endsection
