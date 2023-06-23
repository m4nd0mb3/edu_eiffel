@extends('layouts.main_po')
@section('title','Professor')
@section('content')



@if (Session::get('success'))<!-- /.card-header -->
<div class="card-body">
  
  <div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h5><i class="icon fas fa-check"></i> Sucesso!</h5>
    {{ Session::get('success') }} <a href="{{ route('professor.ver_nota') }}">Ver</a>
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
          @foreach( $professores as $professor) 
          <div class="small-box bg-light 	">
            <div class="inner">
            <h3> @if($professor->classe_um == 1)
                10 A
                @elseif($professor->classe_um == 2)
                    10 B
                @elseif($professor->classe_um == 3)
                    11 A
                @elseif($professor->classe_um == 4)
                    11 B
                @elseif($professor->classe_um == 5)
                    12 A
                @elseif($professor->classe_um == 6)
                    12 B
                @elseif($professor->classe_um == 7)
                    -
                        
                @endif</h3>

              
            </div>
            <div class="icon">
                <i class="fa-solid fa-people-line"></i>

            </div>
            <a href="/professor/classe/{{$professor->liceu}}/{{$professor->classe_um}}" class="small-box-footer">Ver todas <i class="fas fa-arrow-circle-right"></i></a>
          </div>

          @endforeach

        </div>


        <!-- ./col -->
        
        <div class="col-lg-3 col-6">
            <!-- small box -->
            @foreach( $professores as $professor) 
            <div class="small-box bg-light 	">
              <div class="inner">
              <h3> @if($professor->classe_dois == 1)
                  10 A
                  @elseif($professor->classe_dois == 2)
                      10 B
                  @elseif($professor->classe_dois == 3)
                      11 A
                  @elseif($professor->classe_dois == 4)
                      11 B
                  @elseif($professor->classe_dois == 5)
                      12 A
                  @elseif($professor->classe_dois == 6)
                      12 B
                  @elseif($professor->classe_dois == 7)
                      -
                          
                  @endif</h3>
  
                
              </div>
              <div class="icon">
                  <i class="fa-solid fa-people-line"></i>
  
              </div>
              <a href="/professor/classe/{{$professor->liceu}}/{{$professor->classe_dois}}" class="small-box-footer">Ver todas <i class="fas fa-arrow-circle-right"></i></a>
            </div>
  
            @endforeach
  
          </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            @foreach( $professores as $professor) 
            <div class="small-box bg-light 	">
              <div class="inner">
              <h3> @if($professor->classe_tres == 1)
                  10 A
                  @elseif($professor->classe_tres == 2)
                      10 B
                  @elseif($professor->classe_tres == 3)
                      11 A
                  @elseif($professor->classe_tres == 4)
                      11 B
                  @elseif($professor->classe_tres == 5)
                      12 A
                  @elseif($professor->classe_tres == 6)
                      12 B
                  @elseif($professor->classe_tres == 7)
                      -
                          
                  @endif</h3>
  
                
              </div>
              <div class="icon">
                  <i class="fa-solid fa-people-line"></i>
  
              </div>
              <a href="/professor/classe/{{$professor->liceu}}/{{$professor->classe_tres}}" class="small-box-footer">Ver todas <i class="fas fa-arrow-circle-right"></i></a>
            </div>
  
            @endforeach
  
          </div>
        
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            @foreach( $professores as $professor) 
            <div class="small-box bg-light 	">
              <div class="inner">
              <h3> @if($professor->classe_quatro == 1)
                  10 A
                  @elseif($professor->classe_quatro == 2)
                      10 B
                  @elseif($professor->classe_quatro == 3)
                      11 A
                  @elseif($professor->classe_quatro == 4)
                      11 B
                  @elseif($professor->classe_quatro == 5)
                      12 A
                  @elseif($professor->classe_quatro == 6)
                      12 B
                  @elseif($professor->classe_quatro == 7)
                      -
                          
                  @endif</h3>
  
                
              </div>
              <div class="icon">
                  <i class="fa-solid fa-people-line"></i>
  
              </div>
              <a href="/professor/classe/{{$professor->liceu}}/{{$professor->classe_quatro}}" class="small-box-footer">Ver todas <i class="fas fa-arrow-circle-right"></i></a>
            </div>
  
            @endforeach
  
          </div>
        

          <div class="col-lg-3 col-6">
            <!-- small box -->
            @foreach( $professores as $professor) 
            <div class="small-box bg-light 	">
              <div class="inner">
              <h3> @if($professor->classe_cinco == 1)
                  10 A
                  @elseif($professor->classe_cinco == 2)
                      10 B
                  @elseif($professor->classe_cinco == 3)
                      11 A
                  @elseif($professor->classe_cinco == 4)
                      11 B
                  @elseif($professor->classe_cinco == 5)
                      12 A
                  @elseif($professor->classe_cinco == 6)
                      12 B
                  @elseif($professor->classe_cinco == 7)
                      -
                          
                  @endif</h3>
  
                
              </div>
              <div class="icon">
                  <i class="fa-solid fa-people-line"></i>
  
              </div>
              <a href="/professor/classe/{{$professor->liceu}}/{{$professor->classe_cinco}}" class="small-box-footer">Ver todas <i class="fas fa-arrow-circle-right"></i></a>
            </div>
  
            @endforeach
  
          </div>
        


          <div class="col-lg-3 col-6">
            <!-- small box -->
            @foreach( $professores as $professor) 
            <div class="small-box bg-light 	">
              <div class="inner">
              <h3> @if($professor->classe_seis == 1)
                  10 A
                  @elseif($professor->classe_seis == 2)
                      10 B
                  @elseif($professor->classe_seis == 3)
                      11 A
                  @elseif($professor->classe_seis == 4)
                      11 B
                  @elseif($professor->classe_seis == 5)
                      12 A
                  @elseif($professor->classe_seis == 6)
                      12 B
                  @elseif($professor->classe_seis == 7)
                      -
                          
                  @endif</h3>
  
                
              </div>
              <div class="icon">
                  <i class="fa-solid fa-people-line"></i>
  
              </div>
              <a href="/professor/classe/{{$professor->liceu}}/{{$professor->classe_seis}}" class="small-box-footer">Ver todas <i class="fas fa-arrow-circle-right"></i></a>
            </div>
  
            @endforeach
  
          </div>
        

      
      
       
      <!-- /.row -->
      
      <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
  </section>
  
@endsection