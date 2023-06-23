
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boletim de nota</title>

    <link rel="stylesheet" href="/boletim/css/styles.css">
</head>
<body>
    
    <main class="pagina">

    <div class="assinatura_director" style="border: 1px solid black; width: 180px; height: 100px;">
            <p style="text-align: center;">Visto <br> Subdirector Pedagógico <br> _______________  <br>/___/____/</p>
           
    </div>


    <div class="foto_topo" style="text-align: center; margin-top: -180px;" >
    <img src="{{ public_path('/boletim/img/ri_3.png') }}">
    </div>
    
    <div class=" info_liceu">

        <p style="text-align: center;"> REPÚBLICA DE ANGOLA <br>
             GOVERNO PROVINCIAL @if(Auth::guard('estudante')->user()->liceu == 1)
             DO BENGO
            @elseif(Auth::guard('estudante')->user()->liceu == 2)
            DE MALANJE
          @elseif(Auth::guard('estudante')->user()->liceu == 3)
        DO CUANZA NORTE
     
          @elseif(Auth::guard('estudante')->user()->liceu == 4)
         DO CUNENE
         @endif

           <br> GABINETE PROVINCIAL DA EDUCAÇÃO 
             <br> @if(Auth::guard('estudante')->user()->liceu == 1)
             LICEU EIFFEL DE CAXITO
            @elseif(Auth::guard('estudante')->user()->liceu == 2)
            LICEU EIFFEL DE MALANJE
          @elseif(Auth::guard('estudante')->user()->liceu == 3)
          LICEU EIFFEL DE NDALATANDO
     
          @elseif(Auth::guard('estudante')->user()->liceu == 4)
          LICEU EIFFEL DE ONDJIVA
         
                                    
                                 @endif</p>
       
    </div>


    <div class=" informacao">

        <p> Boletim de Avaliações: 2 Trimestre  <br>
            Ano Lectivo: 2022/2023 <br>
            Nome do Estudante:<span style="color: red;">   {{ Auth::guard('estudante')->user()->name }}</span>  <span style="margin-left: 10px; font-weight: bolder;">ID Estudante : {{ Auth::guard('estudante')->user()->id }} </span > <span style="margin-left: 10px; font-weight: bolder;">Turma:</span > 
                @if(Auth::guard('estudante')->user()->turma == 1)
                A
               @elseif(Auth::guard('estudante')->user()->turma == 2)
                       B
            
                                                      
                                   
                                    @endif <span style="margin-left: 10px; font-weight: bolder;">Classe :  </span >         
                                        @if(Auth::guard('estudante')->user()->classe == 1)
                                        10ª 
                                       @elseif(Auth::guard('estudante')->user()->classe == 2)
                                               10ª 
                                     @elseif(Auth::guard('estudante')->user()->classe == 3)
                                        11ª 
                              
                                     @elseif(Auth::guard('estudante')->user()->classe == 4)
                                        11ª 
                                      @elseif(Auth::guard('estudante')->user()->classe == 4)
                                        12ª 
                                     @elseif(Auth::guard('estudante')->user()->classe == 4)
                                        12ª 
                                                                              
                                                           
                                                            @endif
        
         </div>

<table border= "1">
         <thead>
                <tr>
                <th style="width: 170px;">Disciplina</th>
                <th style="width: 170px;">Tipo de Prova</th>
                <th style="width: 170px;">Data</th>
                <th style="width: 170px;">Nota</th>
                    </tr>
              </thead>
             
              <tbody>
              @foreach( $notas as $prova) 
                                    <tr>
                                       
                                       
                                   <td >
                                @if($prova->mix_id == 1)
                                            Matemática
                                        @elseif($prova->mix_id == 2)
                                              Química
                                        @elseif($prova->mix_id == 3)
                                             Fisica
                                        @elseif($prova->mix_id == 4)
                                        L. Portuguesa
                                        @elseif($prova->mix_id == 5)
                                        Francês
                                        @elseif($prova->mix_id == 6)
                                        Inglês                
                                        @elseif($prova->mix_id == 7)
                                        Biologia
                                        @elseif($prova->mix_id == 8)
                                              Geologia
                                        @elseif($prova->mix_id == 9)
                                              Filosofia
                                        @elseif($prova->mix_id == 10)
                                            Informática
                                        @elseif($prova->mix_id == 11)
                                             Geometria Descritiva
                                        @elseif($prova->mix_id == 12)
                                            DNL
                                        @elseif($prova->mix_id == 13)
                                           Educação Física
                                       
                                       
                                        @endif
                                        </td>

                                     
                                        <td>
                                        @if($prova->tipo_id == 1)
                                            Avaliação 
                                        @elseif($prova->tipo_id == 2)
                                          Prova do Professor
                                        @elseif($prova->tipo_id == 3)
                                             Prova Trimestral
                                        @elseif($prova->tipo_id == 4)
                                            MAC
                                        
                                        @endif
                                       </td>
                                        <td>{{ $prova->data}}</td>
                                        <td>{{ $prova->nota}}</td>
                                       
                                    </tr>
                                    @endforeach  
           
               
                  
                     </tbody>

                     </table>
             
</main>


</body>
</html>