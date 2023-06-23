<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PDF Candidato Malanje</title>
</head>
<body>



@foreach( $estudantes as $estudante) 
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="student-inner-std res-mg-b-30">
                          
                            <div class="student-dtl">
                                <h2> Ficha de inscrição Número: EC{{$estudante->id}}</h2>
                             
                            </div>

                            <p> <br>
                            A Direção do Liceu Eiffel de Malanje, vem por intermédio deste comunicar que a inscrição do candidato <span>{{$estudante->name}}</span>
                            de idade <span>{{$estudante->idade}} anos</span> que reside em <span>{{$estudante->morada}}</span> com o contacto<span>{{$estudante->telefone}}</span>
                  e com o bilhete numero <span>{{$estudante->bi}}</span> fez a sua inscrição no dia <span>{{$estudante->created_at}}</span> pelo link
                       link:  <a href="https://liceueiffel.redeeiffel.ao/formulario_ndalatando.">https://liceueiffel.redeeiffel.ao/formulario_malanje.</a>
                            </p>

                            <p> Deve Apresentar esse recibo no dia do exame</p>
                            <div class="student-dtl">
                                <h2></h2>
                                <p class="dp"><b>Nome:</b> {{$estudante->name}}</p>
                                <p class="dp-ag"><b>Ficha Número:</b>{{$estudante->id}}</p>
                                <p class="dp-ag"><b>Idade:</b>{{$estudante->idade}}</p>
                                <p class="dp-ag"><b>Número do documento:</b>{{$estudante->bi}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach 

                   
                    
                   
</body>
</html>