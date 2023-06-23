@extends('layouts.main_coordenador')
@section('title','Informações de Professores')
@section('content')


<section class="content">
      <div class="container-fluid">

      @foreach( $professores as $dados) 
           
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid"
                       src="/media/professor/img/{{$dados->photo}}"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">{{$dados->name}}</h3>

                

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Idade</b> <a class="float-right">{{$dados->idade}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Numero de Telefone</b> <a class="float-right">{{$dados->numero}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Ultima Vez On-line</b> <a class="float-right" style="color: red;">{{$dados->last_sign_in_at}}</a>
                  </li>

                  <li class="list-group-item">
                    <b>Penultima Vez On-line</b> <a class="float-right" style="color: red;">{{$dados->current_sign_in_at}}</a>
                  </li>

                  <li class="list-group-item">
                    <b>Nacionalidade</b> <a class="float-right" style="color: red;">{{$dados->nacionalidade}}</a>
                  </li>

                  <li class="list-group-item">
                    <b>Provincia</b> <a class="float-right" style="color: red;">{{$dados->provincia}}</a>
                  </li>

                  <li class="list-group-item">
                    <b>Monicipio</b> <a class="float-right" style="color: red;">{{$dados->monicipio}}</a>
                  </li>

                 

                </li> <li class="list-group-item">
                    <b>Numero do Bilhete</b> <a class="float-right" style="color: red;">{{$dados->bi}}</a>
                  </li>
                </ul>

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Dados</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
               

                <strong><i class="fas fa-map-marker-alt mr-1"></i> Morada</strong>

                <p class="text-muted">{{$dados->provincia}}, {{$dados->monicipio}}</p>

                <hr>

                <strong><i class="fas fa-pencil-alt mr-1"></i> Liceu</strong>

                <p class="text-muted">
                    @if($dados->liceu == 1)
                    Caxito
                @elseif($dados->liceu == 2)
                      Malanje
                @elseif($dados->liceu == 3)
                        Ndalatando
                @elseif($dados->liceu == 4)
                      
                    Ondjiva
                @endif
                </p>

                <hr>

                       </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>


          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Outros dados</a></li>
                  </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                    <!-- Post -->
                         <!-- /.tab-pane -->

                         <div class="row">
                            <div class="col-lg-3 col-6">
                              <!-- small box -->
                              <div class="small-box bg-danger 	">
                                <div class="inner">
                                  <h3> {{ $count_notas_invalidadas}} </h3>
                  
                                    <h5>Notas Enviadas</h5>
                                </div>
                                <div class="icon">
                                  <i class="fa-solid fa-file-circle-check"></i>
                                </div>
                                <a href="/coordenacao/ver_nota_enviada_individual/{{ $dados->liceu}}/{{ $dados->id}}" class="small-box-footer">Ver todas <i class="fas fa-arrow-circle-right"></i></a>
                              </div>
                            </div>

                              <div class="col-lg-3 col-6">
                              <!-- small box -->
                              <div class="small-box bg-success 	">
                                <div class="inner">
                                  <h3> {{ $count_notas_validadas}} </h3>
                  
                                    <h5>Notas Validadas</h5>
                                </div>
                                <div class="icon">
                                  <i class="fa-solid fa-file-circle-check"></i>
                                </div>
                                <a href="/coordenacao/ver_nota_validada_individual/{{ $dados->liceu}}/{{ $dados->id}}" class="small-box-footer">Ver todas <i class="fas fa-arrow-circle-right"></i></a>
                              </div>
                            </div>

                            <div class="col-lg-3 col-6">
                                <!-- small box -->
                                <div class="small-box bg-danger 	">
                                  <div class="inner">
                                    <h3> {{ $count_pct_invalidadas}} </h3>
                    
                                      <h5>PCT Enviadas</h5>
                                  </div>
                                  <div class="icon">
                                    <i class="fa-solid fa-file-circle-check"></i>
                                  </div>
                                  <a href="" class="small-box-footer">Ver todas <i class="fas fa-arrow-circle-right"></i></a>
                                </div>
                              </div>


                              <div class="col-lg-3 col-6">
                                <!-- small box -->
                                <div class="small-box bg-success	">
                                  <div class="inner">
                                    <h3> {{ $count_pct_validadas}} </h3>
                    
                                      <h5>PCT Validadas</h5>
                                  </div>
                                  <div class="icon">
                                    <i class="fa-solid fa-file-circle-check"></i>
                                  </div>
                                  <a href="" class="small-box-footer">Ver todas <i class="fas fa-arrow-circle-right"></i></a>
                                </div>
                              </div>
                            <!-- ./col -->
                            <div class="col-lg-3 col-6">
                              <!-- small box -->
                              <div class=" small-box bg-danger">
                                <div class="inner">
                                  <h3>{{$faltas}}<sup style="font-size: 20px"></sup></h3>
                  
                                  <h5>Faltas</h5>
                                </div>
                                <div class="icon">
                                  <i class="fa-solid fa-clock"></i>
                                </div>
                                <a href="#" class="small-box-footer">Ver todas <i class="fas fa-arrow-circle-right"></i></a>
                              </div>
                            </div>
                            <!-- ./col -->
                            <div class="col-lg-3 col-6">
                              <!-- small box -->
                              <div class="small-box bg-warning">
                                <div class="inner">
                                  <h3>{{$soli}}</h3>
                  
                                  <h5>Declaraões</h5>
                                </div>
                                <div class="icon">
                                  <i class="fa-solid fa-book-open-reader"></i>
                                </div>
                                <a href="#" class="small-box-footer">Ver todas <i class="fas fa-arrow-circle-right"></i></a>
                              </div>
                            </div>
                            <!-- ./col -->
                            <div class="col-lg-3 col-6">
                              <!-- small box -->
                              <div class="small-box bg-warning">
                                <div class="inner">
                                  <h3>{{$count_planos}}</h3>
                  
                                  <h5>Planos de Aula</h5>
                                </div>
                                <div class="icon">
                                  <i class="fa-solid fa-person-chalkboard"></i>
                                </div>
                                <a href="/coordenacao/plano_individual/{{ $dados->liceu}}/{{ $dados->id}}" class="small-box-footer">Ver todas <i class="fas fa-arrow-circle-right"></i></a>
                              </div>
                            </div>

                            <div class="col-lg-3 col-6">
                              <!-- small box -->
                              <div class="small-box bg-warning">
                                <div class="inner">
                                  <h3>{{$count_orientacoes}}</h3>
                  
                                  <h5>Orientações</h5>
                                </div>
                                <div class="icon">
                                  <i class="fa-solid fa-person-chalkboard"></i>
                                </div>
                                <a href="/coordenacao/orientacao_individual/{{ $dados->liceu}}/{{ $dados->id}}" class="small-box-footer">Ver todas <i class="fas fa-arrow-circle-right"></i></a>
                              </div>
                            </div>
                  
                          
                          
                            
                          
                           
                  
                            <!-- ./col -->
                          </div>
          @endforeach  
                          
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    
    <br>
    <br>
    <br>
    @endsection
