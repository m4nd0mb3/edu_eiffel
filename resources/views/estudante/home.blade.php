@extends('layouts.main_eo')
@section('title','Estudante')
@section('content')
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
              <a href="{{ route('estudante.alterar_senha')}}" class="small-box-footer">Clique para Alterar <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning 	">
              <div class="inner">
                <h3>{{$count_provas}}</h3>

                  <h5>Provas</h5>
              </div>
              <div class="icon">
                <i class="fa-solid fa-file-circle-check"></i>
              </div>
              <a href="{{ route('estudante.mark') }}" class="small-box-footer">Ver todas <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class=" small-box bg-warning">
              <div class="inner">
                <h3>{{$count_faltas}}<sup style="font-size: 20px"></sup></h3>

                <h5>Faltas</h5>
              </div>
              <div class="icon">
                <i class="fa-solid fa-clock"></i>
              </div>
              <a href="{{ route('estudante.falta') }}" class="small-box-footer">Ver todas <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{$count_orientacoes}}</h3>

                <h5>Orientações</h5>
              </div>
              <div class="icon">
                <i class="fa-solid fa-person-chalkboard"></i>
              </div>
              <a href="{{ route('estudante.orientacao') }}" class="small-box-footer">Ver todas <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>                <i class="fa-regular fa-calendar-check"></i>
</h3>

                
                <h5>Horario</h5>
              </div>
              <div class="icon">
                <i class="fa-regular fa-calendar-check"></i>
              </div>
              <a href="#" class="small-box-footer">Ver todas <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning ">
              <div class="inner">
                <h3>0</h3>

                <h5>Trabalhos</h5>
              </div>
              <div class="icon">
                <i class="fa-solid fa-laptop-file"></i>
              </div>
              <a href="#" class="small-box-footer">Ver todas <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><i class="fa-solid fa-address-book"></i></h3>

                <p>Vida Escolar</p>
              </div>
              <div class="icon">
                <i class="fa-solid fa-people-line"></i>
              </div>
              <a href="{{ route('estudante.vida_escolar') }}" class="small-box-footer">Ver todas <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
             
              <div class="inner">
                <h3> {{$notificacoes }}<sup style="font-size: 20px"> </sup></h3>
                

              <h5>Notificações</h5>
              </div>
              <div class="icon">
                <i class="fa-regular fa-bell"></i>
              </div>
              <a href="{{ route('estudante.notificacao') }}" class="small-box-footer">Ver todas <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
         
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3> <i class="fa-regular fa-envelope"></i></h3>

                <h5>Apoio Tecnico</h5>
              </div>
              <div class="icon">
                <i class="fa-solid fa-headset"></i>
              </div>
              <a href="{{ route('estudante.ver_relatos') }}" class="small-box-footer">Ver todas <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <!-- ./col -->
        </div>
        <!-- /.row -->
        
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    
@endsection