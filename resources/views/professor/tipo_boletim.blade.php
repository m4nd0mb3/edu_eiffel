@extends('layouts.main_po')
@section('title','Boletins de Nota')
@section('content')

<br>
<br>
<br>
<section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-light 	">
              <div class="inner">
              <h3> <i class="fa-solid fa-pen-to-square"></i></h3>

                  <h5>Enviar novo Boletim</h5>
              </div>
              <div class="icon">
              <i class="fa-solid fa-book-open"></i>
              </div>
              <a href="{{ route('professor.create_boletim', ['liceu' => $professor->liceu]) }}" class="small-box-footer">Ver todas <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class=" small-box bg-danger">
              <div class="inner">
              <h3>{{$notas_enviadas}}</h3>

                <h5>Ver Boletins Enviados</h5>
              </div>
              <div class="icon">
              <i class="fa-solid fa-file-circle-xmark"></i>
              </div>
              <a href="{{ route('professor.ver_nota') }}" class="small-box-footer">Ver todas <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
              <h3>{{$notas_validadas}}</h3>
                <h5>Ver Boletins Validados</h5>
              </div>
              <div class="icon">
              <i class="fa-solid fa-file-circle-check"></i>
              </div>
              <a href="{{ route('professor.ver_nota_validada') }}" class="small-box-footer">Ver todas <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
              <h3><i class="fa-solid fa-file-export"></i></h3>

                <h5>Imprimir Caderneta</h5>
              </div>
              <div class="icon">
              <i class="fa-solid fa-folder-tree"></i>
              </div>
              <a href="{{ route('professor.listar_cardenetas', ['liceu' => $professor->liceu]) }}" class="small-box-footer">Em Contrução <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

        
        
         
        <!-- /.row -->
        
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    
@endsection