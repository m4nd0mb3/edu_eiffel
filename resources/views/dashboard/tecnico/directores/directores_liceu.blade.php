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
              <i class="fa-solid fa-house"></i>
              </div>
              @foreach( $caxito as $plano) 
             
              <a href="/coordenacao/directores/{{ $plano->id}}" class="small-box-footer">Ver  <i class="fas fa-arrow-circle-right"></i></a>

              @endforeach  

            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class=" small-box bg-danger">
              <div class="inner">
              <h3> <i class="fa-solid fa-file-export"></i></h3>

                <h5>Liceu de Malanje</h5>
              </div>
              <div class="icon">
              <i class="fa-solid fa-house"></i>
              </div>
              @foreach( $malanje as $plano) 
             
             <a href="/coordenacao/directores/{{ $plano->id}}" class="small-box-footer">Ver  <i class="fas fa-arrow-circle-right"></i></a>

             @endforeach  
             </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-primary">
              <div class="inner">
              <h3><i class="fa-solid fa-file-export"></i></h3>
                <h5>Liceu de Ndalatando</h5>
              </div>
              <div class="icon">
              <i class="fa-solid fa-house"></i>
              </div>
              @foreach( $ndalatando as $plano) 
             
             <a href="/coordenacao/directores/{{ $plano->id}}" class="small-box-footer">Ver  <i class="fas fa-arrow-circle-right"></i></a>

             @endforeach   </div>
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
              <i class="fa-solid fa-house"></i>
              </div>
              @foreach( $ondjiva as $plano) 
             
             <a href="/coordenacao/directores/{{ $plano->id}}" class="small-box-footer">Ver  <i class="fas fa-arrow-circle-right"></i></a>

             @endforeach  </div>
          </div>

        
        
         
        <!-- /.row -->
        
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    
@endsection