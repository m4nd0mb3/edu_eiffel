@extends('layouts.main_qr')
@section('title','Informações')
@section('content')


<div class="container">




<h1 style=" text-align: center; color: red;"> Informações do Candidato</h1>

<div class="container">

    @if(count($estudantes)>0)
        @foreach($estudantes as $funcionario)

        <div class="card">
            <div class="card-header">
                {{ $funcionario->name}}
            </div>

            <div class="card-body">
            <li>Nome Completo: {{ $funcionario->name}} {{ $funcionario->second_name}}</li>
            <li>Idade: {{ $funcionario->idade}}</li>
            <li>Morada: {{ $funcionario->bairro}}</li>
            <li>Telefone: {{ $funcionario->numero}}</li>
            <li> BI: {{ $funcionario->bi}}</li>
            <li>
              @if($funcionario->liceu== 1)
             LICEU EIFFEL DE CAXITO
            @elseif($funcionario->liceu == 2)
            LICEU EIFFEL DE MALANJE
          @elseif($funcionario->liceu == 3)
          LICEU EIFFEL DE NDALATANDO
     
          @elseif($funcionario->liceu == 4)
          LICEU EIFFEL DE ONDJIVA
    @endif

         </li>
            <li>{{ $funcionario->Provincia}}</li>
            <li>{{ $funcionario->data_nasc}}</li>
            <li>{{ $funcionario->email}}</li>
            
       
            <p>
            {!! QrCode::size(100)->generate( " Candidado $funcionario->name
         
         Fale Conosco
         926 04 89 39 
         
         ") !!}
            </p>

            </div>
        </div>
        @endforeach
    @endif

</div>

@endsection
