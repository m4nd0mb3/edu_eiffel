@extends('layouts.main_do')
@section('title','Boletins de Nota')
@section('content')

<br>
<br>
<br>
<section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
         

            @foreach( $estudantes as $plano) 
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class=" small-box bg-success">
              <div class="inner">
              <h3>@if($plano->classe == 1)
                10 A
@elseif($plano->classe == 2)
    10 B
@elseif($plano->classe == 3)
    11 A
@elseif($plano->classe == 4)
    11 B
@elseif($plano->classe == 5)
    12 A
@elseif($plano->classe == 6)
    12 B
@elseif($plano->classe == 7)
    -
          
@endif </h3>

                <h5>Boletins Geral</h5>
              </div>
              <div class="icon">
                <i class="fa-regular fa-folder"></i>
              </div>
              <a href="/pedagogia/listar_cardeneta/{{$plano->liceu}}/{{$plano->classe}}" class="small-box-footer">Imprimir <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          @endforeach  

         
          </div>

        
        
         
        <!-- /.row -->
        
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    
@endsection