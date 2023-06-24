<style>
    .table-header {
        width: 5cm;
        height: 3cm;
        border: 0.05pt solid #000000;
        font-family: 'Times New Roman', Times, serif;
        text-align: center;
        font-weight: bold;
        font-size: 10pt;
        margin: 0.35mm;
    }

    /* .vertical-text {
        writing-mode: vertical-rl;
        text-orientation: upright;
    } */

    .vertical-header {
        transform: rotate(-90deg);
        white-space: nowrap;
        vertical-align: middle;
        text-align: center;
    }
</style>


<table border="1" style="font-family: 'Times New Roman', Times, serif;">
    <thead>
        <tr>
            <th rowspan="2" colspan="2s" 
                style="
                    width:5cm;
                    height:3cm;
                    border: 0.05pt solid #000000;
                    font-family: 'Times New Roman', Times, serif;
                    text-align: center; 
                    font-weight: bold;
                    font-size: 10pt
                    margin:0.35mm;
                    "
                >
                <p>PAUTA DO LICEU  EIFFEL DE MALANJE</p>
                <p>ANO LECTIVO 2022-2023</p>
                <p>{{$trimestre_nome}}</p>
                <p>10ª CLASSE</p>
            </th>
            <th  style="text-align: center; font-weight: bold;"></th>
            <th colspan="24" style="text-align: center; font-weight: bold;">FORMAÇÃO GERAL</th>

            <th colspan="16" style="text-align: center; font-weight: bold;">FORMAÇÃO ESPECIFICA</th>
            <th colspan="4" style="text-align: center; font-weight: bold; width: 200px;">OPÇÕES</th>
            <th rowspan="3" style="text-align: center; font-weight: bold; width: 200px;">MEDIA DO {{$trimestre_nome}}</th>
            <th colspan="3" style="text-align: center; font-weight: bold; width: 200px;">FALTAS</th>
        </tr>

        <tr>

            <th style="
                text-align: center;
        writing-mode: vertical-rl;
        transform: rotate(180deg);
        white-space: nowrap;
                ">{{$turma}}</th>
            @foreach ($disciplinas as $disciplina)
                <th colspan="4" style="border: 0.05pt solid #000000; text-align:center; font-family: 'Times New Roman', Times, serif;">{{$disciplina->disciplina}}</th>
                
            @endforeach
            {{-- <th colspan="4" style="border: 0.05pt solid #000000; text-align:center; font-family: 'Times New Roman', Times, serif;">L. PORTUGUESA</th>
            <th colspan="4" style="border: 0.05pt solid #000000; text-align:center; font-family: 'Times New Roman', Times, serif;">L. INGLESA</th>
            <th colspan="4" style="border: 0.05pt solid #000000; text-align:center; font-family: 'Times New Roman', Times, serif;">L. FRANCESA</th>
            <th colspan="4" style="border: 0.05pt solid #000000; text-align:center; font-family: 'Times New Roman', Times, serif;">MATEMÁTICA</th>
            <th colspan="4" style="border: 0.05pt solid #000000; text-align:center; font-family: 'Times New Roman', Times, serif;">INFORMATICA</th>
            <th colspan="4" style="border: 0.05pt solid #000000; text-align:center; font-family: 'Times New Roman', Times, serif;">ED. FISICA</th>
            <th colspan="4" style="border: 0.05pt solid #000000; text-align:center; font-family: 'Times New Roman', Times, serif;">FISICA</th>
            <th colspan="4" style="border: 0.05pt solid #000000; text-align:center; font-family: 'Times New Roman', Times, serif;">QUIMICA</th>
            <th colspan="4" style="border: 0.05pt solid #000000; text-align:center; font-family: 'Times New Roman', Times, serif;">BIOLOGIA</th>
            <th colspan="4" style="border: 0.05pt solid #000000; text-align:center; font-family: 'Times New Roman', Times, serif;">GEOMETRIA DESCRITIVA</th>
            <th colspan="4" style="border: 0.05pt solid #000000; text-align:center; font-family: 'Times New Roman', Times, serif;">DNL</th>--}}
            <th rowspan="2" style="border: 0.05pt solid #000000; text-align:center; font-family: 'Times New Roman', Times, serif;">ATRASOS</th>
            <th rowspan="2" style="border: 0.05pt solid #000000; text-align:center; font-family: 'Times New Roman', Times, serif;">TOTAL DE FALTAS</th>
            <th rowspan="2" style="border: 0.05pt solid #000000; text-align:center; font-family: 'Times New Roman', Times, serif;">F. JUSTIFICADAS</th> 


        </tr>
        <tr>
            <th style="border: 0.05pt solid #000000; text-align:center; font-family: 'Times New Roman', Times, serif;">Nº</th>
            <th style="border: 0.05pt solid #000000; text-align:center; font-family: 'Times New Roman', Times, serif;">NOME</th>
            <th style="border: 0.05pt solid #000000; text-align:center; font-family: 'Times New Roman', Times, serif;">T</th>
            <th style="border: 0.05pt solid #000000; text-align:center; font-family: 'Times New Roman', Times, serif;">MAC</th>
            <th style="border: 0.05pt solid #000000; text-align:center; font-family: 'Times New Roman', Times, serif;">NPP</th>
            <th style="border: 0.05pt solid #000000; text-align:center; font-family: 'Times New Roman', Times, serif;">NPT</th>
            <th style="border: 0.05pt solid #000000; text-align:center; font-family: 'Times New Roman', Times, serif;">MT</th>
            <th style="border: 0.05pt solid #000000; text-align:center; font-family: 'Times New Roman', Times, serif;">MAC</th>
            <th style="border: 0.05pt solid #000000; text-align:center; font-family: 'Times New Roman', Times, serif;">NPP</th>
            <th style="border: 0.05pt solid #000000; text-align:center; font-family: 'Times New Roman', Times, serif;">NPT</th>
            <th style="border: 0.05pt solid #000000; text-align:center; font-family: 'Times New Roman', Times, serif;">MT</th>
            <th style="border: 0.05pt solid #000000; text-align:center; font-family: 'Times New Roman', Times, serif;">MAC</th>
            <th style="border: 0.05pt solid #000000; text-align:center; font-family: 'Times New Roman', Times, serif;">NPP</th>
            <th style="border: 0.05pt solid #000000; text-align:center; font-family: 'Times New Roman', Times, serif;">NPT</th>
            <th style="border: 0.05pt solid #000000; text-align:center; font-family: 'Times New Roman', Times, serif;">MT</th>
            <th style="border: 0.05pt solid #000000; text-align:center; font-family: 'Times New Roman', Times, serif;">MAC</th>
            <th style="border: 0.05pt solid #000000; text-align:center; font-family: 'Times New Roman', Times, serif;">NPP</th>
            <th style="border: 0.05pt solid #000000; text-align:center; font-family: 'Times New Roman', Times, serif;">NPT</th>
            <th style="border: 0.05pt solid #000000; text-align:center; font-family: 'Times New Roman', Times, serif;">MT</th>
            <th style="border: 0.05pt solid #000000; text-align:center; font-family: 'Times New Roman', Times, serif;">MAC</th>
            <th style="border: 0.05pt solid #000000; text-align:center; font-family: 'Times New Roman', Times, serif;">NPP</th>
            <th style="border: 0.05pt solid #000000; text-align:center; font-family: 'Times New Roman', Times, serif;">NPT</th>
            <th style="border: 0.05pt solid #000000; text-align:center; font-family: 'Times New Roman', Times, serif;">MT</th>
            <th style="border: 0.05pt solid #000000; text-align:center; font-family: 'Times New Roman', Times, serif;">MAC</th>
            <th style="border: 0.05pt solid #000000; text-align:center; font-family: 'Times New Roman', Times, serif;">NPP</th>
            <th style="border: 0.05pt solid #000000; text-align:center; font-family: 'Times New Roman', Times, serif;">NPT</th>
            <th style="border: 0.05pt solid #000000; text-align:center; font-family: 'Times New Roman', Times, serif;">MT</th>
            <th style="border: 0.05pt solid #000000; text-align:center; font-family: 'Times New Roman', Times, serif;">MAC</th>
            <th style="border: 0.05pt solid #000000; text-align:center; font-family: 'Times New Roman', Times, serif;">NPP</th>
            <th style="border: 0.05pt solid #000000; text-align:center; font-family: 'Times New Roman', Times, serif;">NPT</th>
            <th style="border: 0.05pt solid #000000; text-align:center; font-family: 'Times New Roman', Times, serif;">MT</th>
            <th style="border: 0.05pt solid #000000; text-align:center; font-family: 'Times New Roman', Times, serif;">MAC</th>
            <th style="border: 0.05pt solid #000000; text-align:center; font-family: 'Times New Roman', Times, serif;">NPP</th>
            <th style="border: 0.05pt solid #000000; text-align:center; font-family: 'Times New Roman', Times, serif;">NPT</th>
            <th style="border: 0.05pt solid #000000; text-align:center; font-family: 'Times New Roman', Times, serif;">MT</th>
            <th style="border: 0.05pt solid #000000; text-align:center; font-family: 'Times New Roman', Times, serif;">MAC</th>
            <th style="border: 0.05pt solid #000000; text-align:center; font-family: 'Times New Roman', Times, serif;">NPP</th>
            <th style="border: 0.05pt solid #000000; text-align:center; font-family: 'Times New Roman', Times, serif;">NPT</th>
            <th style="border: 0.05pt solid #000000; text-align:center; font-family: 'Times New Roman', Times, serif;">MT</th>
            <th style="border: 0.05pt solid #000000; text-align:center; font-family: 'Times New Roman', Times, serif;">MAC</th>
            <th style="border: 0.05pt solid #000000; text-align:center; font-family: 'Times New Roman', Times, serif;">NPP</th>
            <th style="border: 0.05pt solid #000000; text-align:center; font-family: 'Times New Roman', Times, serif;">NPT</th>
            <th style="border: 0.05pt solid #000000; text-align:center; font-family: 'Times New Roman', Times, serif;">MT</th>
            <th style="border: 0.05pt solid #000000; text-align:center; font-family: 'Times New Roman', Times, serif;">MAC</th>
            <th style="border: 0.05pt solid #000000; text-align:center; font-family: 'Times New Roman', Times, serif;">NPP</th>
            <th style="border: 0.05pt solid #000000; text-align:center; font-family: 'Times New Roman', Times, serif;">NPT</th>
            <th style="border: 0.05pt solid #000000; text-align:center; font-family: 'Times New Roman', Times, serif;">MT</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($notas as $nota)
            <tr>
                <td
                    style="border: 0.05pt solid #000000; text-align:center; font-family: 'Times New Roman', Times, serif; width:2cm;">
                    {{ $loop->iteration }}</td>
                <td style="border: 0.05pt solid #000000; font-family: 'Times New Roman', Times, serif; width:5cm;">
                    {{ $nota->nome_estudante }}</td>
                <td style="border: 0.05pt solid #000000; font-family: 'Times New Roman', Times, serif; width:1cm;">
                    {{$turma}}</td>
                <!-- Adicione aqui as células das colunas restantes -->
            </tr>
        @endforeach
    </tbody>
</table>
