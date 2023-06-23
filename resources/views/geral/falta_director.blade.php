@extends('layouts.main_go')
@section('title','Enviar Falta')
@section('content')

@if (Session::get('success'))<!-- /.card-header -->
<div class="card-body">
  
  <div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h5><i class="icon fas fa-check"></i> Sucesso! <a href="{{ route('geral.ver_falta') }} ">Ver</a></h5>
    {{ Session::get('success') }} 
  </div>
</div>
<!-- /.card-body -->

@endif
@if (Session::get('fail'))
<!-- /.card-header -->
<div class="card-body">
    <div class="alert alert-danger alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <h5><i class="icon fas fa-ban"></i> Falha!</h5>
      {{ Session::get('fail') }} 
    </div>
    
  </div>
  <!-- /.card-body -->

@endif
<section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-light 	">
              <div class="inner">
              <h3> <i class="fa-solid fa-circle-info"></i></h3>

                  <h5>Enviar Para o DP</h5>
              </div>
              <div class="icon">
              <i class="fa-solid fa-book-open"></i>
              </div>
              <a href="{{ route('geral.falta_pedagogico') }}" class="small-box-footer">Enviar <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>


          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-light 	">
              <div class="inner">
              <h3> <i class="fa-solid fa-circle-info"></i></h3>

                  <h5>Enviar Para o DA</h5>
              </div>
              <div class="icon">
              <i class="fa-solid fa-book-open"></i>
              </div>
              <a href="{{ route('geral.falta_administrativa') }}" class="small-box-footer"> <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-light 	">
              <div class="inner">
              <h3> <i class="fa-solid fa-circle-info"></i></h3>

                  <h5>Enviar Para o Secretarios</h5>
              </div>
              <div class="icon">
              <i class="fa-solid fa-book-open"></i>
              </div>
              <a href="{{ route('geral.falta_secretario') }}" class="small-box-footer">Ver todas <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          
         
          
        
         
        <!-- /.row -->
        
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    

@endsection