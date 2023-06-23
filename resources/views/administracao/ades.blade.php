@extends('layouts.main_ao')
@section('title','Todos os estudantes')
@section('content')


<div class="contacts-area mg-b-15">
            <div class="container-fluid">
                <div class="row">

                @foreach( $estudantes as $estudante) 
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="student-inner-std res-mg-b-30">
                            <div class="student-img">
                                <img src="/media/ondjiva/estudante/img/{{$estudante->photo}}" alt="" />
                            </div>
                            <div class="student-dtl">
                                <h2>{{$estudante->name}}</h2>
                                <p class="dp"><b>Turma:</b> @if($estudante->turma == 1)
                                            A
                                        @elseif($estudante->turma == 2)
                                             B
                                       
                                                                              
                                        @endif</p>
                                <p class="dp-ag"><b>Classe:</b>@if($estudante->classe == 1)
                                            10ª
                                        @elseif($estudante->classe == 2)
                                             11ª
                                        @elseif($estudante->classe == 3)
                                             12ª
                                                                              
                                        @endif</p>

                                     
                                        <a href="/administracao_ondjiva/ver_dado_estudante/{{ $estudante->id}}">
    <button data-toggle="tooltip" title="Ver Informaçoes" class="pd-setting-ed"><i class="fa fa-eye" aria-hidden="true"></i></button>

  </a>
                             
                            </div>
                        </div>
                    </div>
                    @endforeach 
                </div>
            </div>
        </div>

@endsection