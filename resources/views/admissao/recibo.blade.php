
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recibo de Candidatura</title>

    <link rel="stylesheet" href="/boletim/css/styles.css">

</head>
<body>
    
    <main class="pagina">

    <div class="foto_topo" style="text-align: center; " >
    <img src="{{ public_path('formulario/img/ri_3.png') }}">
    </div>
    
    <div class=" info_liceu">
@foreach( $estudantes as $estudante) 

        <p style="text-align: center;"> REPÚBLICA DE ANGOLA <br>
             GOVERNO PROVINCIAL @if($estudante->liceu == 1)
             DO BENGO
            @elseif($estudante->liceu == 2)
            DE MALANJE
          @elseif($estudante->liceu == 3)
        DO CUANZA NORTE
     
          @elseif($estudante->liceu == 4)
         DO CUNENE
         @endif

           <br> GABINETE PROVINCIAL DA EDUCAÇÃO 
             <br> @if($estudante->liceu== 1)
             LICEU EIFFEL DE CAXITO
            @elseif($estudante->liceu == 2)
            LICEU EIFFEL DE MALANJE
          @elseif($estudante->liceu == 3)
          LICEU EIFFEL DE NDALATANDO
     
          @elseif($estudante->liceu == 4)
          LICEU EIFFEL DE ONDJIVA
         
                                    
                                 @endif</p>
       
    </div>


    <div class=" informacao">

        <p> Recibo de Inscrição Nº: {{$estudante->id}}  
        <br>
            <br>
            Ano Lectivo: 2023/2024 <br>
            
            Nome do Candidato:<span style="color: red;">   {{$estudante->name }}  {{$estudante->second_name }}</span> 
            <br>
             
            Idade:<span style="color: red;">   {{$estudante->idade }}  Anos</span>  

        </p>

         </div>

         <p> <br>
                            A Direção do
              @if($estudante->liceu== 1)
             LICEU EIFFEL DE CAXITO
            @elseif($estudante->liceu == 2)
            LICEU EIFFEL DE MALANJE
          @elseif($estudante->liceu == 3)
          LICEU EIFFEL DE NDALATANDO
     
          @elseif($estudante->liceu == 4)
          LICEU EIFFEL DE ONDJIVA
         
                                    
                                 @endif, vem por intermédio deste comunicar que a inscrição do candidato <span>{{$estudante->name}} {{$estudante->second_name}}</span>
                            de idade <span>{{$estudante->idade}} anos</span> que reside em <span>{{$estudante->bairro}}</span> com o contacto<span>{{$estudante->numero}}</span>
                  e com o bilhete número <span>{{$estudante->bi}}</span>. Fez a sua inscrição no dia <span>{{$estudante->created_at}}</span> pelo link
                       link:  <a href="https://liceueiffel.redeeiffel.ao/inscricao_novo_estudante.">https://liceueiffel.redeeiffel.ao/inscricao_novo_estudante.</a>
                            </p>

                            <p> Deve Apresentar este recibo no dia do exame</p>
                           
                        </div>

    <p>
        Para consultar a sua candidatura, por favor digite o link: 
    <a href="https://liceueiffel.redeeiffel.ao/consulta_novo_estudante/{{$estudante->id}}.">https://liceueiffel.redeeiffel.ao/consulta_novo_estudante/{{$estudante->id}}.</a>

    </p>

    <p>
            {!! QrCode::size(100)->generate( " Candidado $estudante->name
         
         Fale Conosco
         926 04 89 39 
         
         ") !!}
            </p>
    @endforeach

</main>


</body>
</html>