@extends('layouts.main_coordenador')
@section('title','Pedagogia')
@section('content')





<section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success 	">
              <div class="inner">
                <h3><i class="fa-solid fa-boxes-packing"></i></h3>

                  <h5>Boletins de Nota</h5>
              </div>
              <div class="icon">
                <i class="fa-solid fa-file-circle-check"></i>
              </div>
              <a href="{{ route('coordenacao.boletim_liceu') }}" class="small-box-footer">Ver todas <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success 	">
              <div class="inner">
                <h3><i class="fa-solid fa-boxes-packing"></i></h3>

                  <h5>Ausências de Estudantes</h5>
              </div>
              <div class="icon">
              <i class="fa-solid fa-people-group"></i>
              </div>
              
              <a href="" class="small-box-footer">Em Construção <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success 	">
              <div class="inner">
                <h3><i class="fa-solid fa-file-pen"></i></h3>

                  <h5>Declarações</h5>
              </div>
              <div class="icon">
              <i class="fa-solid fa-people-roof"></i>
              </div>
              
              <a href="" class="small-box-footer">Em Construção <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{$count_planos}}</h3>

                <h5>Preparações de aula</h5>
              </div>
              <div class="icon">
                <i class="fa-solid fa-book-open-reader"></i>
              </div>
              <a href="{{ route('coordenacao.plano_liceu') }}" class="small-box-footer">Ver todas <i class="fas fa-arrow-circle-right"></i></a>
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
              <a href="" class="small-box-footer">Em Construção <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
       
        
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{$count_orientacoes}}</h3>

                <h5>Orientações</h5>
              </div>
              <div class="icon">
                <i class="fa-solid fa-person-chalkboard"></i>
              </div>
              <a href="{{ route('coordenacao.orientacao_liceu') }}" class="small-box-footer">Ver todas <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{$count_formacoes}}</h3>

                <h5>Formações</h5>
              </div>
              <div class="icon">
                <i class="fa-solid fa-users-rays"></i>
              </div>
              <a href="" class="small-box-footer">Em Construção<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        
         

         

        
          <!-- ./col -->
        

           <!-- ./col -->
           <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3> <i class="fa-regular fa-star"></i></h3>

                <h5>Dados Recentes</h5>
              </div>
              <div class="icon">
                <i class="fa-solid fa-download"></i>
              </div>
              <a href="" class="small-box-footer">Em Construção<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

        

          <!-- ./col -->
        </div>
        <!-- /.row -->
        
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>

@endsection
