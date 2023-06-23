@extends('layouts.main_coordenador')
@section('title','Liceu')
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
            <div class="small-box bg-success 	">
              <div class="inner">
              <h3> <i class="fa-solid fa-file-export"></i></h3>

                  <h5>Liceu de Caxito</h5>
              </div>
              <div class="icon">
              <i class="fa-solid fa-book-open"></i>
              </div>
              <a href="" class="small-box-footer">Ver  <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class=" small-box bg-light">
              <div class="inner">
              <h3> <i class="fa-solid fa-file-export"></i></h3>

                <h5>Liceu de Malanje</h5>
              </div>
              <div class="icon">
              <i class="fa-solid fa-file-circle-xmark"></i>
              </div>
              <a href="{{ route('pedagogia.ver_nota') }}" class="small-box-footer">Ver  <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-primary">
              <div class="inner">
              <h3> <i class="fa-solid fa-file-export"></i></h3>
                <h5>Liceu de Ndalatando</h5>
              </div>
              <div class="icon">
              <i class="fa-solid fa-file-circle-check"></i>
              </div>
              <a href="{{ route('pedagogia.ver_nota_validada') }}" class="small-box-footer">Ver  <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
              <h3><i class="fa-solid fa-file-export"></i></h3>

                <h5>Liceu de Ondjiva</h5>
              </div>
              <div class="icon">
              <i class="fa-solid fa-folder-tree"></i>
              </div>
              <a href="" class="small-box-footer">Ver  <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

        
        
         
        <!-- /.row -->
        
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    
@endsection