@extends('layouts.main_go')
@section('title','Informações de Funcionario')
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
                       src="/media/funcionario/img/{{$dados->photo}}"
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

                         <a class="btn btn-primary btn-sm" href=" /media/funcionario/pdf/{{$dados->bilhete}}" download = "Bilhete {{ $dados->name}}">
                <i class="fa-solid fa-address-card"></i>
    
                    
                    BI
                </a>   

                <a class="btn btn-primary btn-sm" href="/media/funcionario/pdf/{{$dados->hl}}"  download = "Bilhete {{ $dados->name}}>
                <i class="fa-solid fa-language"></i>
    
                    
                    Diploma
                </a>  
                
                <a class="btn btn-primary btn-sm" href="/media/funcionario/cv/{{$dados->cv}}" download = "Hacaobilita {{ $dados->name}}">
                <i class="fa-solid fa-wallet"></i>
    
                    
                    Curriculum Vitae
                </a>   

                <a class="btn btn-primary btn-sm" href=" /media/funcionario/gm/{{$dados->gm}}" download = "Guia {{ $dados->name}}">
                <i class="fa-solid fa-file-lines"></i>
    
                    
                    Guia de Colocação
                </a>   

                            
                          
                           
                  
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
