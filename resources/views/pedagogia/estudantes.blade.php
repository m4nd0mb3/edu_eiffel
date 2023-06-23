@extends('layouts.main_do')
@section('title','Ver  Estudantes')
@section('content')
<section class="content">
      <div class="container-fluid">
        <div class="row">    
            

        
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Turmas do Liceu</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                    <th style="color: red;">Classe / Turma</th>
                    <th style="color: red;">Número de Estudantes</th>
                                      
                                      
                                        <th style="color: red;">Ver Turma</th>
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
                                       <a class="btn btn-primary btn-sm" href="/pedagogia/ver_turma_as/{{ $plano->classe}}">
                <i class="fa-solid fa-eye"></i>
                </i>
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
          </div>
        </div>
        
        </div>


</section>                      
@endsection