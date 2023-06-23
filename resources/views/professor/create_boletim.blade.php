@extends('layouts.main_po')
@section('title', 'Enviar Notas')
@section('content')

    <div class="card-body">
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5>O Sistema de avaliação é sobre 20V</h5>
        </div>
    </div>
    @foreach ($estudantess as $prova)
        <form action="/professor/enviar_nota/{{ $prova->liceu }}/{{ $prova->classe }}" method="post"
            enctype="multipart/form-data">
    @endforeach

    {{ csrf_field() }}

    <!-- SELECT2 EXAMPLE -->
    <div class="card card-default">
        <div class="card-header">
            <h3 class="card-title" style="font-weight: bolder; color: red;">Selecione os dados da prova</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                        class="fas fa-minus"></i></button>
                <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">

                    <div class="form-group">
                        <label>Trimestre</label>
                        <select name="trimestre_id" id="required" class="form-control ">
                            @foreach ($trimestres as $prova)
                                <option value="{{ $prova->id }}">{{ $prova->trimestre }}
                                </option>
                            @endforeach


                        </select>
                    </div>
                    <div class="form-group">
                        <label>Tipo de Prova</label>
                        <select name="tipo_id" id="required" class="form-control ">
                            @foreach ($tipo_provas as $prova)
                                <option value="{{ $prova->id }}">{{ $prova->tp_falta }}
                                </option>
                            @endforeach


                        </select>
                    </div>
                    <!-- /.form-group -->
                    <div class="form-group">
                        <label>Data</label>
                        <input id="data" name="data" class="date-picker form-control" placeholder="dd-mm-yyyy"
                            type="text" required="required" type="text" onfocus="this.type='date'"
                            onmouseover="this.type='date'" onclick="this.type='date'" onblur="this.type='text'"
                            onmouseout="timeFunctionLong(this)">
                        <script>
                            function timeFunctionLong(input) {
                                setTimeout(function() {
                                    input.type = 'text';
                                }, 60000);
                            }
                        </script>
                    </div>


                    <!-- /.form-group -->
                </div>
                <!-- /.col -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Disciplina</label>
                        <select name="mix_id" id="required" class="form-control ">
                            @foreach ($disciplinas as $professor)
                                <option value="{{ $professor->disciplina_id }}">
                                    {{ $professor->disciplina }}
                                </option>
                            @endforeach

                        </select>

                    </div>
                    <!-- /.form-group -->
                    <div class="form-group">
                        <label>Classe/Turma</label>
                        <select id="classe" name="classe" id="required" class="form-control ">
                            @if ($professores->classe_um)
                                <option value="{{ $professores->classe_um }}">
                                    {{ $classes[$professores->classe_um] }}
                                </option>
                            @endif
                            @if ($professores->classe_dois)
                                <option value="{{ $professores->classe_dois }}">
                                    {{ $classes[$professores->classe_dois] }}
                                </option>
                            @endif
                            @if ($professores->classe_tres)
                                <option value="{{ $professores->classe_tres }}">
                                    {{ $classes[$professores->classe_tres] }}
                                </option>
                            @endif
                            @if ($professores->classe_quatro)
                                <option value="{{ $professores->classe_quatro }}">
                                    {{ $classes[$professores->classe_quatro] }}
                                </option>
                            @endif
                            @if ($professores->classe_cinco)
                                <option value="{{ $professores->classe_cinco }}">
                                    {{ $classes[$professores->classe_cinco] }}
                                </option>
                            @endif
                            @if ($professores->classe_seis)
                                <option value="{{ $professores->classe_seis }}">
                                    {{ $classes[$professores->classe_seis] }}
                                </option>
                            @endif

                        </select>
                    </div>

                    <div class="form-group">
                        <label>Liceu</label>
                        <select name="liceu" id="required" class="form-control ">

                            <option value="  {{ Auth::guard('professor')->user()->liceu }}">

                                @if (Auth::guard('professor')->user()->liceu == 1)
                                    Caxito
                                @elseif(Auth::guard('professor')->user()->liceu == 2)
                                    Malanje
                                @elseif(Auth::guard('professor')->user()->liceu == 3)
                                    Ndalatando
                                @elseif(Auth::guard('professor')->user()->liceu == 4)
                                    Ondjiva
                                @endif
                            </option>
                        </select>
                    </div>


                    <!-- /.form-group -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->

            <!-- /.row -->
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button class="btn" id="filtrar">Filtrar</button>
        </div>

    </div>
    <!-- /.card -->

    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title" style="font-weight: bolder; color: red;"> Dados da Turma</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr>

                            <th data-field="id">ID</th>
                            <th data-field="name">Nome</th>

                            <th data-field="complete">Email</th>
                            <th data-field="task">Nota</th>

                        </tr>
                    </thead>
                    <tbody id="example2-body">
                        {{-- @foreach ($estudantes as $estudante)
                            <tr>

                                <td><input type="text" id="estudante_id" required="required"
                                        value="{{ $estudante->id }}" class="form-control  " readonly
                                        name="estudante_id[]" /> </td>
                                <td>{{ $estudante->name }}</td>



                                <td>{{ $estudante->email }}</td>

                                <td> <input type="number" id="quantity" name="nota[]" min="0" max="20"
                                        step="any"></td>

                            </tr>
                        @endforeach --}}
                    </tbody>
                    <tfoot>

                    </tfoot>
                </table>

                <div class="ln_solid"></div>
                <div class=" form-group">
                    <div class="col-form-label col-md-3 col-sm-3 label-align">
                        <button class="btn btn-primary" type="button">Cancelar</button>
                        <button class="btn btn-primary" type="reset">Limpar</button>
                        <button type="submit" class="btn btn-success">Enviar</button>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
    </div>

    </form>

    <br>
    <br>
    <br>
    <br>

@endsection
@section('extrajs')
    <script>
        $(document).ready(function() {
            $('#filtrar').click(function(event) {
                event.preventDefault();
                updateTable();
            });

            $('#classe').on('change', function() {
                updateTable();
            });

            function updateTable() {
                let classe = $('#classe').val();
                let turma = (classe % 2 == 0) ? 2 : 1;
                let liceu = {{ $professores->liceu }};

                let dados = {
                    liceu: liceu,
                    turma: turma,
                    classe: classe
                };
                // console.log(12);
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });


                // Selecione o elemento da tabela onde você deseja construir os dados
                var tabela = $('#example2-body');

                // Limpe a tabela antes de construir os dados
                tabela.empty();
                var loadingIndicator = $('<tr>').append($('<td>', {
                    colspan: '4',
                    class: 'text-center',
                    html: '<i class="fas fa-spinner fa-spin"></i> Carregando...'
                }));
                tabela.append(loadingIndicator);
                $.ajax({
                    url: '/professor/get_students_by_class',
                    type: 'POST',
                    data: dados,
                    success: function(response) {
                        // Capture a resposta JSON e construa a tabela
                        var estudantes = response.estudantes;

                        // Percorra a lista de estudantes e adicione as linhas à tabela
                        // console.log(estudantes);
                        loadingIndicator.remove();
                        estudantes.forEach(function(estudante) {
                            var linha = $('<tr>');
                            // Adicione as células da linha com os dados do estudante
                            // Configuração da primeira coluna com o ID do estudante
                            let colunaId = $('<td>');
                            let inputId = $('<input>', {
                                type: 'text',
                                id: 'estudante_id',
                                required: 'required',
                                value: estudante.id,
                                class: 'form-control',
                                readonly: 'readonly',
                                name: 'estudante_id[]'
                            });
                            colunaId.append(inputId);

                            linha.append(colunaId);
                            // linha.append($('<td>').text(estudante.id));
                            linha.append($('<td>').text(estudante.name));
                            linha.append($('<td>').text(estudante.email));

                            // Crie a célula para a nota com um campo de entrada
                            var colunaNota = $('<td>');
                            var inputNota = $('<input>')
                                .attr('type', 'number')
                                .attr('step', '0.01')
                                .addClass('form-control')
                                .attr('value', '0')
                                .attr('name', 'nota[]');
                            inputNota.on('input', function() {
                                var nota = parseFloat($(this).val());
                                if (isNaN(nota)) {
                                    // Valor inválido, defina como 0
                                    $(this).val('0');
                                } else if (nota < 0) {
                                    // Valor menor que 0, defina como 0
                                    $(this).val('0');
                                } else if (nota > 20) {
                                    // Valor maior que 20, defina como 20
                                    $(this).val('20');
                                }
                            });
                            colunaNota.append(inputNota);
                            linha.append(colunaNota);
                            // Adicione mais células, se necessário

                            // Adicione a linha à tabela
                            tabela.append(linha);
                        });
                    },
                    error: function(xhr) {
                        loadingIndicator.remove();
                        // Manipule os erros ocorridos na requisição
                        console.log(xhr.responseText);
                    }
                });
            }
        });
    </script>
@endsection
