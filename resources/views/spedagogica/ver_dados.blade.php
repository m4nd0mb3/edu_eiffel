@extends('layouts.main_spo')
@section('title','Informações')
@section('content')


<div class="single-pro-review-area mt-t-30 mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    @foreach( $dados as $professor) 
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="profile-info-inner">
                            <div class="profile-img">
                                <img src="/media/secretaria/img/{{$professor->photo}}" alt="" />
                            </div>
                            <div class="profile-details-hr">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                        <div class="address-hr">
                                            <p><b>Nome</b><br /> {{$professor->name}}</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                        <div class="address-hr tb-sm-res-d-n dps-tb-ntn">
                                            <p><b>Idade</b><br /> {{$professor->idade}}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                        <div class="address-hr">
                                            <p><b>Email </b><br /> {{$professor->email}}</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                        <div class="address-hr tb-sm-res-d-n dps-tb-ntn">
                                            <p><b>Numero de Telefone</b><br /> {{$professor->numero}}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="address-hr">
                                            <p><b>Morada</b><br /> {{$professor->bairro}}</p>
                                        </div>
                                    </div>
                                </div>
                              
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                        <div class="product-payment-inner-st res-mg-t-30 analysis-progrebar-ctn">
                            <ul id="myTabedu1" class="tab-review-design">
                               
                                
                                <li><a href="#INFORMATION">Detalhes do Director</a></li>
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit st-prf-pro">
                                <div class="product-tab-list tab-pane fade active in" id="description">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                                        <div class="address-hr biography">
                                                            <p><b>Numero do Bilhete</b><br /> {{$professor->bi}}</p>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                                        <div class="address-hr biography">
                                                            <p><b>Estado Civil</b><br /> @if($professor->es_civil == 1)
                                           Solteiro
                            @elseif($professor->es_civil == 2)
                                Casado
                                @elseif($professor->es_civil == 3)
                                Divorciado
                                @elseif($professor->es_civil == 4)
                                Viuvo
                             
                            @endif</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                                        <div class="address-hr biography">
                                                            <p><b>Data de Nascimento</b><br />{{$professor->data_nasc}}</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                                        <div class="address-hr biography">
                                                            <p><b>Nacionalidade</b><br /> {{$professor->nacionalidade}}</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                                        <div class="address-hr biography">
                                                            <p><b>Provincia</b><br />{{$professor->provincia}}</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                                        <div class="address-hr biography">
                                                            <p><b>Monicipio</b><br /> {{$professor->monicipio}}</p>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                                        <div class="address-hr biography">
                                                            <p><b>Bilhete de Identidade</b><br />   
                                                            <a href="/media/secretaria/pdf/{{$professor->bilhete}}" download = "Bilhete {{ $professor->name}}">
                                                              <button data-toggle="tooltip" title="Baixar" class="pd-setting-ed">	<i class="fa fa-download"></i></button>
</p>                                                        </a>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                                        <div class="address-hr biography">
                                                            <p><b>Habilitação Literaria</b><br /> 
                                                            <a href="/media/secretaria/pdf/{{$professor->hl}}" download = "Hacaobilita {{ $professor->name}}">
                                                              <button data-toggle="tooltip" title="Baixar" class="pd-setting-ed">	<i class="fa fa-download"></i></button>
</p>                                                        </a>                   
                                                        </p>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                                        <div class="address-hr biography">
                                                            <p><b>Curriculum Vitae</b><br />       
                                                            <a href="/media/secretaria/cv/{{$professor->cv}}" download = "Hacaobilita {{ $professor->name}}">
                                                              <button data-toggle="tooltip" title="Baixar" class="pd-setting-ed">	<i class="fa fa-download"></i></button>
</p>                                                        </a>   </p>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                                        <div class="address-hr biography">
                                                            <p><b>Guia de Marcha</b><br />                                           
                                                            <a href="/media/secretaria/gm/{{$professor->gm}}" download = "Guia {{ $professor->name}}">
                                                              <button data-toggle="tooltip" title="Baixar" class="pd-setting-ed">	<i class="fa fa-download"></i></button>
</p>                                                        </a>

                                                        </p>
                                                        </div>
                                                    </div>

                                      
                                                   
                                                    
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                                        <div class="address-hr biography">
                                                            <p><b>Liceu</b><br />  @if($professor->liceu == 1)
                                                                Caxito
                                                            @elseif($professor->liceu == 2)
                                                                  Malanje
                                                            @elseif($professor->liceu == 3)
                                                                    Ndalatando
                                                            @elseif($professor->liceu == 4)
                                                                  
                                                                Ondjiva
                                                            @endif</p>
                                                        </div>
                                                    </div>

                                                   
                                                </div>
                                              
                                              
                                               
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                        </div>
                    </div>

                    @endforeach 
                </div>
            </div>
        </div>

@endsection
