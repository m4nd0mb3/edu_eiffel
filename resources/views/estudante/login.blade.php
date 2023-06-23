<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Estudante</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="/ondjiva/img/logo.jpg">
    <link rel="icon" href="/ondjiva/img/logo.jpg" type="image/ico" />

    <!-- Main css -->
    <link rel="stylesheet" href="/login/css/style.css">
</head>
<body>

    <div class="main">

      

        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="/login/images/renom.png" alt="sing up image"></figure>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Estudantes</h2>
                        <form action="{{ route('estudante.check') }}" method="post">
                        @if (Session::get('fail'))
                        <div class="alert alert-danger" style="color: red;">
                            {{ Session::get('fail') }}
                        </div>
                    @endif
               
                    @csrf
                     <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="email" id="email" placeholder="email " value="{{ old('email') }}"/>
                                <span class="text-danger" style="color: red;">@error('email'){{ $message }}@enderror</span>
                            </div>
                            <div class="form-group">
                                <label for="password"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="senha" placeholder="Password"/>
                                <span class="text-danger" style="color: red;">@error('password'){{ $message }}@enderror</span>
                                <label for="password">  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" onclick="mostrarOcultarSenha()" id="eyeSvg" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                    <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                </svg></label>
                            </div>
 
                          

                            
                           
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Entrar"/>
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
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>


