@extends('layouts.main_spo')
@section('title','Informações de estudantes')
@section('content')

<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid"
                       src="/media/estudante/img/{{$estudantes->photo}}"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">{{$estudantes->name}}</h3>

                <p class="text-muted text-center"> @if($estudantes->classe == 1)
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

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Idade</b> <a class="float-right">{{$estudantes->idade}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Numero de Telefone</b> <a class="float-right">{{$estudantes->numero}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Ultima Vez On-line</b> <a class="float-right" style="color: red;">{{$estudantes->last_sign_in_at}}</a>
                  </li>

                  <li class="list-group-item">
                    <b>Nacionalidade</b> <a class="float-right" style="color: red;">{{$estudantes->nacionalidade}}</a>
                  </li>

                  <li class="list-group-item">
                    <b>Provincia</b> <a class="float-right" style="color: red;">{{$estudantes->provincia}}</a>
                  </li>

                  <li class="list-group-item">
                    <b>Monicipio</b> <a class="float-right" style="color: red;">{{$estudantes->monicipio}}</a>
                  </li>

                  <li class="list-group-item">
                    <b>Nome do Encarregado / Pai</b> <a class="float-right" style="color: red;">{{$estudantes->name_father}}</a>
                
                </li> <li class="list-group-item">
                    <b>Nome da Encarregada / Mãe</b> <a class="float-right" style="color: red;">{{$estudantes->name_mather}}</a>
                  </li>

                </li> <li class="list-group-item">
                    <b>Numero do Bilhete</b> <a class="float-right" style="color: red;">{{$estudantes->bi}}</a>
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

                <p class="text-muted">{{$estudantes->provincia}}, {{$estudantes->monicipio}}</p>

                <hr>

                <strong><i class="fas fa-pencil-alt mr-1"></i> Liceu</strong>

                <p class="text-muted">
                    @if($estudantes->liceu == 1)
                    Caxito
                @elseif($estudantes->liceu == 2)
                      Malanje
                @elseif($estudantes->liceu == 3)
                        Ndalatando
                @elseif($estudantes->liceu == 4)
                      
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
                                  <h3>12</h3>
                  
                                    <h5>Notas</h5>
                                </div>
                                <div class="icon">
                                  <i class="fa-solid fa-file-circle-check"></i>
                                </div>
                                <a href="{{ route('professor.tipo_boletim') }}" class="small-box-footer">Ver todas <i class="fas fa-arrow-circle-right"></i></a>
                              </div>
                            </div>
                            <!-- ./col -->
                            <div class="col-lg-3 col-6">
                              <!-- small box -->
                              <div class=" small-box bg-danger">
                                <div class="inner">
                                  <h3>12<sup style="font-size: 20px"></sup></h3>
                  
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
                              <div class="small-box bg-danger">
                                <div class="inner">
                                  <h3>12</h3>
                  
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
                              <div class="small-box bg-danger">
                                <div class="inner">
                                  <h3>23</h3>
                  
                                  <h5>Ajudas</h5>
                                </div>
                                <div class="icon">
                                  <i class="fa-solid fa-person-chalkboard"></i>
                                </div>
                                <a href="#" class="small-box-footer">Ver todas <i class="fas fa-arrow-circle-right"></i></a>
                              </div>
                            </div>
                  
                          
                          
                            
                          
                           
                  
                            <!-- ./col -->
                          </div>
                          
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
