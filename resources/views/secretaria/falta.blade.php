@extends('layouts.main_so')
@section('title','Secretaria')
@section('content')


<div class="container">
    <div class="product-sales-area mg-tb-30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-sales-chart">
                        <div class="portlet-title">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="caption pro-sl-hd">
                                        <span class="caption-subject"><b>Selecione a Classe e a Turma </b></span>
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
                    
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <a href="{{ route('secretaria_ondjiva.decima_A') }}">
                        <div class="analytics-sparkle-line reso-mg-b-30">
                            <div class="analytics-content">
                                <h5>10 ª</h5>
                                <h2><span>A</span></h2>
                               
                               
                            </div>
                        </div>
                    </a>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <a href="{{ route('secretaria_ondjiva.decima_B') }}">
                        <div class="analytics-sparkle-line reso-mg-b-30">
                            <div class="analytics-content">
                                <h5>10 ª</h5>
                                <h2><span>B</span></h2>
                            </div>
                        </div>
                    </a>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <a href="{{ route('secretaria_ondjiva.decimap_A') }}">
                        <div class="analytics-sparkle-line reso-mg-b-30 table-mg-t-pro dk-res-t-pro-30">
                            <div class="analytics-content">
                                <h5>11 ª</h5>
                                <h2><span>A</span></h2>
                            </div>
                        </div>
                    </a>
                    </div>
                    
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <a href="{{ route('secretaria_ondjiva.decimap_B') }}">
                        <div class="analytics-sparkle-line table-mg-t-pro dk-res-t-pro-30">
                            <div class="analytics-content">
                                <h5>11 ª</h5>
                                <h2><span>B</span></h2>    
                            </div>
                        </div>
                    </a>
                    </div>
                </div>
            </div>
        </div>

       

        <div class="product-sales-area mg-tb-30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-sales-chart">
                            <div class="portlet-title">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="caption pro-sl-hd">
                                            <span class="caption-subject"><b>Finalistas</b></span>
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
                    
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <a href="{{ route('secretaria_ondjiva.decimas_A') }}">
                        <div class="analytics-sparkle-line reso-mg-b-30">
                            <div class="analytics-content">
                                <h5>12 ª</h5>
                                <h2><span>A</span></h2>
                               
                            </div>
                        </div>
                    </a>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <a href="{{ route('secretaria_ondjiva.decimas_B') }}">
                        <div class="analytics-sparkle-line reso-mg-b-30">
                            <div class="analytics-content">
                                <h5>12 ª</h5>
                                <h2><span>B</span></h2>
                            </div>
                        </div>
                    </a>
                    </div>
                  
                </div>
            </div>
        </div>

       
    </div>

@endsection