@extends('layouts.main_po')
@section('title','Formações')
@section('content')


<!-- Default box -->
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Formação a Caminho</h3>

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
                  
            <th>id da formação</th>
                              
                             
                              <th>Data de inicio</th>
                              <th>Data de termino</th>
                              <th>Disciplina</th>
                              <th>Tema</th>
                               
            </tr>
        </thead>
        <tbody>
        @foreach( $gerais as $declaracao)
                            <tr>
                                <td>{{$declaracao->id_formacao}}</td>
                                <td>{{$declaracao->data_inicio}}</td>
                                <td>{{$declaracao->data_termino}}</td>
                            
                                <td>@if($declaracao->disciplina == 1)
                                            Matemática
                                        @elseif($declaracao->disciplina == 2)
                                              Fisica
                                        @elseif($declaracao->disciplina == 3)
                                             Quimíca
                                        @elseif($declaracao->disciplina == 4)
                                        L. Portuguesa
                                        @elseif($declaracao->disciplina == 5)
                                        Francês
                                        @elseif($declaracao->disciplina == 6)
                                        Inglês                
                                        @elseif($declaracao->disciplina == 7)
                                        Biologia
                                        @elseif($declaracao->disciplina == 8)
                                              Geologia
                                        @elseif($declaracao->disciplina == 9)
                                              Filosofia
                                        @elseif($declaracao->disciplina == 10)
                                              Educação Fisica
                                        @elseif($declaracao->disciplina == 11)
                                              DNL
                                        @elseif($declaracao->disciplina == 12)
                                              Matematique Bilingue
                                        @elseif($declaracao->disciplina == 13)
                                              Informática
                                        @elseif($declaracao->disciplina == 14)
                                              Geometria Analitica
                                       
                                        @endif
                                        </td>
                                <td>{{$declaracao->mensagem}}</td>
                                
                              
                             
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