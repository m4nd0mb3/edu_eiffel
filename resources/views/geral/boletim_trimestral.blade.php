

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

    @foreach( $disciplinas as $prova)   
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

        <th style="font-weight: bold;text-align: center; "> MT</th>
       
        @foreach( $tipo_provas as $prova)

        <th  style="height: 100px; font-weight: bold; text-align: center; "> 
            {{$prova->tp_falta}}
        </th>

        @endforeach 

        <th style="font-weight: bold;text-align: center; "> MT</th>
        @foreach( $tipo_provas as $prova)

        <th  style="height: 100px; font-weight: bold; text-align: center; "> 
            {{$prova->tp_falta}}
        </th>

        @endforeach 

        <th style="font-weight: bold;text-align: center; "> MT</th>
        @foreach( $tipo_provas as $prova)

        <th  style="height: 100px; font-weight: bold; text-align: center; "> 
            {{$prova->tp_falta}}
        </th>

        @endforeach 

        <th style="font-weight: bold;text-align: center; "> MT</th>
        @foreach( $tipo_provas as $prova)

        <th  style="height: 100px; font-weight: bold; text-align: center; "> 
            {{$prova->tp_falta}}
        </th>

        @endforeach 

        <th style="font-weight: bold;text-align: center; "> MT</th>
        @foreach( $tipo_provas as $prova)

        <th  style="height: 100px; font-weight: bold; text-align: center; "> 
            {{$prova->tp_falta}}
        </th>

        @endforeach 

        <th style="font-weight: bold;text-align: center; "> MT</th>
        @foreach( $tipo_provas as $prova)

        <th  style="height: 100px; font-weight: bold; text-align: center; "> 
            {{$prova->tp_falta}}
        </th>

        @endforeach 

        <th style="font-weight: bold;text-align: center; "> MT</th>
        @foreach( $tipo_provas as $prova)

        <th  style="height: 100px; font-weight: bold; text-align: center; "> 
            {{$prova->tp_falta}}
        </th>

        @endforeach 

        <th style="font-weight: bold;text-align: center; "> MT</th>
        @foreach( $tipo_provas as $prova)

        <th  style="height: 100px; font-weight: bold; text-align: center; "> 
            {{$prova->tp_falta}}
        </th>

        @endforeach 

        <th style="font-weight: bold;text-align: center; "> MT</th>
        @foreach( $tipo_provas as $prova)

        <th  style="height: 100px; font-weight: bold; text-align: center; "> 
            {{$prova->tp_falta}}
        </th>

        @endforeach 

        <th style="font-weight: bold;text-align: center; "> MT</th>
        @foreach( $tipo_provas as $prova)

        <th  style="height: 100px; font-weight: bold; text-align: center; "> 
            {{$prova->tp_falta}}
        </th>

        @endforeach 

        <th style="font-weight: bold;text-align: center; "> MT</th>
        @foreach( $tipo_provas as $prova)

        <th  style="height: 100px; font-weight: bold; text-align: center; "> 
            {{$prova->tp_falta}}
        </th>

        @endforeach 

        <th style="font-weight: bold;text-align: center; "> MT</th>
       @foreach( $tipo_provas as $prova)

        <th  style="height: 100px; font-weight: bold; text-align: center; "> 
            {{$prova->tp_falta}}
        </th>

        @endforeach 

        <th style="font-weight: bold;text-align: center; "> MT</th>
       
   

    </tr>

    
    </thead>




    <tbody>
        
    @foreach( $invoices as $prova) 
        <tr>
            <td> {{$prova->estudante_id}}</td>

            <td> {{$prova->estudante->name}}</td>

            <td> @if($prova->classe == 1)
                            10ª A
            @elseif($prova->classe == 2)
                10ª B
            @elseif($prova->classe == 3)
                11ª A
            @elseif($prova->classe == 4)
                11ª B
            @elseif($prova->classe == 5)
                12ª A
            @elseif($prova->classe == 6)
                12ª B
                
            @endif


            </td>
   
    <td> {{$prova->nota}}</td>

   

               
      

        </tr>
     @endforeach  
     
    </tbody>
</table>


