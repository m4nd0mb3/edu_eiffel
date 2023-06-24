@extends('layouts.main_po')
@section('title', 'Boletins')
@section('content')

    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title" style=" font-weight:bolder ;">Cardenetas Validadas</h3>

                {{-- <div class="card-tools">
           

              <a class="btn btn-app bg-success" href="{{ route('professor.turmas') }}" >
                <i class="fas fa-edit"></i> Enviar Novo  Boletim
              </a>
          </div> --}}


            </div>
            <div class="card-body p-0">

                <table class="table table-striped projects">
                    <thead>
                        <tr>
                            <th style="color: red;">Trimestre</th>
                            <th style="color: red;">Número de provas</th>
                            <th style="color: red;">Disciplina</th>
                            <th style="color: red;">Classe</th>
                            <th style="color: green; text-align:center;">Ações</th>


                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cardenetas as $cardeneta)
                            <tr>



                                <td>{{ $cardeneta->trimestre_id }}</td>
                                <td>{{ $cardeneta->total_provas }}</td>
                                <td>{{ $cardeneta->disciplina }}</td>
                                <td>
                                    @if ($cardeneta->classe == 1)
                                        10 A
                                    @elseif($cardeneta->classe == 2)
                                        10 B
                                    @elseif($cardeneta->classe == 3)
                                        11 A
                                    @elseif($cardeneta->classe == 4)
                                        11 B
                                    @elseif($cardeneta->classe == 5)
                                        12 A
                                    @elseif($cardeneta->classe == 6)
                                        12 B
                                    @elseif($cardeneta->classe == 7)
                                        -
                                    @endif
                                </td>

                                <td class="project-actions text-center">
                                    {{-- <a class="btn btn-primary btn-sm" href="/professor/ver_info_nota_professor_validada/{{Auth::guard('professor')->user()->id}}/{{ $prova->created_at}}">
                <i class="fa-solid fa-eye"></i>
                </i>
                Ver
            </a> --}}
                                    <div class="dropdown">
                                        <button class="btn btn-primary dropdown-toggle" type="button"
                                            data-toggle="dropdown">Ações
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a target="blank" href="/professor/imprimir_cardeneta/{{$cardeneta->liceu}}/{{$cardeneta->mix_id}}/{{$cardeneta->classe}}/{{$cardeneta->trimestre_id}}"> <i class="fa-solid fa-eye"></i> Ver Caderneta</a></li>
                                        </ul>
                                    </div>




                                </td>



                            </tr>
                        @endforeach



                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </section>
    <br>
    <br>
    <br>
    <br>
    <br>
@endsection
