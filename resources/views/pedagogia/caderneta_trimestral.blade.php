<table border="1" style="font-family: 'Times New Roman', Times, serif;">
    <thead>
        <tr>
            <th rowspan="2" colspan="2s" 
                style="
                    width:5cm;
                    height:3cm;
                    border: 0.05pt solid #000000;
                   
                    text-align: center; 
                    font-weight: bold;
                    font-size: 10pt;
                    margin:0.35mm;
                    "
                >
                <img width="100px" style="text-align: center;" src="{{$imagePath}}" alt="Descrição da Imagem">
                <p>PAUTA DO LICEU  EIFFEL DE MALANJE</p>
                <p>ANO LECTIVO 2022-2023</p>
                <p>{{$trimestre_nome}}</p>
                <p>10ª CLASSE</p>

            </th>
            <th  style="text-align: center; font-weight: bold;"></th>
            <th colspan="24" style="border: 0.05pt solid #000000; text-align: center; font-weight: bold; height: 30px;">FORMAÇÃO GERAL</th>

            <th colspan="16" style="border: 0.05pt solid #000000; text-align: center; font-weight: bold; height: 30px;">FORMAÇÃO ESPECIFICA</th>
            <th colspan="4" style="border: 0.05pt solid #000000; text-align: center; font-weight: bold; width: 30px; height: 30px;">OPÇÕES</th>
            <th rowspan="3" style="border: 0.05pt solid #000000; text-align: center; font-weight: bold; width: 25px; height: 30px; font-size: 10pt;">MEDIA DO {{$trimestre_nome}}</th>
            <th colspan="3" style="border: 0.05pt solid #000000; text-align: center; font-weight: bold; width: 25px; height: 30px; font-size: 10pt;">FALTAS</th>
        </tr>

        <tr>

            <th style="
                text-align: center;
        writing-mode: vertical-rl;
        transform: rotate(180deg);
        white-space: nowrap;
                ">{{$turma}}</th>
            @foreach ($disciplinas as $disciplina)
                <th colspan="4" style="border: 0.05pt solid #000000; text-align:center; height: 150px;">{{$disciplina->disciplina}}</th>
                
            @endforeach
            {{-- <th colspan="4" style="border: 0.05pt solid #000000; text-align:center;">L. PORTUGUESA</th>
            <th colspan="4" style="border: 0.05pt solid #000000; text-align:center;">L. INGLESA</th>
            <th colspan="4" style="border: 0.05pt solid #000000; text-align:center;">L. FRANCESA</th>
            <th colspan="4" style="border: 0.05pt solid #000000; text-align:center;">MATEMÁTICA</th>
            <th colspan="4" style="border: 0.05pt solid #000000; text-align:center;">INFORMATICA</th>
            <th colspan="4" style="border: 0.05pt solid #000000; text-align:center;">ED. FISICA</th>
            <th colspan="4" style="border: 0.05pt solid #000000; text-align:center;">FISICA</th>
            <th colspan="4" style="border: 0.05pt solid #000000; text-align:center;">QUIMICA</th>
            <th colspan="4" style="border: 0.05pt solid #000000; text-align:center;">BIOLOGIA</th>
            <th colspan="4" style="border: 0.05pt solid #000000; text-align:center;">GEOMETRIA DESCRITIVA</th>
            <th colspan="4" style="border: 0.05pt solid #000000; text-align:center;">DNL</th>--}}
            <th rowspan="2" style="border: 0.05pt solid #000000; text-align:center;">ATRASOS</th>
            <th rowspan="2" style="border: 0.05pt solid #000000; text-align:center;">TOTAL DE FALTAS</th>
            <th rowspan="2" style="border: 0.05pt solid #000000; text-align:center;">F. JUSTIFICADAS</th> 


        </tr>
        <tr>
            <th style="border: 0.05pt solid #000000; text-align:center;">Nº</th>
            <th style="border: 0.05pt solid #000000; text-align:center;">NOME</th>
            <th style="border: 0.05pt solid #000000; text-align:center;">T</th>
            <th style="border: 0.05pt solid #000000; text-align:center;">MAC</th>
            <th style="border: 0.05pt solid #000000; text-align:center;">NPP</th>
            <th style="border: 0.05pt solid #000000; text-align:center;">NPT</th>
            <th style="border: 0.05pt solid #000000; text-align:center;">MT</th>
            <th style="border: 0.05pt solid #000000; text-align:center;">MAC</th>
            <th style="border: 0.05pt solid #000000; text-align:center;">NPP</th>
            <th style="border: 0.05pt solid #000000; text-align:center;">NPT</th>
            <th style="border: 0.05pt solid #000000; text-align:center;">MT</th>
            <th style="border: 0.05pt solid #000000; text-align:center;">MAC</th>
            <th style="border: 0.05pt solid #000000; text-align:center;">NPP</th>
            <th style="border: 0.05pt solid #000000; text-align:center;">NPT</th>
            <th style="border: 0.05pt solid #000000; text-align:center;">MT</th>
            <th style="border: 0.05pt solid #000000; text-align:center;">MAC</th>
            <th style="border: 0.05pt solid #000000; text-align:center;">NPP</th>
            <th style="border: 0.05pt solid #000000; text-align:center;">NPT</th>
            <th style="border: 0.05pt solid #000000; text-align:center;">MT</th>
            <th style="border: 0.05pt solid #000000; text-align:center;">MAC</th>
            <th style="border: 0.05pt solid #000000; text-align:center;">NPP</th>
            <th style="border: 0.05pt solid #000000; text-align:center;">NPT</th>
            <th style="border: 0.05pt solid #000000; text-align:center;">MT</th>
            <th style="border: 0.05pt solid #000000; text-align:center;">MAC</th>
            <th style="border: 0.05pt solid #000000; text-align:center;">NPP</th>
            <th style="border: 0.05pt solid #000000; text-align:center;">NPT</th>
            <th style="border: 0.05pt solid #000000; text-align:center;">MT</th>
            <th style="border: 0.05pt solid #000000; text-align:center;">MAC</th>
            <th style="border: 0.05pt solid #000000; text-align:center;">NPP</th>
            <th style="border: 0.05pt solid #000000; text-align:center;">NPT</th>
            <th style="border: 0.05pt solid #000000; text-align:center;">MT</th>
            <th style="border: 0.05pt solid #000000; text-align:center;">MAC</th>
            <th style="border: 0.05pt solid #000000; text-align:center;">NPP</th>
            <th style="border: 0.05pt solid #000000; text-align:center;">NPT</th>
            <th style="border: 0.05pt solid #000000; text-align:center;">MT</th>
            <th style="border: 0.05pt solid #000000; text-align:center;">MAC</th>
            <th style="border: 0.05pt solid #000000; text-align:center;">NPP</th>
            <th style="border: 0.05pt solid #000000; text-align:center;">NPT</th>
            <th style="border: 0.05pt solid #000000; text-align:center;">MT</th>
            <th style="border: 0.05pt solid #000000; text-align:center;">MAC</th>
            <th style="border: 0.05pt solid #000000; text-align:center;">NPP</th>
            <th style="border: 0.05pt solid #000000; text-align:center;">NPT</th>
            <th style="border: 0.05pt solid #000000; text-align:center;">MT</th>
            <th style="border: 0.05pt solid #000000; text-align:center;">MAC</th>
            <th style="border: 0.05pt solid #000000; text-align:center;">NPP</th>
            <th style="border: 0.05pt solid #000000; text-align:center;">NPT</th>
            <th style="border: 0.05pt solid #000000; text-align:center;">MT</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($notas as $nota)
            <tr>
                <td
                    style="border: 0.05pt solid #000000; text-align:center; width:2cm;">
                    {{ $loop->iteration }}</td>
                <td style="border: 0.05pt solid #000000; width:5cm;">
                    {{ $nota->nome_estudante }}</td>
                <td style="border: 0.05pt solid #000000; width:1cm;">
                    {{$turma}}</td>
                @foreach ($nota->avaliacoes as $item)
                    <td style="border: 0.05pt solid #000000;">
                        {{$item->mac}}
                    </td>
                    <td style="border: 0.05pt solid #000000;">
                        {{$item->prova_professor}}
                    </td>
                    <td style="border: 0.05pt solid #000000;">
                        {{$item->ct}}
                    </td>
                    <td style="border: 0.05pt solid #000000;">
                        {{$item->mt}}
                    </td>
                @endforeach
                <td style="border: 0.05pt solid #000000;">
                    {{$nota->media_trimestral}}
                </td>
                <td style="border: 0.05pt solid #000000;"> </td>
                <td style="border: 0.05pt solid #000000;"> </td>
                <td style="border: 0.05pt solid #000000;"> </td>
            </tr>
            @endforeach
            <tr>
                <td></td>
                <td>
                    NOTA MÍNIMA
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    MEDIA POR MATERIA
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    NOTA MÁXIMA
                </td>
            </tr>
            <tr></tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td colspan="7" style="text-align: center">O Subdiretor Pedagógico</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td colspan="12" style="text-align: center">
                    O Director
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td colspan="7" style="text-align: center"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td colspan="13"  style="text-align: center">
                    Liceu Eiffel, {{$today}}
                </td>
            </tr>
    </tbody>
</table>
