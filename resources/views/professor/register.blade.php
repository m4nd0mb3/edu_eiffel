<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ondjiva</title>
    <link rel="icon" href="/ondjiva/img/logo.jpg" type="image/ico" />
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
                        <h2 class="form-title">Registrar Professor</h2>
                        <form action="{{ route('professor.create') }}" method="post">
                    @if (Session::get('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                        </div>
                    @endif
                    @if (Session::get('fail'))
                    <div class="alert alert-danger">
                        {{ Session::get('fail') }}
                    </div>
                    @endif

                    @csrf     <div class="form-group">
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
                                <label for="password"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="pass" placeholder="Password"/>
                                <span class="text-danger">@error('password'){{ $message }}@enderror</span>
                            </div>
                            <div class="form-group">
                                <label for="cpassword"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="cpassword" id="re_pass" placeholder="Repeat your password"/>
                                <span class="text-danger">@error('cpassword'){{ $message }}@enderror</span>
                            </div>
                            <div class="form-group ">
                           
                      
                              <select name="liceu" id="required" class="form-control "  style="width: 100%;">
                                <option value="0"> Selecione o Liceu</option>
                              @foreach( $liceus as $professor) 
                            <option value="{{ $professor->id}}">{{$professor->liceu}}</option>
                              @endforeach
                              </select>
                             
                      
                            
                          </div>

                          <div class="form-group ">
                           
                         
                         
                          
                        </div>
                          
                          <div class="form-group ">
                           
                           
                           <select name="classe_um" id="required" class="form-control "  style="width: 100%;">
                           <option value="7">Selecione</option>
                            @foreach( $classes as $professor) 
                            <option value="{{ $professor->id}}">{{$professor->classe}} -  @if($professor->turma == 1)
                                            A
                                        @elseif($professor->turma == 2)
                                              B
                                        
                                        @endif</option>
                            @endforeach 
                           </select>
                          
                        
                         
                       </div>
                       <div class="form-group ">
                           
                           
                           <select name="classe_dois" id="required" class="form-control "  style="width: 100%;">
                           <option value="7">Selecione</option>
                            @foreach( $classes as $professor) 
                            <option value="{{ $professor->id}}">{{$professor->classe}} -  @if($professor->turma == 1)
                                            A
                                        @elseif($professor->turma == 2)
                                              B
                                        
                                        @endif</option>
                            @endforeach 
                           </select>
                          
                        
                         
                       </div>
                       <div class="form-group">
                           
                           
                           <select name="classe_tres" id="required" class="form-control "  style="width: 100%;">
                           <option value="7">Selecione</option>
                            @foreach( $classes as $professor) 
                            <option value="{{ $professor->id}}">
                                {{$professor->classe}} -  @if($professor->turma == 1)
                                            A
                                        @elseif($professor->turma == 2)
                                            B
                                        @endif</option>
                            @endforeach 
                           </select>
                          
                        
                         
                       </div>

                       <div class="form-group ">
                           
                           
                           <select name="classe_quatro" id="required" class="form-control "  style="width: 100%;">
                           <option value="7">Selecione</option>
                            @foreach( $classes as $professor) 
                            <option value="{{ $professor->id}}">
                                {{$professor->classe}} -  @if($professor->turma == 1)
                                            A
                                        @elseif($professor->turma == 2)
                                              B
                        
                                        @endif</option>
                            @endforeach  
                           </select>
                          
                        
                         
                       </div>
                       <div class="form-group ">
                           
                           
                           <select name="classe_cinco" id="required" class="form-control "  style="width: 100%;">
                           <option value="7">Selecione</option>
                            @foreach( $classes as $professor) 
                            <option value="{{ $professor->id}}">{{$professor->classe}} -  @if($professor->turma == 1)
                                            A
                                        @elseif($professor->turma == 2)
                                              B
                                        
                                        @endif</option>
                            @endforeach  
                           </select>
                          
                        
                         
                       </div>

                       <div class="form-group ">
                           
                           
                           <select name="classe_seis" id="required" class="form-control "  style="width: 100%;">
                           <option value="7">Selecione</option>
                            @foreach( $classes as $professor) 
                            <option value="{{ $professor->id}}">{{$professor->classe}} -  @if($professor->turma == 1)
                                            A
                                        @elseif($professor->turma == 2)
                                              B
                                        
                                        @endif</option>
                            @endforeach 
                           </select>
                          
                        
                         
                       </div>
                      <div class="form-group ">
                          
                      
                         
                        
                      </div>
                      
                    

                       <div class="form-group row">
                        <label for="plano" class="col-form-label col-md-3 col-sm-3 label-align"> Fotografia</label>
                        <div class="col-md-6 col-sm-6 ">
                        <input type="file" id = "photo" name = "photo" class="from-control-file">
                      </div>
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