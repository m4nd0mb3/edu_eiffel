<table border="1" style="font-family: 'Times New Roman', Times, serif;">
    <thead>
        <tr>
            <th colspan="21"
                style="
                    border: 0.05pt solid #000000;
                    font-family: 'Times New Roman', Times, serif;
                    text-align: center; 
                    font-weight: bold;
                    font-size: 10pt
                    margin:0.35mm;
                    ">
                TURMA {{ $turma }}
            </th>
        </tr>
        <tr>
            <th colspan="21"
                style="
                    border: 0.05pt solid #000000;
                    font-family: 'Times New Roman', Times, serif;
                    text-align: center; 
                    font-weight: bold;
                    font-size: 10pt
                    margin:0.35mm;
                    ">
                DISCIPLINA:
            </th>
        </tr>
        <tr>
            <th colspan="21"
                style="
                    border: 0.05pt solid #000000;
                    font-family: 'Times New Roman', Times, serif;
                    text-align: center; 
                    font-weight: bold;
                    font-size: 10pt
                    margin:0.35mm;
                    ">
                1º Trimestre
            </th>
        </tr>
        <tr>
            <th rowspan="2"
                style="border: 0.05pt solid #000000; text-align:center; font-family: 'Times New Roman', Times, serif;">
                Nº
            </th>
            <th rowspan="2"
                style="border: 0.05pt solid #000000; text-align:center; font-family: 'Times New Roman', Times, serif; width:5cm;">
                NOME
            </th>
            <th colspan="2"
                style="border: 0.05pt solid #000000; text-align:center; font-family: 'Times New Roman', Times, serif;">
                AC 1
            </th>
            <th colspan="2"
                style="border: 0.05pt solid #000000; text-align:center; font-family: 'Times New Roman', Times, serif;">
                AC 2
            </th>
            <th colspan="2"
                style="border: 0.05pt solid #000000; text-align:center; font-family: 'Times New Roman', Times, serif;">
                AC 3
            </th>
            <th colspan="2"
                style="border: 0.05pt solid #000000; text-align:center; font-family: 'Times New Roman', Times, serif;">
                AC 4
            </th>
            <th colspan="2"
                style="border: 0.05pt solid #000000; text-align:center; font-family: 'Times New Roman', Times, serif;">
                AC 5
            </th>
            <th colspan="2"
                style="border: 0.05pt solid #000000; text-align:center; font-family: 'Times New Roman', Times, serif;">
                AC 6
            </th>
            <th colspan="2"
                style="border: 0.05pt solid #000000; text-align:center; font-family: 'Times New Roman', Times, serif;">
                AC 7
            </th>
            <th colspan="2"
                style="border: 0.05pt solid #000000; text-align:center; font-family: 'Times New Roman', Times, serif;">
                AC 8
            </th>
            <th rowspan="2" style="border: 0.05pt solid #000000;">
                MAC 1
            </th>
            <th rowspan="2" style="border: 0.05pt solid #000000;">
                PP1
            </th>
            <th rowspan="2" style="border: 0.05pt solid #000000;">
                CT1
            </th>
        </tr>
        <tr>
            <th style="border: 0.05pt solid #000000; text-align:center; font-family: 'Times New Roman', Times, serif;">
                Data</th>
            <th style="border: 0.05pt solid #000000; text-align:center; font-family: 'Times New Roman', Times, serif;">
                Valor</th>
            <th style="border: 0.05pt solid #000000; text-align:center; font-family: 'Times New Roman', Times, serif;">
                Data</th>
            <th style="border: 0.05pt solid #000000; text-align:center; font-family: 'Times New Roman', Times, serif;">
                Valor</th>
            <th style="border: 0.05pt solid #000000; text-align:center; font-family: 'Times New Roman', Times, serif;">
                Data</th>
            <th style="border: 0.05pt solid #000000; text-align:center; font-family: 'Times New Roman', Times, serif;">
                Valor</th>
            <th style="border: 0.05pt solid #000000; text-align:center; font-family: 'Times New Roman', Times, serif;">
                Data</th>
            <th style="border: 0.05pt solid #000000; text-align:center; font-family: 'Times New Roman', Times, serif;">
                Valor</th>
            <th style="border: 0.05pt solid #000000; text-align:center; font-family: 'Times New Roman', Times, serif;">
                Data</th>
            <th style="border: 0.05pt solid #000000; text-align:center; font-family: 'Times New Roman', Times, serif;">
                Valor</th>
            <th style="border: 0.05pt solid #000000; text-align:center; font-family: 'Times New Roman', Times, serif;">
                Data</th>
            <th style="border: 0.05pt solid #000000; text-align:center; font-family: 'Times New Roman', Times, serif;">
                Valor</th>
            <th style="border: 0.05pt solid #000000; text-align:center; font-family: 'Times New Roman', Times, serif;">
                Data</th>
            <th style="border: 0.05pt solid #000000; text-align:center; font-family: 'Times New Roman', Times, serif;">
                Valor</th>
            <th style="border: 0.05pt solid #000000; text-align:center; font-family: 'Times New Roman', Times, serif;">
                Data</th>
            <th style="border: 0.05pt solid #000000; text-align:center; font-family: 'Times New Roman', Times, serif;">
                Valor</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($notas as $nota)
            <tr>
                <td
                    style="border: 0.05pt solid #000000; text-align:center; font-family: 'Times New Roman', Times, serif;">
                    {{ $loop->iteration }}</td>
                <td style="border: 0.05pt solid #000000; font-family: 'Times New Roman', Times, serif;">
                    {{ $nota->nome_estudante }}</td>
                @foreach ($nota->avaliacoes as $avaliacao)
                    <td
                        style="border: 0.05pt solid #000000; text-align:center; font-family: 'Times New Roman', Times, serif;">
                        {{$avaliacao->data}}</td>
                    <td style="border: 0.05pt solid #000000; font-family: 'Times New Roman', Times, serif;">
                        {{$avaliacao->nota}}</td>
                @endforeach
            </tr>
        @endforeach
    </tbody>
</table>
