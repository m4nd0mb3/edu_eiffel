@extends('layouts.main_spo')
@section('title','Secretaria')
@section('content')


      
<section class="content">

    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">


        <div class="col-lg-3 col-6">
          <!-- small box -->
          @foreach( $classes as $professor) 
          <div class="small-box bg-light 	">
            <div class="inner">
            <h3> @if($professor->id == 1)
                10 A
                @elseif($professor->id == 2)
                    10 B
                @elseif($professor->id == 3)
                    11 A
                @elseif($professor->id == 4)
                    11 B
                @elseif($professor->id == 5)
                    12 A
                @elseif($professor->id == 6)
                    12 B
              
                        
                @endif</h3>

              
            </div>
            <div class="icon">
                <i class="fa-solid fa-people-line"></i>

            </div>
            <a href="/secretaria_pedagogica/decima_A/{{ Auth::guard('secretaria_pedagogica')->user()->liceu }}/{{$professor->id}}" class="small-box-footer">Ver todas <i class="fas fa-arrow-circle-right"></i></a>
          </div>

          @endforeach

        </div>


        <!-- ./col -->
        
        
        
        

      
      
       
      <!-- /.row -->
      
      <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
    </div><!-- /.container-fluid -->
  </section>
  
@endsection