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
          
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class=" small-box bg-danger">
              <div class="inner">
             
                <h3>{{$count_estudantes}}</h3>

                <h5>Boletins Enviados</h5>
              </div>
             
              <div class="icon">
              <i class="fa-solid fa-file-circle-xmark"></i>
              </div>
              @foreach( $liceu as $plano) 

              <a href="/coordenacao/ver_nota_enviada/{{ $plano->id}}" class="small-box-footer">Ver todas <i class="fas fa-arrow-circle-right"></i></a>
             
              @endforeach  
          
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
              <h3>{{$count_faltas}}</h3>
                <h5>Ver Boletins Validados</h5>
              </div>
              <div class="icon">
              <i class="fa-solid fa-file-circle-check"></i>
              </div>
              @foreach( $liceu as $plano) 

              <a href="/coordenacao/ver_nota_validada/{{ $plano->id}}" class="small-box-footer">Ver todas <i class="fas fa-arrow-circle-right"></i></a>
             
              @endforeach    </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
              <h3><i class="fa-solid fa-file-export"></i></h3>

                <h5>Imprimir Pautas Trimestrais</h5>
              </div>
              <div class="icon">
              <i class="fa-solid fa-folder-tree"></i>
              </div>
              <a href="" class="small-box-footer">Ver as Turmas <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

        
        

          
         
        <!-- /.row -->
        
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    
    
@endsection