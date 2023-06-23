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
                                 <td>{{ Auth::guard('web')->user()->name }}</td>
                                 <td>{{ Auth::guard('web')->user()->email }}</td>
                                 <td>
                                     <a href="{{ route('user.logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                                     <form action="{{ route('user.logout') }}" method="post" class="d-none" id="logout-form">@csrf</form>
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
                        <form action="{{ route('user.disciplina') }}" method="post">

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
                        <h2 class="form-title">Adicionar Turma</h2>
                        <form action="{{ route('user.turma') }}" method="post">

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
                        <form action="{{ route('user.classe') }}" method="post">

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
                        <form action="{{ route('user.liceu') }}" method="post">

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
                        <h2 class="form-title">Adicionar Tipo de Prova</h2>
                        <form action="{{ route('user.typeprova') }}" method="post">

                        @if (Session::get('fail'))
                        <div class="alert alert-danger">
                            {{ Session::get('fail') }}
                        </div>
                    @endif
               
                    @csrf
                     <div class="form-group">
                                <label for="nome"></label>
                                <input type="text" name="tipo" id="email" placeholder="nome "/>
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
                        <form action="{{ route('user.typefalta') }}" method="post">

                        @if (Session::get('fail'))
                        <div class="alert alert-danger">
                            {{ Session::get('fail') }}
                        </div>
                    @endif
               
                    @csrf
                     <div class="form-group">
                                <label for="nome"></label>
                                <input type="text" name="tipo_falta" id="email" placeholder="nome "/>
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