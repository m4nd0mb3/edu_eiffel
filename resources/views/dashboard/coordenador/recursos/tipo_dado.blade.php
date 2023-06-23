@extends('layouts.main_coordenador')
@section('title','Recursos Humanos')
@section('content')


<section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
        

      

          
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{$count_professores}}</h3>

                <h5>Professores</h5>
              </div>
              <div class="icon">
                <i class="fa-solid fa-user-tie"></i>
              </div>
              <a href="{{ route('coordenacao.professor_liceu') }}" class="small-box-footer">Ver todas <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{$count_directores}}</h3>

                <h5>Directores</h5>
              </div>
              <div class="icon">
                <i class="fa-solid fa-user-tie"></i>
              </div>
              <a href="{{ route('coordenacao.directores_liceu') }}" class="small-box-footer">Ver todas <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

        

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{$count_secretarios}}</h3>

                <h5>Secretários</h5>
              </div>
              <div class="icon">
                <i class="fa-solid fa-user-pen"></i>
              </div>
              <a href="" class="small-box-footer">Em Construção <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{$count_funcionarios}}</h3>

                <h5>Funcionarios</h5>
              </div>
              <div class="icon">
                <i class="fa-solid fa-user-tie"></i>
              </div>
              <a href="" class="small-box-footer">Em Construção  <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{$falta_funcionario}}</h3>

                <h5>Faltas De funcionarios</h5>
              </div>
              <div class="icon">
                <i class="fa-solid fa-person-chalkboard"></i>
              </div>
              <a href="" class="small-box-footer">Em Construção <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{$falta_professor}}</h3>

                <h5>Faltas De Professores</h5>
              </div>
              <div class="icon">
                <i class="fa-solid fa-person-chalkboard"></i>
              </div>
              <a href="" class="small-box-footer">Em Construção  <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>


          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><i class="fa-solid fa-book-open-reader"></i></h3>

                <h5>A. Desempenho de Funcionarios</h5>
              </div>
              <div class="icon">
                <i class="fa-solid fa-person-chalkboard"></i>
              </div>
              <a href="" class="small-box-footer">Em Construção <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><i class="fa-solid fa-book-open"></i></h3>

                <h5>Declarações</h5>
              </div>
              <div class="icon">
                <i class="fa-solid fa-person-chalkboard"></i>
              </div>
              <a href="" class="small-box-footer">Em Construção <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>



         

      
        
          
          <!-- ./col -->
        </div>
        <!-- /.row -->
        
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
</section>
@endsection
