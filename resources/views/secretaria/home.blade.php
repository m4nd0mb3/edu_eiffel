@extends('layouts.main_so')
@section('title','Secretaria')
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
              <a href="{{ route('secretaria_administrativa.alterar_senha')}}" class="small-box-footer">Clique para Alterar <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class=" small-box bg-success">
              <div class="inner">
                <h3>12<sup style="font-size: 20px"></sup></h3>

                <h5> Estudantes</h5>
              </div>
              <div class="icon">
                <i class="fa-solid fa-user-graduate"></i>
              </div>
              <a href="#" class="small-box-footer">Ver todas <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>12</h3>

                <h5>Professores</h5>
              </div>
              <div class="icon">
                <i class="fa-solid fa-user-tie"></i>
              </div>
              <a href="#" class="small-box-footer">Ver todas <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>12</h3>

                <h5>Funcionarios</h5>
              </div>
              <div class="icon">
                <i class="fa-solid fa-user"></i>

              </div>
              <a href="#" class="small-box-footer">Ver todas <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          

         

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>12</h3>

                <h5>Faltas Professores</h5>
              </div>
              <div class="icon">
                <i class="fa-solid fa-book-open-reader"></i>
              </div>
              <a href="#" class="small-box-footer">Ver todas <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>12</h3>

                <h5>Formações</h5>
              </div>
              <div class="icon">
                <i class="fa-solid fa-users-rays"></i>
              </div>
              <a href="#" class="small-box-footer">Ver todas <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>23</h3>

                <h5>Orientações</h5>
              </div>
              <div class="icon">
                <i class="fa-solid fa-person-chalkboard"></i>
              </div>
              <a href="#" class="small-box-footer">Ver todas <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

         
          <!-- ./col -->
        
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
             
              <div class="inner">
                <h3> 12<sup style="font-size: 20px"> </sup></h3>
                

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
            <div class="small-box bg-danger">
             
              <div class="inner">
                <h3> 12<sup style="font-size: 20px"> </sup></h3>
                

              <h5>Solicitações Professores</h5>
              </div>
              <div class="icon">
                <i class="fa-solid fa-pen-to-square"></i>
              </div>
              <a href="#" class="small-box-footer">Ver todas <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
             
              <div class="inner">
                <h3> 12<sup style="font-size: 20px"> </sup></h3>
                

              <h5>Solicitações Estudantes</h5>
              </div>
              <div class="icon">
                <i class="fa-solid fa-pen-to-square"></i>
              </div>
              <a href="#" class="small-box-footer">Ver todas <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
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