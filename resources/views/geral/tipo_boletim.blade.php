@extends('layouts.main_go')
@section('title','Boletins de Nota')
@section('content')

<section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-light 	">
              <div class="inner">
              <h3> <i class="fa-solid fa-pen-to-square"></i></h3>

                  <h5>PCT's</h5>
              </div>
              <div class="icon">
              <i class="fa-solid fa-book-open"></i>
              </div>
              <a href="{{ route('geral.enviar_pct') }}" class="small-box-footer">Ver todas <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-light 	">
              <div class="inner">
              <h3> {{$count_estudantes}}</h3>

                  <h5>PCT's Validadas</h5>
              </div>
              <div class="icon">
              <i class="fa-solid fa-book-open"></i>
              </div>
              <a href="{{ route('geral.ver_pct_validada') }}" class="small-box-footer">Ver todas <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class=" small-box bg-danger">
              <div class="inner">
              <h3>{{$count_faltas}}</h3>

                <h5>Boletins Enviados</h5>
              </div>
              <div class="icon">
              <i class="fa-solid fa-file-circle-xmark"></i>
              </div>
              <a href="{{ route('geral.ver_nota') }}" class="small-box-footer">Ver todas <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
              <h3>{{$count_orientacoes}}</h3>
                <h5>Ver Boletins Validados</h5>
              </div>
              <div class="icon">
              <i class="fa-solid fa-file-circle-check"></i>
              </div>
              <a href="{{ route('geral.ver_nota_validada') }}" class="small-box-footer">Ver todas <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
              <h3><i class="fa-solid fa-file-export"></i></h3>

                <h5>Imprimir Pautas Trimestrais</h5>
              </div>
              <div class="icon">
              <i class="fa-solid fa-folder-tree"></i>
              </div>
              @if(Auth::guard('geral')->user()->liceu == 3)
              <a href="/pautandalatando.ods" class="small-box-footer">Ver as Turmas <i class="fas fa-arrow-circle-right"></i></a>

                                   
                              @endif  </div>
          </div>

        
        
         
        <!-- /.row -->
        
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    
@endsection