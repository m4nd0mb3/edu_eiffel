<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
    <link rel="stylesheet" href="{{ asset('bootstrap.min.css') }}">
    <title>Rede Eiffel</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="/login/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="/login/css/style.css">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3" style="margin-top: 45px">
                 <h4>user Dashboard</h4><hr>
                 <table class="table table-striped table-inverse table-responsive">
                     <thead class="thead-inverse">
                         <tr>
                             <th>Name</th>
                             <th>Email</th>
                             <th>Action</th>
                         </tr>
                         </thead>
                         <tbody>
                             <tr>
                                 <td>{{ Auth::guard('super')->user()->name }}</td>
                                 <td>{{ Auth::guard('super')->user()->email }}</td>
                                 <td>
                                     <a href="{{ route('super.logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                                     <form action="{{ route('super.logout') }}" method="post" class="d-none" id="logout-form">@csrf</form>
                                 </td>
                             </tr>
                         </tbody>
                 </table>
            </div>
        </div>
    </div>
    
    <div class="main">

      
   <!-- Sing in  Form -->
   <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                  

                    <div class="signin-form">
                        <h2 class="form-title">Adicionar Disciplina</h2>
                        <form action="{{ route('super.disciplina') }}" method="post">

                        @if (Session::get('fail'))
                        <div class="alert alert-danger">
                            {{ Session::get('fail') }}
                        </div>
                    @endif
               
                    @csrf
                     <div class="form-group">
                                <label for="nome"></label>
                                <input type="text" name="disciplina" id="email" placeholder="nome "/>
                                <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                            </div>
                           
                           
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Criar"/>
                            </div>
                        </form>
                       
                    </div>

                   
                </div>
            </div>
        </section>

 <!-- Sing in  Form -->
 <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                  

                    <div class="signin-form">
                        <h2 class="form-title">Adicionar dia</h2>
                        <form action="{{ route('super.dia') }}" method="post">

                        @if (Session::get('fail'))
                        <div class="alert alert-danger">
                            {{ Session::get('fail') }}
                        </div>
                    @endif
               
                    @csrf
                     <div class="form-group">
                                <label for="nome"></label>
                                <input type="text" name="dia" id="email" placeholder="dia "/>
                                <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                            </div>
                           
                           
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Criar"/>
                            </div>
                        </form>
                       
                    </div>

                   
                </div>
            </div>
        </section>

 <!-- Sing in  Form -->
 <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                  

                    <div class="signin-form">
                        <h2 class="form-title">Adicionar trimestre</h2>
                        <form action="{{ route('super.trimestre') }}" method="post">

                        @if (Session::get('fail'))
                        <div class="alert alert-danger">
                            {{ Session::get('fail') }}
                        </div>
                    @endif
               
                    @csrf
                     <div class="form-group">
                                <label for="nome"></label>
                                <input type="text" name="trimestre" id="email" placeholder="trimestre "/>
                                <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                            </div>
                           
                           
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Criar"/>
                            </div>
                        </form>
                       
                    </div>

                   
                </div>
            </div>
        </section>


   <!-- Sing in  Form -->
   <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                  

                    <div class="signin-form">
                        <h2 class="form-title">Adicionar Tipo Not</h2>
                        <form action="{{ route('super.tipo_not') }}" method="post">

                        @if (Session::get('fail'))
                        <div class="alert alert-danger">
                            {{ Session::get('fail') }}
                        </div>
                    @endif
               
                    @csrf
                     <div class="form-group">
                                <label for="nome"></label>
                                <input type="text" name="tipo_not" id="email" placeholder="nome "/>
                                <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                            </div>
                           
                           
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Criar"/>
                            </div>
                        </form>
                       
                    </div>

                   
                </div>
            </div>
        </section>

        

   <!-- Sing in  Form -->
   <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                  

                    <div class="signin-form">
                        <h2 class="form-title">Adicionar Tipo tipo_pessoaQDSA    1cYU57</h2>
                        <form action="{{ route('super.tipo_pessoa') }}" method="post">

                        @if (Session::get('fail'))
                        <div class="alert alert-danger">
                            {{ Session::get('fail') }}
                        </div>
                    @endif
               
                    @csrf
                     <div class="form-group">
                                <label for="nome"></label>
                                <input type="text" name="tipo_pessoa" id="email" placeholder="nome "/>
                                <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                            </div>
                           
                           
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Criar"/>
                            </div>
                        </form>
                       
                    </div>

                   
                </div>
            </div>
        </section>

         
   <!-- Sing in  Form -->
   <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                  

                    <div class="signin-form">
                        <h2 class="form-title">Adicionar Tipo de Plano</h2>
                        <form action="{{ route('super.typeplano') }}" method="post">

                        @if (Session::get('fail'))
                        <div class="alert alert-danger">
                            {{ Session::get('fail') }}
                        </div>
                    @endif
               
                    @csrf
                     <div class="form-group">
                                <label for="nome"></label>
                                <input type="text" name="tp_plano" id="email" placeholder="nome "/>
                                <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                            </div>
                           
                           
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Criar"/>
                            </div>
                        </form>
                       
                    </div>

                   
                </div>
            </div>
        </section>


         <!-- Sing in  Form -->
         <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                  


                    <div class="signin-form">
                        <h2 class="form-title">Adicionar Professor a Disciplina</h2>
                        <form action="{{ route('super.add_prof') }}" method="post">

                        @if (Session::get('fail'))
                        <div class="alert alert-danger">
                            {{ Session::get('fail') }}
                        </div>
                    @endif
               
                    @csrf
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="tipo"> <span class="required">Tipo de Prova</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                        <select name="disciplina_id" id="required" class="form-control ">
                            
                        @foreach( $disciplinas as $turma) 
                            <option value="{{ $turma->id}}">{{$turma->disciplina}}</option>
                    @endforeach 
                                
                              </select> 
                        </div>


                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="tipo"> <span class="required">Tipo de Prova</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                        <select name="professor_id" id="required" class="form-control ">
                        @foreach( $professores as $turma) 
                            <option value="{{ $turma->id}}">{{$turma->name}}</option>
                    @endforeach 
                                
                              </select> 
                        </div>
                      </div>
                           
                           
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Criar"/>
                            </div>
                        </form>
                       
                    </div>
                </div>
            </div>
        </section>



          <!-- Sing in  Form -->
          <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                  

                 

                    <div class="signin-form">
                        <h2 class="form-title">Adicionar Turma</h2>
                        <form action="{{ route('super.turma') }}" method="post">

                        @if (Session::get('fail'))
                        <div class="alert alert-danger">
                            {{ Session::get('fail') }}
                        </div>
                    @endif
               
                    @csrf
                     <div class="form-group">
                                <label for="nome"></label>
                                <input type="text" name="turma" id="email" placeholder="nome "/>
                                <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                            </div>
                           
                           
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Criar"/>
                            </div>
                        </form>
                       
                    </div>

                  
                </div>
            </div>
        </section>

          <!-- Sing in  Form -->
          <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                  


                    <div class="signin-form">
                        <h2 class="form-title">Adicionar Classe</h2>
                        <form action="{{ route('super.classe') }}" method="post">

                        @if (Session::get('fail'))
                        <div class="alert alert-danger">
                            {{ Session::get('fail') }}
                        </div>
                    @endif
               
                    @csrf
                    <div class="form-group">
                                <label for="nome"></label>
                                <input type="text" name="classe" id="email" placeholder="nome "/>
                                <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                            </div>
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="tipo"> <span class="required">Tipo de Prova</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                        <select name="turma" id="required" class="form-control ">
                        @foreach( $turmas as $turma) 
                            <option value="{{ $turma->id}}">{{$turma->turma}}</option>
                    @endforeach 
                                
                              </select> 
                        </div>
                      </div>
                           
                           
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Criar"/>
                            </div>
                        </form>
                       
                    </div>
                </div>
            </div>
        </section>

        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                  


                    <div class="signin-form">
                        <h2 class="form-title">Adicionar Liceu</h2>
                        <form action="{{ route('super.liceu') }}" method="post">

                        @if (Session::get('fail'))
                        <div class="alert alert-danger">
                            {{ Session::get('fail') }}
                        </div>
                    @endif
               
                    @csrf
                     <div class="form-group">
                                <label for="nome"></label>
                                <input type="text" name="liceu" id="email" placeholder="Liceu "/>
                                <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                            </div>
                           
                           
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Criar"/>
                            </div>
                        </form>
                       
                    </div>
                </div>
            </div>
        </section>

           <!-- Sing in  Form -->
           <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                  


                    <div class="signin-form">
                        <h2 class="form-title">Adicionar Formacao</h2>
                        <form action="{{ route('super.formacao') }}" method="post">

                        @if (Session::get('fail'))
                        <div class="alert alert-danger">
                            {{ Session::get('fail') }}
                        </div>
                    @endif
               
                    @csrf
                     <div class="form-group">
                                <label for="nome"></label>
                                <input type="text" name="formacao" id="email" placeholder="Liceu "/>
                                <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                            </div>
                           
                           
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Criar"/>
                            </div>
                        </form>
                       
                    </div>
                </div>
            </div>
        </section>

<!-- Sing in  Form -->
<section class="sign-in">
            <div class="container">
                <div class="signin-content">
                  


                    <div class="signin-form">
                        <h2 class="form-title">Adicionar Tipo de Prova</h2>
                        <form action="{{ route('super.typeprova') }}" method="post">

                        @if (Session::get('fail'))
                        <div class="alert alert-danger">
                            {{ Session::get('fail') }}
                        </div>
                    @endif
               
                    @csrf
                     <div class="form-group">
                                <label for="nome"></label>
                                <input type="text" name="tp_falta" id="email" placeholder="nome "/>
                                <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                            </div>
                            <label for="nome">Liceu</label>

                         
                           
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Criar"/>
                            </div>
                        </form>
                       
                    </div>
                </div>
            </div>
        </section>

        

<!-- Sing in  Form -->
<section class="sign-in">
            <div class="container">
                <div class="signin-content">
                  


                    <div class="signin-form">
                        <h2 class="form-title">Adicionar Tipo de Documento Estudante</h2>
                        <form action="{{ route('super.tp_edoc') }}" method="post">

                        @if (Session::get('fail'))
                        <div class="alert alert-danger">
                            {{ Session::get('fail') }}
                        </div>
                    @endif
               
                    @csrf
                     <div class="form-group">
                                <label for="nome"></label>
                                <input type="text" name="tp_edoc" id="email" placeholder="nome "/>
                                <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                            </div>
                           
                           
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Criar"/>
                            </div>
                        </form>
                       
                    </div>
                </div>
            </div>
        </section>

        

<!-- Sing in  Form -->
<section class="sign-in">
            <div class="container">
                <div class="signin-content">
                  


                    <div class="signin-form">
                        <h2 class="form-title">Adicionar Tipo de Documento Professor</h2>
                        <form action="{{ route('super.tp_pdoc') }}" method="post">

                        @if (Session::get('fail'))
                        <div class="alert alert-danger">
                            {{ Session::get('fail') }}
                        </div>
                    @endif
               
                    @csrf
                     <div class="form-group">
                                <label for="nome"></label>
                                <input type="text" name="tp_pdoc" id="email" placeholder="nome "/>
                                <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                            </div>
                           
                           
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Criar"/>
                            </div>
                        </form>
                       
                    </div>
                </div>
            </div>
        </section>

        



<!-- Sing in  Form -->
<section class="sign-in">
            <div class="container">
                <div class="signin-content">
                  


                    <div class="signin-form">
                        <h2 class="form-title">Adicionar Tipo de Falta</h2>
                        <form action="{{ route('super.typefalta') }}" method="post">

                        @if (Session::get('fail'))
                        <div class="alert alert-danger">
                            {{ Session::get('fail') }}
                        </div>
                    @endif
               
                    @csrf
                     <div class="form-group">
                                <label for="nome"></label>
                                <input type="text" name="tp_falta" id="email" placeholder="nome "/>
                                <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                            </div>
                           
                           
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Criar"/>
                            </div>
                        </form>
                       
                    </div>
                </div>
            </div>
        </section>

           <!-- Sing in  Form -->
   <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                  

                    <div class="signin-form">
                        <h2 class="form-title">Adicionar Link Professsor</h2>
                        <form action="{{ route('super.link') }}" method="post">

                        @if (Session::get('fail'))
                        <div class="alert alert-danger">
                            {{ Session::get('fail') }}
                        </div>
                    @endif
               
                    @csrf
                     <div class="form-group">
                                <label for="nome"></label>
                                <input type="text" name="link" id="email" placeholder=" "/>
                                <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                            </div>
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="tipo"> <span class="required">Tipo de Prova</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                        <select name="liceu" id="required" class="form-control ">
                            
                        @foreach( $liceus as $turma) 
                            <option value="{{ $turma->id}}">{{$turma->liceu}}</option>
                    @endforeach 
                                
                              </select> 
                        </div>

                        <div class="col-md-6 col-sm-6 ">
                        <select name="trimestre_id" id="required" class="form-control ">
                            
                        @foreach( $trimestres as $turma) 
                            <option value="{{ $turma->id}}">{{$turma->trimestre}}</option>
                        @endforeach 
                                
                              </select> 
                        </div>
                        <div class="form-group">
                            <label for="nome"> Descricao</label>
                            <input type="text" name="descrição" id="email" placeholder=" "/>
                            <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                        </div>

                        <div class="form-group">
                            <label for="nome"> tipo</label>
                            <input type="text" name="tipo" id="email" placeholder=" "/>
                            <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                        </div>
                       
                       
                           
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Criar"/>
                            </div>
                        </form>
                       
                    </div>

                   
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="/login/vendor/jquery/jquery.min.js"></script>
    <script src="/login/js/main.js"></script>

</body>
</html>