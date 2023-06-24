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
                <p>I TRIMESTRE</p>
                <p>10ª CLASSE</p>
            </th>
            <th  style="text-align: center; font-weight: bold;"></th>
            <th colspan="24" style="text-align: center; font-weight: bold;">FORMAÇÃO GERAL</th>

            <th colspan="16" style="text-align: center; font-weight: bold;">FORMAÇÃO ESPECIFICA</th>
            <th colspan="4" style="text-align: center; font-weight: bold; width: 200px;">OPÇÕES</th>
            <th rowspan="3" style="text-align: center; font-weight: bold; width: 200px;">MEDIA DO 1º TRIMESTRE</th>
            <th colspan="3" style="text-align: center; font-weight: bold; width: 200px;">FALTAS</th>
        </tr>

        <tr>

            <th style="
                text-align: center;
        writing-mode: vertical-rl;
        transform: rotate(180deg);
        white-space: nowrap;
                ">10ª A e B</th>
            <th colspan="4">L. PORTUGUESA</th>
            <th colspan="4">L. INGLESA</th>
            <th colspan="4">L. FRANCESA</th>
            <th colspan="4">MATEMÁTICA</th>
            <th colspan="4">INFORMATICA</th>
            <th colspan="4">ED. FISICA</th>
            <th colspan="4">FISICA</th>
            <th colspan="4">QUIMICA</th>
            <th colspan="4">BIOLOGIA</th>
            <th colspan="4">GEOMETRIA DESCRITIVA</th>
            <th colspan="4">DNL</th>
            <th rowspan="2">ATRASOS</th>
            <th rowspan="2">TOTAL DE FALTAS</th>
            <th rowspan="2">F. JUSTIFICADAS</th>


        </tr>
        <tr>
            <th>Nº</th>
            <th>NOME</th>
            <th>T</th>
            <th>MAC</th>
            <th>NPP</th>
            <th>NPT</th>
            <th>MT</th>
            <th>MAC</th>
            <th>NPP</th>
            <th>NPT</th>
            <th>MT</th>
            <th>MAC</th>
            <th>NPP</th>
            <th>NPT</th>
            <th>MT</th>
            <th>MAC</th>
            <th>NPP</th>
            <th>NPT</th>
            <th>MT</th>
            <th>MAC</th>
            <th>NPP</th>
            <th>NPT</th>
            <th>MT</th>
            <th>MAC</th>
            <th>NPP</th>
            <th>NPT</th>
            <th>MT</th>
            <th>MAC</th>
            <th>NPP</th>
            <th>NPT</th>
            <th>MT</th>
            <th>MAC</th>
            <th>NPP</th>
            <th>NPT</th>
            <th>MT</th>
            <th>MAC</th>
            <th>NPP</th>
            <th>NPT</th>
            <th>MT</th>
            <th>MAC</th>
            <th>NPP</th>
            <th>NPT</th>
            <th>MT</th>
            <th>MAC</th>
            <th>NPP</th>
            <th>NPT</th>
            <th>MT</th>
        </tr>
    </thead>
    <tbody>
        {{-- @foreach ($dados as $dado)
            <tr>
                <td>{{ $dado['numero'] }}</td>
                <td>{{ $dado['nome'] }}</td>
                <td>{{ $dado['t'] }}</td>
                <td>{{ $dado['mac'] }}</td>
                <td>{{ $dado['npp'] }}</td>
                <td>{{ $dado['npt'] }}</td>
                <!-- Adicione aqui as células das colunas restantes -->
            </tr>
        @endforeach --}}
    </tbody>
</table>
