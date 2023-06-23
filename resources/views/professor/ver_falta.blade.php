@extends('layouts.main_po')
@section('title','Ver Faltas')
@section('content')<section class="content">

<!-- Default box -->
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Faltas</h3>

    <div class="card-tools">
      <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
        <i class="fas fa-minus"></i></button>
      <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
        <i class="fas fa-times"></i></button>
    </div>
  </div>
  <div class="card-body p-0">
    <table class="table table-striped projects">
        <thead>
            <tr>
                  
            <th>Id</th>
                                      
                                      
                                      <th>Disciplina</th>
                                      <th>Data</th>
                                      <th>Classe / Turma</th>
                <th style="width: 8%" class="text-center">
                    Estado
                </th>
                <th style="width: 20%">
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach( $professores as $solicitacao) 
                                    <tr>
                                    <td> {{ $solicitacao->id}} </td>
                                       
                                   <td>@if($solicitacao->disciplina == 1)
                                            Matemática
                                        @elseif($solicitacao->disciplina == 2)
                                              Fisica
                                        @elseif($solicitacao->disciplina == 3)
                                             Quimíca
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
                                              Educação Fisica
                                        @elseif($solicitacao->disciplina == 11)
                                              DNL
                                        @elseif($solicitacao->disciplina == 12)
                                              Matematique Bilingue
                                        @elseif($solicitacao->disciplina == 13)
                                              Informática
                                        @elseif($solicitacao->disciplina == 14)
                                              Geometria Analitica
                                       
                                        @endif
                                        </td>

                                     
                                       
                                       
                                        <td> {{ $solicitacao->data}} </td>
                                        <td> @if($solicitacao->classe == 1)
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
                                      
                            @endif</td>
                            <td class="project-state">
                    <span class="badge badge-danger">Não Justificada</span>
                </td>
                <td class="project-actions text-right">
                    <a class="btn btn-primary btn-sm" href="#">
                        <i class="fas fa-folder">
                        </i>
                        View
                    </a>
                    <a class="btn btn-info btn-sm" href="#">
                        <i class="fas fa-pencil-alt">
                        </i>
                        Edit
                    </a>
                    <a class="btn btn-danger btn-sm" href="#">
                        <i class="fas fa-trash">
                        </i>
                        Delete
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

 
@endsection