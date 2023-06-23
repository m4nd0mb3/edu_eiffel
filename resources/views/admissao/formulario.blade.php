<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="formulario/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Formulário do Candidato</title>
</head>

<body>

    <div class="container">

        <div class="form-image">
            <img src="formulario/img/aluno.png" alt="">
            <img src="formulario/img/livro.png" alt="">
           <br>
           <br>
           <br>
           <br>
           <br>
           <br>
            <img src="formulario/img/material-escolar.png" alt="">
            
        </div>
        
        <div class="form">

               
@if (Session::get('success'))<!-- /.card-header -->
<div class="alert alert-success alert-dismissible fade show" role="alert" style="width: 100%; height: 150px;">
  <strong>{{ Session::get('success') }} </strong>, <a href="{{ route ('gerar_comprovativo')}}">Clique para Baixar Comprovativo</a>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<!-- /.card-body -->

@endif

@if (Session::get('fail'))
<!-- /.card-header -->
<div class="card-body">
    <div class="alert alert-danger alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <h5><i class="icon fas fa-ban"></i> Falha!</h5>
      {{ Session::get('fail') }} 
    </div>
    
</div>
  <!-- /.card-body -->
@endif
            <form action="{{ route ('adicionar_novo_estudante')}}" method="POST" enctype="multipart/form-data">
                <div class="form-header">
                    <div class="title">
                        <h1>Formulário de inscrição</h1>
                    </div>
                    
                </div>
                {{csrf_field()}}
                
                <div class="input-group">
                    <div class="input-box">
                        <label for="second_name">Apelido</label>
                        <input id="second_name" type="text" name="second_name"  required>
                    </div>

                    <div class="input-box">
                        <label for="first_name">Nome</label>
                        <input id="name" type="text" name="name"  required>
                    </div>
                    <div class="gender-inputs">
                    <div class="gender-title">
                        <h6>Gênero</h6>
                    </div>

                    <div class="gender-group">
                        <div class="gender-input">
                            <input id="female" type="radio" name="genero" value="2">
                            <label for="female">Feminino</label>
                        </div>
                        
                        <div class="gender-input">
                            <input id="male" type="radio" name="genero" value="1">
                            <label for="male">Masculino</label>
                        </div>

                        
                    </div>
                </div>

                    <div class="input-box">
                        <label for="email">E-mail</label>
                        <input id="email" type="email" name="email" >
                    </div>

                    <div class="input-box">
                        <label for="number">Data da Nascimento</label>
                        <input id="data" name="data_nasc" class="date-picker form-control" placeholder="dd-mm-yyyy" type="text" required="required" type="text" onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'" onblur="this.type='text'" onmouseout="timeFunctionLong(this)">
                          <script>
                            function timeFunctionLong(input) {
                              setTimeout(function() {
                                input.type = 'text';
                              }, 60000);
                            }
                          </script>  </div>

                    <div class="input-box">
                        <label for="password">Idade</label>
                        <input id="" type="text" name="idade"  required>
                    </div>


                    <div class="input-box">
                        <label for="confirmPassword">Nº do Bilhete / Cédula</label>
                        <input id="confirmPassword" type="text" name="bi"  required>
                    </div>

                </div>
                <div class="input-group">
                    <div class="input-box">
                        <label for="firstname">Data de Emissão</label>
                        <input id="data" name="data_emissao" class="date-picker form-control" placeholder="dd-mm-yyyy" type="text"  type="text" onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'" onblur="this.type='text'" onmouseout="timeFunctionLong(this)">
                          <script>
                            function timeFunctionLong(input) {
                              setTimeout(function() {
                                input.type = 'text';
                              }, 60000);
                            }
                          </script>   </div>

                    <div class="input-box">
                        <label for="lastname">Data de Caducidade</label>
                        <input id="data" name="data_cad" class="date-picker form-control" placeholder="dd-mm-yyyy" type="text"  type="text" onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'" onblur="this.type='text'" onmouseout="timeFunctionLong(this)">
                          <script>
                            function timeFunctionLong(input) {
                              setTimeout(function() {
                                input.type = 'text';
                              }, 60000);
                            }
                          </script> </div>
                          
                    <div class="input-box">
                        <label for="email">Local de Nascimento</label>
                        <input id="email" type="text" name="lugar_nasc"  required>
                    </div>
                    <div class="input-box">
                        <label for="email">Nacionalidade</label>
                        <input id="email" type="text" name="nacionalidade"  required>
                    </div>

                    <div class="input-box">
                        <label for="number">Província</label>
                        <input id="number" type="text" name="provincia"  required>
                    </div>

                    <div class="input-box">
                        <label for="password">Nome do Pai</label>
                        <input id="password" type="text" name="name_father" required>
                    </div>


                    <div class="input-box">
                        <label for="confirmPassword">Nome da Mãe</label>
                        <input id="confirmPassword" type="text" name="name_mather"  required>
                    </div>

                </div>
                <div class="input-group">
                    <div class="input-box">
                        <label for="firstname">Nome do Encarregado</label>
                        <input id="firstname" type="text" name="nome_enc" required>
                    </div>

                    <div class="input-box">
                        <label for="lastname">Telefone do Encarregado</label>
                        <input id="lastname" type="text" name="num_father" required>
                    </div>
                    <div class="input-box">
                        <label for="email">Residência do Aluno</label>
                        <input id="email" type="text" name="bairro"  required>
                    </div>

                    <div class="input-box">
                        <label for="number">Telefone do Aluno</label>
                        <input id="number" type="text" name="numero" required>
                    </div>

                    <div class="input-box">
                        <label for="password">Habilitações Literarias</label>
                        <input id="password" type="text" name="habilitacoes"  required>
                    </div>


                   
                    <div class="input-box">
                        <label for="confirmPassword">Religião</label>
                        <input id="confirmPassword" type="text" name="religiao" required>
                    </div>

                </div>

                <div class="gender-inputs">
                    <div class="gender-title">
                        <h6 style="color: red;">Selecione o Liceu que pretende se Candidatar</h6>
                    </div>

                    <div class="gender-group">
                        <div class="gender-input">
                            <input id="female" type="radio" name="liceu" value="1">
                            <label for="female">Liceu Eiffel de Caxito</label>
                        </div>

                        <div class="gender-input">
                            <input id="male" type="radio" name="liceu" value="2">
                            <label for="male">Liceu Eiffel de Malanje</label>
                        </div>

                        <div class="gender-input">
                            <input id="others" type="radio" name="liceu" value="3">
                            <label for="others">Liceu Eiffel de Ndalatando</label>
                        </div>
                        <div class="gender-input">
                            <input id="others" type="radio" name="liceu" value="4">
                            <label for="others">Liceu Eiffel de Ondjiva</label>
                        </div>

                       
                    </div>
                </div>
<br>
<br>
<br>

                <div class="input-group">
                    <div class="input-box">
                        <label for="bilhete">Copia do BI</label>
                        <input type="file" id ="bilhete" name ="bilhete" class="from-control-file">
                 
                    </div>

                    <div class="input-box">
                        <label for="photo">Fotografia</label>
                        <input type="file" id ="photo" name ="photo" class="from-control-file"> 
                 
                    </div>

                   
                    <div class="gender-inputs">
                        <div class="gender-title">
                            <h6>É portador de deficiência?</h6>
                        </div>
    
                        <div class="gender-group">
                            <div class="gender-input">
                                <input id="female" type="radio" name="portador" value="2">
                                <label for="female">Não</label>
                            </div>
    
                            <div class="gender-input">
                                <input id="male" type="radio" name="portador" value="1">
                                <label for="male">Sim</label>
                            </div>
    
                           
                        </div>
                    </div>
                </div>

              

                <div class="gender-inputs">
                    <div class="gender-title">
                        <h6>Visual</h6>
                    </div>

                    <div class="gender-group">
                        <div class="gender-input">
                            <input id="female" type="radio" name="visual" value="1">
                            <label for="female">Boa</label>
                        </div>

                        <div class="gender-input">
                            <input id="male" type="radio" name="visual" value="2">
                            <label for="male">Médio</label>
                        </div>

                        <div class="gender-input">
                            <input id="others" type="radio" name="visual" value="3">
                            <label for="others">Normal</label>
                        </div>
                        <div class="gender-input">
                            <input id="others" type="radio" name="visual" value="4">
                            <label for="others">Mal</label>
                        </div>

                       
                    </div>
                </div>

<br>
<br>
<br>
                <div class="gender-inputs">
                    <div class="gender-title">
                        <h6>Estado de Saúde</h6>
                    </div>

                    <div class="gender-group">
                        <div class="gender-input">
                            <label for="female">Mental</label>
                        </div>

                        <div class="gender-input">
                            <input id="male" type="radio" name="mental" value="1">
                            <label for="male">Bom</label>
                        </div>

                        <div class="gender-input">
                            <input id="others" type="radio" name="mental" value="2">
                            <label for="others">Médio</label>
                        </div>

                        <div class="gender-input">
                            <input id="none" type="radio" name="mental" value="3">
                            <label for="none">Mal</label>
                        </div>


                    </div>

                    <div class="gender-group">
                        <div class="gender-input">
                            <label for="female">Físico</label>
                        </div>

                        <div class="gender-input">
                            <input id="male" type="radio" name="fisico" value="1">
                            <label for="male">Bom</label>
                        </div>

                        <div class="gender-input">
                            <input id="others" type="radio" name="fisico" value="2">
                            <label for="others">Médio</label>
                        </div>

                        <div class="gender-input">
                            <input id="none" type="radio" name="fisico" value="3">
                            <label for="none">Mal</label>
                        </div>

                        
                    </div>
                    <div class="gender-group">
                        <div class="gender-input">
                            <label for="female">Psicológico</label>
                        </div>

                        <div class="gender-input">
                            <input id="male" type="radio" name="psicologico" value="1">
                            <label for="male">Bom</label>
                        </div>

                        <div class="gender-input">
                            <input id="others" type="radio" name="psicologico" value="2">
                            <label for="others">Médio</label>
                        </div>

                        <div class="gender-input">
                            <input id="none" type="radio" name="psicologico" value="3">
                            <label for="none">Mal</label>
                        </div>

                        
                    </div>

                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="gender-group">
                        <div class="gender-input">
                            <label for="female"> Já visitou o liceu com o seu encarregado de educação ?</label>
                        </div>

                        <div class="gender-input">
                            <input id="male" type="radio" name="visita" value="1">
                            <label for="male">Sim</label>
                        </div>

                        <div class="gender-input">
                            <input id="others" type="radio" name="visita" value="2">
                            <label for="others">Não</label>
                        </div>

                     
                        
                    </div>

                    
                </div>
               

                <div class="continue-button">
                    
                    <button type="submit" class="btn btn-success">Enviar Candidatura</button>
                </div>
            </form>
        </div>

        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
</body>

</html>