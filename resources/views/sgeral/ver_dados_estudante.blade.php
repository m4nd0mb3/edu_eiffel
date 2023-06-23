@extends('layouts.main_spg')
@section('title','Informações de estudantes')
@section('content')


<div class="single-pro-review-area mt-t-30 mg-b-15">
            <div class="container-fluid">
                <div class="row">
                   
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="profile-info-inner">
                            <div class="profile-img">
                                <img src="/media/estudante/img/{{$estudantes->photo}}" alt="" />
                            </div>
                            <div class="profile-details-hr">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                        <div class="address-hr">
                                            <p><b>Nome</b><br /> {{$estudantes->name}}</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                        <div class="address-hr tb-sm-res-d-n dps-tb-ntn">
                                            <p><b>Classe / Turma</b><br />  @if($estudantes->classe == 1)
                                                10 A
                                @elseif($estudantes->classe == 2)
                                    10 B
                                @elseif($estudantes->classe == 3)
                                    11 A
                                @elseif($estudantes->classe == 4)
                                    11 B
                                @elseif($estudantes->classe == 5)
                                    12 A
                                @elseif($estudantes->classe == 6)
                                    12 B
                                @elseif($estudantes->classe == 7)
                                    -        
                                @endif </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                        <div class="address-hr">
                                            <p><b>Email </b><br /> {{$estudantes->email}}</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                        <div class="address-hr tb-sm-res-d-n dps-tb-ntn">
                                            <p><b>Numero de Telefone</b><br /> {{$estudantes->numero}}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="address-hr">
                                            <p><b>Morada</b><br /> {{$estudantes->bairro}}</p>
                                        </div>
                                    </div>
                                </div>
                              
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                        <div class="product-payment-inner-st res-mg-t-30 analysis-progrebar-ctn">
                            <ul id="myTabedu1" class="tab-review-design">
                               
                                
                                <li><a href="#INFORMATION">Detalhes de Aluno</a></li>
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit st-prf-pro">
                                <div class="product-tab-list tab-pane fade active in" id="description">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                                        <div class="address-hr biography">
                                                            <p><b>Numero do Bilhete</b><br /> {{$estudantes->bi}}</p>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                                        <div class="address-hr biography">
                                                            <p><b>Idade</b><br /> {{$estudantes->idade}}</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                                        <div class="address-hr biography">
                                                            <p><b>Data de NAscimento</b><br />{{$estudantes->data_nasc}}</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                                        <div class="address-hr biography">
                                                            <p><b>Nacionalidade</b><br /> {{$estudantes->nacionalidade}}</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                                        <div class="address-hr biography">
                                                            <p><b>Provincia</b><br />{{$estudantes->provincia}}</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                                        <div class="address-hr biography">
                                                            <p><b>Monicipio</b><br /> {{$estudantes->monicipio}}</p>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                                        <div class="address-hr biography">
                                                            <p><b>Nome do Encarregado / Pai</b><br /> {{$estudantes->name_father}}</p>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                                        <div class="address-hr biography">
                                                            <p><b>Nome da Encarregada / Mãe</b><br /> {{$estudantes->name_mather}}</p>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                                        <div class="address-hr biography">
                                                            <p><b>Numero do Encarregado / Pai</b><br /> {{$estudantes->num_father}}</p>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                                        <div class="address-hr biography">
                                                            <p><b>Liceu</b><br />  @if($estudantes->liceu == 1)
                                                                Caxito
                                                            @elseif($estudantes->liceu == 2)
                                                                  Malanje
                                                            @elseif($estudantes->liceu == 3)
                                                                    Ndalatando
                                                            @elseif($estudantes->liceu == 4)
                                                                  
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
