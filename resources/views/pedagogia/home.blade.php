@extends('layouts.main_do')
@section('title','Diretor Pedagogico')
@section('content')

<!-- Main content -->
<section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">


        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger 	">
              <div class="inner">
                <h3><i class="fa-solid fa-key"></i></h3>

                  <h5>Alterar Senha</h5>
              </div>
              <div class="icon">
                <i class="fa-solid fa-lock"></i>
              </div>
              <a href="{{ route('pedagogia.alterar_senha')}}" class="small-box-footer">Clique para Alterar <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success 	">
              <div class="inner">
                <h3>
                <i class="fa-solid fa-file-circle-check"></i>

                </h3>

                  <h5>Boletins de Nota</h5>
              </div>
              <div class="icon">
                <i class="fa-solid fa-file-circle-check"></i>
              </div>
              <a href="{{ route('pedagogia.tipo_boletim') }}" class="small-box-footer">Ver todas <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class=" small-box bg-success">
              <div class="inner">
                <h3>{{ $count_estudantes}}<sup style="font-size: 20px"></sup></h3>

                <h5> Estudantes</h5>
              </div>
              <div class="icon">
                <i class="fa-solid fa-user-graduate"></i>
              </div>
              <a href="{{ route('pedagogia.estudantes') }}" class="small-box-footer">Ver todas <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{ $count_formacoes}}</h3>

                <h5>Professores</h5>
              </div>
              <div class="icon">
                <i class="fa-solid fa-user-tie"></i>
              </div>
              <a href="{{ route('pedagogia.professores') }}" class="small-box-footer">Ver todas <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{ $count_orientacoes}}</h3>

                <h5>Planos de aula</h5>
              </div>
              <div class="icon">
                <i class="fa-solid fa-book-open-reader"></i>
              </div>
              <a href="{{ route('pedagogia.plano_enviados') }}" class="small-box-footer">Ver todas <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{$est_efalta}}</h3>

                <h5>Faltas Estudantes</h5>
              </div>
              <div class="icon">
                <i class="fa-solid fa-user-large-slash"></i>
              </div>
              <a href="#" class="small-box-footer">Ver todas <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{$disciplinas}}</h3>

                <h5>Faltas Professores</h5>
              </div>
              <div class="icon">
                <i class="fa-solid fa-user-xmark"></i>
              </div>
              <a href="{{ route('pedagogia.ver_falta') }}" class="small-box-footer">Ver todas <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{$orie}}</h3>

                <h5>Orientações</h5>
              </div>
              <div class="icon">
                <i class="fa-solid fa-person-chalkboard"></i>
              </div>
              <a href="{{ route('pedagogia.orientacoes_enviadas') }}" class="small-box-footer">Ver todas <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{$form}}</h3>

                <h5>Formações</h5>
              </div>
              <div class="icon">
                <i class="fa-solid fa-users-rays"></i>
              </div>
              <a href="{{ route('pedagogia.ver_formacao') }}" class="small-box-footer">Ver todas <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
             
              <div class="inner">
                <h3> 1<sup style="font-size: 20px"> </sup></h3>
                

              <h5>Notificações</h5>
              </div>
              <div class="icon">
                <i class="fa-regular fa-bell"></i>
              </div>
              <a href="{{ route('pedagogia.ver_totalnotificacoes') }}" class="small-box-footer">Ver todas <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

         

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
             
              <div class="inner">
                <h3> {{ $count_faltas}}<sup style="font-size: 20px"> </sup></h3>
                

              <h5>Declarações Estudantes</h5>
              </div>
              <div class="icon">
                <i class="fa-solid fa-pen-to-square"></i>
              </div>
              <a href="{{ route('pedagogia.declaracoes_estudantes') }}" class="small-box-footer">Ver todas <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3> <i class="fa-regular fa-envelope"></i></h3>

                <h5>Apoio Tecnico</h5>
              </div>
              <div class="icon">
                <i class="fa-solid fa-headset"></i>
              </div>
              <a href="{{ route('pedagogia.ver_relatos') }}" class="small-box-footer">Ver todas <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

           <!-- ./col -->
           <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3> 
                <i class="fa-solid fa-download"></i>

                </h3>

                <h5>Dados Recentes</h5>
              </div>
              <div class="icon">
                <i class="fa-solid fa-download"></i>
              </div>
              <a href="{{ route('pedagogia.ultimo_dado') }}" class="small-box-footer">Ver todas <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <!-- ./col -->
        </div>
        <!-- /.row -->
        
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
@endsection