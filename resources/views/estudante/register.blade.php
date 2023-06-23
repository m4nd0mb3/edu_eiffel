<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ondjiva</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="/login/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="/login/css/style.css">
</head>
<body>

    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Registrar Estudante</h2>
                        <form action="{{ route('estudante.create') }}" method="post">
                    @if (Session::get('successo'))
                        <div class="alert alert-success">
                            {{ Session::get('successo') }}
                        </div>
                    @endif
                    @if (Session::get('fail'))
                    <div class="alert alert-danger">
                        {{ Session::get('falha') }}
                    </div>
                    @endif

                    @csrf  
                       <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Your Name" value="{{ old('name') }}"/>
                                <span class="text-danger">@error('name'){{ $message }}@enderror</span>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email" value="{{ old('email') }}"/>
                                <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                            </div>
                            <div class="form-group">
                            <label for="password">  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" onclick="mostrarOcultarSenha()" id="eyeSvg" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                    <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                </svg></label>
                                <input type="password" name="password" id="senha" placeholder="Password"/>
                                <span class="text-danger">@error('password'){{ $message }}@enderror</span>
                            </div>
                            <div class="form-group">
                            <label for="password">  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" onclick="mostrarOcultarSenha()" id="eyeSvg" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                    <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                </svg></label>
                                <input type="password" name="cpassword" id="senha" placeholder="Repeat your password"/>
                                <span class="text-danger">@error('cpassword'){{ $message }}@enderror</span>
                            </div>
                            <div class="form-group ">
                           
                           
                           <select name="liceu" id="required" class="form-control "  style="width: 100%;">
                            <option value="0"> Selecionae O Liceu</option>
                            @foreach( $liceu as $professor) 
                            <option value="{{ $professor->id}}">{{$professor->liceu}}</option>
                    @endforeach 
                           </select>
                          
                        
                         
                       </div>

                       <div class="form-group ">
                           
                           
                           <select name="classe" id="required" class="form-control "  style="width: 100%;">
                           <option value="0"> Selecionae a Classe</option>
                           @foreach( $classe as $professor) 
                            <option value="{{ $professor->id}}">{{$professor->classe}} -  @if($professor->turma == 1)
                                            A
                                        @elseif($professor->turma == 2)
                                              B
                                        
                                        @endif</option>
                            @endforeach 
                           </select>
                          
                        
                         
                       </div>
                       <div class="form-group ">
                           
                           
                           <select name="turma" id="required" class="form-control "  style="width: 100%;">
                            <option value="0"> Selecionae a Turma</option>
                            @foreach( $turma as $professor) 
                            <option value="{{ $professor->id}}">{{$professor->turma}}</option>
                    @endforeach 
                           </select>
                          
                        
                         
                       </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="/login/images/renom.png" alt="sing up image"></figure>
                      
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