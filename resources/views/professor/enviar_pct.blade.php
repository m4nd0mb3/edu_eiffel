@extends('layouts.main_po')
@section('title','Enviar PCT')
@section('content')


@if (Session::get('success'))
<div class="alert-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="alert-wrap2 shadow-inner wrap-alert-b">
                   
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        <strong>Notas!</strong> Enviadas com Sucesso, <a href="{{ route('pedagogia.ver_nota') }}"><span>Ver</span></a>.
                    </div>
                   
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endif
@if (Session::get('fail'))
<div class="alert-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="alert-wrap2 shadow-inner wrap-alert-b">
                   
                    <div class="alert alert-danger alert-mg-b">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        <strong>Erro!</strong> Notas não enviadas, <a href="{{ route('professor.ver_nota') }}"><span>Ver</span></a>..
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif

<div class="container">
    <div class="product-sales-area mg-tb-30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-sales-chart">
                        <div class="portlet-title">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="caption pro-sl-hd" >
                                        <span class="caption-subject" style="color: blue;"><b>Selecione a Classe e a Turma </b></span>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
        <div class="analytics-sparkle-area">
            <div class="container-fluid">
                <div class="row">
                    
                @foreach( $classes as $professor) 
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <a href="/professor/classes/{{ Auth::guard('professor')->user()->liceu }}/{{$professor->id}}">
                        <div class="analytics-sparkle-line reso-mg-b-30">
                            <div class="analytics-content">
                                <h5 style="color: rgb(203, 11, 78);">@if($professor->id == 1)
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
                                    @endif</h5>
                               
                               
                            </div>
                        </div>
                    </a>
                    </div>


                    @endforeach

                 
                </div>

                          
                
            </div> 
               
            </div>
        </div>

       
    </div>

@endsection