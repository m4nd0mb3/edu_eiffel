@extends('layouts.main_spo')
@section('title','Secretário Pedagógico')
@section('content')

<section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">

        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success 	">
              <div class="inner">
                <h3><i class="fa-solid fa-key"></i></h3>

                  <h5>Alterar Senha</h5>
              </div>
              <div class="icon">
                <i class="fa-solid fa-lock"></i>
              </div>
              <a href="{{ route('secretaria_pedagogica.alterar_senha')}}" class="small-box-footer">Clique para Alterar <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success 	">
              <div class="inner">
                <h3>
                <i class="fa-solid fa-boxes-packing"></i>
                </h3>

                  <h5>Boletins de Nota</h5>
              </div>
              <div class="icon">
                <i class="fa-solid fa-file-circle-check"></i>
              </div>
              <a href="
    {{ route('secretaria_pedagogica.ver_nota') }}
              " class="small-box-footer">Ver todas <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class=" small-box bg-success">
              <div class="inner">
                <h3>{{$count_estudantes}}<sup style="font-size: 20px"></sup></h3>

                <h5> Estudantes</h5>
              </div>
              <div class="icon">
                <i class="fa-solid fa-user-graduate"></i>
              </div>
              <a href="{{ route('secretaria_pedagogica.estudantes') }}" class="small-box-footer">Ver todas <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
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
              <a href="{{ route('secretaria_pedagogica.professores') }}" class="small-box-footer">Ver todas <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{$planos}}</h3>

                <h5>Planos de aula</h5>
              </div>
              <div class="icon">
                <i class="fa-solid fa-book-open-reader"></i>
              </div>
              <a href="
    {{ route('secretaria_pedagogica.plano_enviados') }}
              " class="small-box-footer">Ver todas <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{$count_orientacoes}}</h3>

                <h5>Faltas Estudantes</h5>
              </div>
              <div class="icon">
                <i class="fa-solid fa-book-open-reader"></i>
              </div>
              <a href="{{ route('secretaria_pedagogica.falta') }}" class="small-box-footer">Ver todas <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{$count_faltas}}</h3>

                <h5>Faltas Professores</h5>
              </div>
              <div class="icon">
                <i class="fa-solid fa-book-open-reader"></i>
              </div>
              <a href="{{ route('secretaria_pedagogica.falta_professores') }}" class="small-box-footer">Ver todas <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{$orienta}}</h3>

                <h5>Orientações</h5>
              </div>
              <div class="icon">
                <i class="fa-solid fa-person-chalkboard"></i>
              </div>
              <a href="{{ route('secretaria_pedagogica.orientacoes_enviadas') }}" class="small-box-footer">Ver todas <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

         
          <!-- ./col -->
        
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
             
              <div class="inner">
                <h3> {{$notificacao}}<sup style="font-size: 20px"> </sup></h3>
                
              <h5>Notificações</h5>
              </div>
              <div class="icon">
                <i class="fa-regular fa-bell"></i>
              </div>
              <a href="#" class="small-box-footer">Ver todas <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
             
              <div class="inner">
                <h3> {{$declaracao}}<sup style="font-size: 20px"> </sup></h3>
                

              <h5>Solicitações</h5>
              </div>
              <div class="icon">
                <i class="fa-solid fa-pen-to-square"></i>
              </div>
              <a href="{{ route('secretaria_pedagogica.declaracoes_estudantes') }}" class="small-box-footer">Ver todas <i class="fas fa-arrow-circle-right"></i></a>
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
              <a href="#" class="small-box-footer">Ver todas <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <!-- ./col -->
        </div>
        <!-- /.row -->
        
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    
@endsection