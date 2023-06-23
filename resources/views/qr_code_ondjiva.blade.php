@extends('layouts.main_qr')
@section('title','Todos os Qr')
@section('content')


<div class="container">

    @if(count($professores)>0)
        @foreach($professores as $professor)

        <div class="card">
            <div class="card-header">
                {{ $professor->name}}
            </div>

            <div class="card-body">

         {!! QrCode::size(100)->generate( " Professor $professor->name
    Liceu Eiffel de Ondjiva
    Fale Conosco
    265 351 020 ") !!}

            </div>
        </div>
        @endforeach
    @endif

</div>


<h1 style=" text-align: center; color: red;"> Funcionarios</h1>

<div class="container">

    @if(count($funcionarios)>0)
        @foreach($funcionarios as $funcionario)

        <div class="card">
            <div class="card-header">
                {{ $funcionario->name}}
            </div>

            <div class="card-body">

         {!! QrCode::size(100)->generate( " Funcionario $funcionario->name
    Liceu Eiffel de Ondjiva
    Fale Conosco
    265 351 020 ") !!}

            </div>
        </div>
        @endforeach
    @endif

</div>

<h1 style=" text-align: center; color: red;"> Funcionarios Rede</h1>

<div class="container">

    @if(count($funcionarioss)>0)
        @foreach($funcionarioss as $funcionario)

        <div class="card">
            <div class="card-header">
                {{ $funcionario->name}}
            </div>

            <div class="card-body">

         {!! QrCode::size(100)->generate( " Funcionario $funcionario->name
    Coordenação Nacional da Rede Eiffel
    Fale Conosco
    926 04 89 39 ") !!}

            </div>
        </div>
        @endforeach
    @endif

</div>



<h1 style=" text-align: center; color: red;"> Secretarios Rede</h1>

<div class="container">

    @if(count($secretarios)>0)
        @foreach($secretarios as $funcionario)

        <div class="card">
            <div class="card-header">
                {{ $funcionario->name}}
            </div>

            <div class="card-body">

         {!! QrCode::size(100)->generate( " Secretário $funcionario->name
         Liceu Eiffel de Ondjiva
         Fale Conosco
         265 351 020 ") !!}

            </div>
        </div>
        @endforeach
    @endif

</div>




<h1 style=" text-align: center; color: red;"> Ped Rede</h1>

<div class="container">

    @if(count($pedagogicos)>0)
        @foreach($pedagogicos as $funcionario)

        <div class="card">
            <div class="card-header">
                {{ $funcionario->name}}
            </div>

            <div class="card-body">

         {!! QrCode::size(100)->generate( " Sub-Director Pedagógico $funcionario->name
         Liceu Eiffel de Ondjiva
         Fale Conosco
         265 351 020 ") !!}

            </div>
        </div>
        @endforeach
    @endif

</div>




<h1 style=" text-align: center; color: red;"> g Rede</h1>

<div class="container">

    @if(count($gerals)>0)
        @foreach($gerals as $funcionario)

        <div class="card">
            <div class="card-header">
                {{ $funcionario->name}}
            </div>

            <div class="card-body">

         {!! QrCode::size(100)->generate( "Directora Geral $funcionario->name
         Liceu Eiffel de Ondjiva
         Fale Conosco
         265 351 020 ") !!}

            </div>
        </div>
        @endforeach
    @endif

</div>




<h1 style=" text-align: center; color: red;"> A Rede</h1>

<div class="container">

    @if(count($administrativos)>0)
        @foreach($administrativos as $funcionario)

        <div class="card">
            <div class="card-header">
                {{ $funcionario->name}}
            </div>

            <div class="card-body">

         {!! QrCode::size(100)->generate( " Sub-Directora Administrativa $funcionario->name
         Liceu Eiffel de Ondjiva
         Fale Conosco
         265 351 020 ") !!}

            </div>
        </div>
        @endforeach
    @endif

</div>


<h1 style=" text-align: center; color: red;"> A Rede</h1>

<div class="container">

    @if(count($engs)>0)
        @foreach($engs as $funcionario)

        <div class="card">
            <div class="card-header">
                {{ $funcionario->name}}
            </div>

            <div class="card-body">

         {!! QrCode::size(100)->generate( " Engenheiro Informático $funcionario->name
         Coordenação Nacional da Rede Eiffel
         Fale Conosco
         926 04 89 39 ") !!}

            </div>
        </div>
        @endforeach
    @endif

</div>

@endsection
