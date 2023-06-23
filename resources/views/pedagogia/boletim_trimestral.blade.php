

<table border="1">
    <thead>
        <tr >
            <th rowspan="2" colspan="2" style="text-align: center; height: 90px; width: 200px; font-weight: bold;"> 
           
               
            <img src="{{ public_path('logondal.jpg') }}">
               
                <br/> PAUTA DO LICEU  EIFFEL DE 
                             NDALATANDO 
                              <br>
                        ANO LECTIVO 2022-2023<br>
                            I TRIMESTRE<br>

                            
                           
            </th>
        
            <th></th>
       

    </tr>

    <tr>
    
    <th style="width: 40px; font-weight: bold;text-align: center; "> T </th>

    @foreach( $disciplinass as $prova)   
        <th colspan="4" style="height: 100px; font-weight: bold; text-align: center; "> 
            {{$prova->disciplina}}
        </th>
    @endforeach 

    <th  rowspan="2" >MEDIA
            DO 
    <br>PRIMEIRO <br> TRIMESTRE</th>
    </tr>

    <tr>
        <th style="width: 40px; font-weight: bold;text-align: center; "> ID </th>
        <th  style="width: 270px; font-weight: bold;text-align: center; "> Nome Completo</th>

        <th style="font-weight: bold;text-align: center; "> T</th>

        @foreach( $tipo_provas as $prova)

        <th  style="height: 100px; font-weight: bold; text-align: center; "> 
            {{$prova->tp_falta}}
        </th>

        @endforeach 

       
        @foreach( $tipo_provas as $prova)

        <th  style="height: 100px; font-weight: bold; text-align: center; "> 
            {{$prova->tp_falta}}
        </th>

        @endforeach 

        @foreach( $tipo_provas as $prova)

        <th  style="height: 100px; font-weight: bold; text-align: center; "> 
            {{$prova->tp_falta}}
        </th>

        @endforeach 

        @foreach( $tipo_provas as $prova)

        <th  style="height: 100px; font-weight: bold; text-align: center; "> 
            {{$prova->tp_falta}}
        </th>

        @endforeach 

        @foreach( $tipo_provas as $prova)

        <th  style="height: 100px; font-weight: bold; text-align: center; "> 
            {{$prova->tp_falta}}
        </th>

        @endforeach 

        @foreach( $tipo_provas as $prova)

        <th  style="height: 100px; font-weight: bold; text-align: center; "> 
            {{$prova->tp_falta}}
        </th>

        @endforeach 

        @foreach( $tipo_provas as $prova)

        <th  style="height: 100px; font-weight: bold; text-align: center; "> 
            {{$prova->tp_falta}}
        </th>

        @endforeach 

        @foreach( $tipo_provas as $prova)

        <th  style="height: 100px; font-weight: bold; text-align: center; "> 
            {{$prova->tp_falta}}
        </th>

        @endforeach 

        @foreach( $tipo_provas as $prova)

        <th  style="height: 100px; font-weight: bold; text-align: center; "> 
            {{$prova->tp_falta}}
        </th>

        @endforeach 

        @foreach( $tipo_provas as $prova)

        <th  style="height: 100px; font-weight: bold; text-align: center; "> 
            {{$prova->tp_falta}}
        </th>

        @endforeach 

        @foreach( $tipo_provas as $prova)

        <th  style="height: 100px; font-weight: bold; text-align: center; "> 
            {{$prova->tp_falta}}
        </th>

        @endforeach 

        @foreach( $tipo_provas as $prova)

        <th  style="height: 100px; font-weight: bold; text-align: center; "> 
            {{$prova->tp_falta}}
        </th>

        @endforeach 

       @foreach( $tipo_provas as $prova)

        <th  style="height: 100px; font-weight: bold; text-align: center; "> 
            {{$prova->tp_falta}}
        </th>

        @endforeach 

       
   

    </tr>

    
    </thead>




    <tbody>
        
    @foreach( $estudantes as $estudante) 
        <tr>
        <td>
            #
        </td>
        <td>
          {{$estudante['name']}}
        </td>

        
        <td>
            #
        </td>

    @foreach( $disciplinas[$estudante['id']] as $disciplina) 
 

        <?php
          $disciplina_temp = (object)$disciplina;
        ?>

        @foreach( $disciplina_temp->notes as $nota) 


            <td> 
            {{$nota['value'] }}
           
            </td>
          

           
        @endforeach 
    @endforeach  

        </tr>
     @endforeach  
     
    </tbody>
</table>


