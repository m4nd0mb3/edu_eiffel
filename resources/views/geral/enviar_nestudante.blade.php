@extends('layouts.main_go')
@section('title','Enviar Notificação')
@section('content')


<!-- Main content -->
<section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">

            @foreach( $classes as $professor) 
          <div class="col-lg-3 col-6">
            <!-- small box -->

            <div class="small-box bg-success 	">
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
                        @elseif($professor->id == 7)
                       -
                    
                            
                    @endif</h3>

              </div>
              <div class="icon">
                <i class="fa-solid fa-people-line"></i>
              </div>
              <a href="/geral/decima_A/{{ Auth::guard('geral')->user()->liceu }}/{{$professor->id}}" class="small-box-footer">Ver todas <i class="fas fa-arrow-circle-right"></i></a>
            </div>

          </div>

    @endforeach

          <!-- ./col -->
         

         
        </div>
        <!-- /.row -->
        
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
@endsection