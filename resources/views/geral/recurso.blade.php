@extends('layouts.main_go')
@section('title','Recursos de Nota')
@section('content')

<section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
        

      

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h4>Presença e Ausência </h4>

                <h5> Ponto Biometríco</h5>
              </div>
              <div class="icon">
                <i class="fa-solid fa-hand"></i>
              </div>
              <a href="" class="small-box-footer">Ver todas <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{$count_formacoes}}</h3>

                <h5>Professores</h5>
              </div>
              <div class="icon">
                <i class="fa-solid fa-user-tie"></i>
              </div>
              <a href="{{ route('geral.professores') }}" class="small-box-footer">Ver todas <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>2</h3>

                <h5>Directores</h5>
              </div>
              <div class="icon">
                <i class="fa-solid fa-user-tie"></i>
              </div>
              <a href="{{ route('geral.diretores') }}" class="small-box-footer">Ver todas <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

        

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{$secretarios}}</h3>

                <h5>Secretários</h5>
              </div>
              <div class="icon">
                <i class="fa-solid fa-user-large-slash"></i>
              </div>
              <a href="{{ route('geral.secretarios') }}" class="small-box-footer">Ver todas <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{$est_efalta}}</h3>

                <h5>Funcionarios</h5>
              </div>
              <div class="icon">
                <i class="fa-solid fa-user-xmark"></i>
              </div>
              <a href="{{ route('geral.funcionario') }}" class="small-box-footer">Ver todas <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{$orie}}</h3>

                <h5>Faltas De funcionarios</h5>
              </div>
              <div class="icon">
                <i class="fa-solid fa-person-chalkboard"></i>
              </div>
              <a href="{{ route('geral.ver_faltaf') }}" class="small-box-footer">Ver todas <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{$disciplinas}}</h3>

                <h5>Faltas De Professores</h5>
              </div>
              <div class="icon">
                <i class="fa-solid fa-person-chalkboard"></i>
              </div>
              <a href="{{ route('geral.ver_falta_professor') }}" class="small-box-footer">Ver todas <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

      
        
          
          <!-- ./col -->
        </div>
        <!-- /.row -->
        
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
@endsection