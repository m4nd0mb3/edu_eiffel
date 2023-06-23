@extends('layouts.main_ao')
@section('title','Todos os Professores')
@section('content')



<div class="contacts-area mg-b-15">
            <div class="container-fluid">
                <div class="row">

                    @foreach( $professores as $professor) 
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="hpanel hblue contact-panel contact-panel-cs responsive-mg-b-30">
                            <div class="panel-body custom-panel-jw">
                               
                                <img alt="logo" class="img-circle m-b" src="/media/ondjiva/professor/img/{{$professor->photo}}">
                                <h3><a href=""> Id: {{$professor->id}}</a></h3>
                                <h3><a href="">{{$professor->name}}</a></h3>
                                <p class="all-pro-ad">
                                @if($professor->liceu == 1)
                                    Caxito
                                @elseif($professor->liceu == 2)
                                    Malanje
                                @elseif($professor->liceu == 3)
                                    Ndalatando
                                @elseif($professor->liceu == 4)
                                    Ondjiva                                    
                                @endif
                            </p>
                            <div class="social-media-in">
                                  
                                
                                <a href="/administracao_ondjiva/ver_dado_professor/{{ $professor->id}}">
    <button data-toggle="tooltip" title="Ver Informaçoes" class="pd-setting-ed"><i class="fa fa-eye" aria-hidden="true" style="color: red;"></i></button>

  </a>
                            </div> 
                                
                            </div>
                        </div>
                    </div>
                    @endforeach 

                  
                    
                </div>
            </div>
        </div>


@endsection