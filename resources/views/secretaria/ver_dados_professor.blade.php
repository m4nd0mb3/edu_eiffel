@extends('layouts.main_so')
@section('title','Informações de Professores')
@section('content')


<div class="single-pro-review-area mt-t-30 mg-b-15">
            <div class="container-fluid">
                <div class="row">
                 
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="profile-info-inner">
                            <div class="profile-img">
                                <img src="/media/ondjiva/professor/img/{{$dados->photo}}" alt="" />
                            </div>
                            <div class="profile-details-hr">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                        <div class="address-hr">
                                            <p><b>Nome</b><br /> {{$dados->name}}</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                        <div class="address-hr tb-sm-res-d-n dps-tb-ntn">
                                            <p><b>Idade</b><br /> {{$dados->idade}}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                        <div class="address-hr">
                                            <p><b>Email </b><br /> {{$dados->email}}</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                        <div class="address-hr tb-sm-res-d-n dps-tb-ntn">
                                            <p><b>Numero de Telefone</b><br /> {{$dados->numero}}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="address-hr">
                                            <p><b>Morada</b><br /> {{$dados->bairro}}</p>
                                        </div>
                                    </div>
                                </div>
                              
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                        <div class="product-payment-inner-st res-mg-t-30 analysis-progrebar-ctn">
                            <ul id="myTabedu1" class="tab-review-design">
                               
                                
                                <li><a href="#INFORMATION">Detalhes do dados</a></li>
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit st-prf-pro">
                                <div class="product-tab-list tab-pane fade active in" id="description">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                                        <div class="address-hr biography">
                                                            <p><b>Numero do Bilhete</b><br /> {{$dados->bi}}</p>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                                        <div class="address-hr biography">
                                                            <p><b>Estado Civil</b><br /> @if($dados->es_civil == 1)
                                           Solteiro
                            @elseif($dados->es_civil == 2)
                                Casado
                                @elseif($dados->es_civil == 3)
                                Divorciado
                                @elseif($dados->es_civil == 4)
                                Viuvo
                             
                            @endif</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                                        <div class="address-hr biography">
                                                            <p><b>Data de Nascimento</b><br />{{$dados->data_nasc}}</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                                        <div class="address-hr biography">
                                                            <p><b>Nacionalidade</b><br /> {{$dados->nacionalidade}}</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                                        <div class="address-hr biography">
                                                            <p><b>Provincia</b><br />{{$dados->provincia}}</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                                        <div class="address-hr biography">
                                                            <p><b>Monicipio</b><br /> {{$dados->monicipio}}</p>
                                                        </div>
                                                    </div>

                                                   
                                                   
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                                        <div class="address-hr biography">
                                                            <p><b>1º Classe</b><br /> @if($dados->classe_um == 1)
                                            10 A
                            @elseif($dados->classe_um == 2)
                                10 B
                            @elseif($dados->classe_um == 3)
                                11 A
                            @elseif($dados->classe_um == 4)
                                11 B
                            @elseif($dados->classe_um == 5)
                                12 A
                            @elseif($dados->classe_um == 6)
                                12 B
                            @elseif($dados->classe_um == 7)
                                -
                                      
                            @endif</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                                        <div class="address-hr biography">
                                                            <p><b>2º Classe</b><br /> @if($dados->classe_dois == 1)
                                            10 A
                            @elseif($dados->classe_dois == 2)
                                10 B
                            @elseif($dados->classe_dois == 3)
                                11 A
                            @elseif($dados->classe_dois == 4)
                                11 B
                            @elseif($dados->classe_dois == 5)
                                12 A
                            @elseif($dados->classe_dois == 6)
                                12 B
                            @elseif($dados->classe_dois == 7)
                                -
                                      
                            @endif</p>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                                        <div class="address-hr biography">
                                                            <p><b>3º Classe</b><br /> @if($dados->classe_tres == 1)
                                            10 A
                            @elseif($dados->classe_tres == 2)
                                10 B
                            @elseif($dados->classe_tres == 3)
                                11 A
                            @elseif($dados->classe_tres == 4)
                                11 B
                            @elseif($dados->classe_tres == 5)
                                12 A
                            @elseif($dados->classe_tres == 6)
                                12 B
                            @elseif($dados->classe_tres == 7)
                                -
                                      
                            @endif</p>
                                                        </div>
                                                    </div>



                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                                        <div class="address-hr biography">
                                                            <p><b>4º Classe</b><br /> @if($dados->classe_quatro == 1)
                                            10 A
                            @elseif($dados->classe_quatro == 2)
                                10 B
                            @elseif($dados->classe_quatro == 3)
                                11 A
                            @elseif($dados->classe_quatro == 4)
                                11 B
                            @elseif($dados->classe_quatro == 5)
                                12 A
                            @elseif($dados->classe_quatro == 6)
                                12 B
                            @elseif($dados->classe_quatro == 7)
                                -
                                      
                            @endif</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                                        <div class="address-hr biography">
                                                            <p><b>5º Classe</b><br /> @if($dados->classe_cinco == 1)
                                            10 A
                            @elseif($dados->classe_cinco == 2)
                                10 B
                            @elseif($dados->classe_cinco == 3)
                                11 A
                            @elseif($dados->classe_cinco == 4)
                                11 B
                            @elseif($dados->classe_cinco == 5)
                                12 A
                            @elseif($dados->classe_cinco == 6)
                                12 B
                            @elseif($dados->classe_cinco == 7)
                                -
                                      
                            @endif</p>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                                        <div class="address-hr biography">
                                                            <p><b>6º Classe</b><br /> @if($dados->classe_seis == 1)
                                            10 A
                            @elseif($dados->classe_seis == 2)
                                10 B
                            @elseif($dados->classe_seis == 3)
                                11 A
                            @elseif($dados->classe_seis == 4)
                                11 B
                            @elseif($dados->classe_seis == 5)
                                12 A
                            @elseif($dados->classe_seis == 6)
                                12 B
                            @elseif($dados->classe_seis == 7)
                                -
                                      
                            @endif</p>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                                        <div class="address-hr biography">
                                                            <p><b>Liceu</b><br />  @if($dados->liceu == 1)
                                                                Caxito
                                                            @elseif($dados->liceu == 2)
                                                                  Malanje
                                                            @elseif($dados->liceu == 3)
                                                                    Ndalatando
                                                            @elseif($dados->liceu == 4)
                                                                  
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

                </div>
            </div>
        </div>

@endsection
