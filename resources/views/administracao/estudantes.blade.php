@extends('layouts.main_ao')
@section('title','Turmas')
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
                    
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <a href="{{ route('administracao_ondjiva.turma_a') }}">
                        <div class="analytics-sparkle-line reso-mg-b-30">
                            <div class="analytics-content">
                                <h5 style="color: rgb(203, 11, 78);">10 ª</h5>
                                <h2><span style="color: rgb(205, 19, 63);">A</span></h2>
                               
                               
                            </div>
                        </div>
                    </a>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <a href="{{ route('administracao_ondjiva.turma_b') }}">
                        <div class="analytics-sparkle-line reso-mg-b-30">
                            <div class="analytics-content">
                                <h5 style="color: rgb(87, 91, 50);">10 ª</h5>
                                <h2><span style="color: rgb(36, 184, 25);">B</span></h2>
                            </div>
                        </div>
                    </a>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <a href="{{ route('administracao_ondjiva.turma_pa') }}">
                        <div class="analytics-sparkle-line reso-mg-b-30 table-mg-t-pro dk-res-t-pro-30">
                            <div class="analytics-content">
                                <h5 style="color: rgb(32, 36, 247);">11 ª</h5>
                                <h2><span style="color: rgb(64, 31, 211);">A</span></h2>
                            </div>
                        </div>
                    </a>
                    </div>
                    
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <a href="{{ route('administracao_ondjiva.turma_pb') }}">
                        <div class="analytics-sparkle-line table-mg-t-pro dk-res-t-pro-30">
                            <div class="analytics-content">
                                <h5 style="color: rgb(42, 204, 9);">11 ª</h5>
                                <h2><span style="color: rgb(29, 189, 125);">B</span></h2>    
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
                                            <span class="caption-subject" style="color: rgb(182, 62, 19);"><b>Finalistas</b></span>
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
                        <a href="{{ route('administracao_ondjiva.turma_sa') }}">
                        <div class="analytics-sparkle-line reso-mg-b-30">
                            <div class="analytics-content">
                                <h5 style="color: rgb(194, 19, 54);">12 ª</h5>
                                <h2><span style="color: rgb(206, 11, 60);">A</span></h2>
                               
                            </div>
                        </div>
                    </a>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <a href="{{ route('administracao_ondjiva.turma_sb') }}">
                        <div class="analytics-sparkle-line reso-mg-b-30">
                            <div class="analytics-content">
                                <h5 style="color: rgb(42, 46, 6);">12 ª</h5>
                                <h2><span style="color: rgb(249, 229, 12);">B</span></h2>
                            </div>
                        </div>
                    </a>
                    </div>
                  
                </div>
            </div>
        </div>

       
    </div>
@endsection