@extends('layouts.empresa')
@section('title','Candidaturas Aceites')
@section('content')

<div class="product-status mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap drp-lst">
                            <h4>Departments List</h4>
                            <div class="add-product">
                                <a href="add-department.html">Add Departments</a>
                            </div>
                            <div class="asset-inner">
                                <table>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nome da Empresa</th>
                                        <th>Status</th>
                                        <th>Tipo de Vaga</th>
                                        <th>Email da empresa</th>
                                        <th>Telefone da Empresa</th>
                                        <th>Nome do Estudante</th>
                                        <th>Curso do Estudante</th>
                                        <th>Setting</th>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Rede Eiffel</td>
                                        <td>
                                            <button class="pd-setting">Activo</button>
                                        </td>
                                        <td>Programação</td>
                                        <td>admin@gmail.com</td>
                                        <td>01962067309</td>
                                        <td>Antonio Morais</td>
                                        <td>EngenhariA informatica</td>
                                        <td>
                                            <button data-toggle="tooltip" title="Enviar" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                            <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                        </td>
                                    </tr>
                                    
                                </table>
                            </div>
                            <div class="custom-pagination">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination">
                                        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection
