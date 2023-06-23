
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
             GOVERNO PROVINCIAL DO BENGO <br> GABINETE PROVINCIAL DA EDUCAÇÃO 
             <br> LICEU EIFFEL DE CAXITO</p>
       
    </div>


    <div class=" informacao">

        <p> Boletim de notas: 1 Trimestre  <br>
            Ano Lectivo: 2022 <br>
            Nome do Estudante:<span style="color: red;">{{ Auth::guard('estudante')->user()->name }}</span>  <span style="margin-left: 10px; font-weight: bolder;">Nº : {{ Auth::guard('estudante')->user()->id }} </span > <span style="margin-left: 10px; font-weight: bolder;">Turma:</span > A <span style="margin-left: 10px; font-weight: bolder;">Classe :  </span > 12º 
            </p> 
        
         </div>


         
<table border="0.5">

<thead>
 
    <tr>
        <th colspan="2"></th>
        <th colspan="4" style="text-align: center;"> ALUNO</th>
        <th colspan="3" style="text-align: center;"> TURMA A + B</th>
    </tr>

    <tr>
        <th colspan="2" style=" font-weight: bold; text-align: center;"> Disciplina</th>
        
        <th style="width: 80px; font-weight: bold; text-align: center;"> MAC <br>
            Média das <br>
            Avaliações <br>
            Continuas
        </th>

        <th style="width: 80px; font-weight: bold; text-align: center;">
            NPP  <br>
        Nota da <br>
        Prova do <br>
        Professor
        </th>

        <th style="width: 80px; font-weight: bold; text-align: center;">
            NPT  <br>
            Nota da  <br>
            Prova <br>
            Trimestral
        </th>

        <th style="width: 80px; font-weight: bold; text-align: center;">
            MT1 <br>
        Média 1  <br>
        Trimestre
        </th>

        <th style="width: 80px; font-weight: bold; text-align: center;">
                    CT1* <br>
    Cotação <br>
    do 1o <br>
    trimestre
                </th>


        <th style="width: 80px; font-weight: bold; text-align: center;">
            CT1 <br>
        Média <br>
        gera
        </th>

        <th style="width: 80px; font-weight: bold; text-align: center;">
            CT1 <br>
            Máxima
        </th>
    </tr>

    

</thead>



<tbody>
   
    <tr>
        <td rowspan="7"> formacao geral</td>
    </tr>

    <tr>
        <td> formacao</td>
    </tr>

    <tr>
        <td> formacao</td>
    </tr>

    <tr>
        <td> formacao</td>
    </tr>

    <tr>
        <td> formacao</td>
    </tr>

    <tr>
        <td> formacao</td>
    </tr>

    <tr>
        <td> formacao</td>
    </tr>

    <tr>
        <td> formacao</td>
    </tr>

    <tr >
        <td rowspan="4"> formacao especifica</td>
    </tr>

    <tr>
        <td> 
            Opcao
        </td>
    </tr>

    <tr>
        <td> 
            Opcao
        </td>
    </tr>

    <tr>
        <td> 
            Opcao
        </td>
    </tr>

    <tr>
        <td> 
            Opcao
        </td>
    </tr>

   

    <tr>
        <td colspan="4" style="text-align: center;">Media Geral</td>
        <td colspan="2"></td>
        <td colspan="3"></td>
    </tr>

    <tr>
        <td colspan="3" style="text-align: center;">Atrasos</td>
        <td colspan="3" style="text-align: center;"> Faltas</td>
        <td colspan="3" style="text-align: center;"> Faltas Justificadas</td>
    </tr>

    <tr>
        <td style="text-align: center; height: 80px;">Resumo da 
            apreciação 
            geral</td>
        <td colspan="8"  > Recomendações de reforço e melhorias nas disciplinas:   0 <br>
            Desempenho nas actividades extraescolar: M   B    MB  <br>
            Analise do comportamento cívico:       M    B     MB  <br>
            Acompanhamento dos Pais e Encarregados da Educação: M     B     MB <br>
            Recomendações Psicopedagogicas:    C    O     S</td>
    </tr>

  

</tbody>


  
</table>

</main>


</body>
</html>