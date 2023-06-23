@extends('layouts.main_po')
@section('title','Professor')
@section('content')

<!-- Default box -->
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Notificações</h3>

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
                  
            <th>Tipo</th>
                                        <th>Mensagem</th>
                                        <th>Data</th>
                               
            </tr>
        </thead>
        <tbody>
                         @foreach( $administrativa as $prova) 
                                    <tr>
                                       
                                       
                                   <td>@if($prova->tipo == 1)
                                            Prova
                                        @elseif($prova->tipo == 2)
                                              Concurso
                                        @elseif($prova->tipo == 3)
                                             Aviso
                                      
                                        @endif
                                        </td>

                                     
                                        <td>{{ $prova->mensagem}}</td>
                                        <td>{{ $prova->created_at}}</td>
                                        <td>
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