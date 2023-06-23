@extends('layouts.main_coordenador')
@section('title','Tipo de Formação')
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

                  <h5>Por Disciplina</h5>
              </div>
              <div class="icon">
              <i class="fa-solid fa-house"></i>
              </div>
              @foreach( $disciplina as $plano) 
             
              <a href="/coordenacao/formacao_disciplina/{{ $plano->id}}" class="small-box-footer">Ver  <i class="fas fa-arrow-circle-right"></i></a>

              @endforeach  

            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class=" small-box bg-danger">
              <div class="inner">
              <h3> <i class="fa-solid fa-file-export"></i></h3>

                <h5>Por Liceu</h5>
              </div>
              <div class="icon">
              <i class="fa-solid fa-house"></i>
              </div>
              @foreach( $liceu as $plano) 
             
             <a href="/coordenacao/formacao_liceu/{{ $plano->id}}" class="small-box-footer">Ver  <i class="fas fa-arrow-circle-right"></i></a>

             @endforeach  
             </div>
          </div>
          <!-- ./col -->
        
         
        
        
         
        <!-- /.row -->
        
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    
@endsection