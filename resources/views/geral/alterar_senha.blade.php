@extends('layouts.main_go')
@section('title','Alterar Senha')
@section('content')


<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Alteração de Senha</div>

                    <form action="{{ route('geral.alterar_s') }}" method="POST">
                        @csrf
                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @elseif (session('error'))
                                <div class="alert alert-danger" role="alert">
                                    {{ session('error') }}
                                </div>
                            @endif

                            <div class="mb-3">
                                <label for="oldPasswordInput" class="form-label">Senha Antiga</label>
                                <input name="old_password" type="password" class="form-control @error('old_password') is-invalid @enderror" id="oldPasswordInput"
                                    placeholder="Senha Antiga">
                                @error('old_password')
                                    <span class="text-danger">Deve Preecher esse Campo</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="newPasswordInput" class="form-label">Nova Senha</label>
                                <input name="new_password" type="password" class="form-control @error('new_password') is-invalid @enderror" id="newPasswordInput"
                                    placeholder="Nova Senha">
                                @error('new_password')
                                    <span class="text-danger">Erro! A senha deve ter no minimo 8 Letras e Caracteres Especiais (@!#$%)</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="confirmNewPasswordInput" class="form-label">Confirmação da Senha</label>
                                <input name="new_password_confirmation" type="password" class="form-control" id="confirmNewPasswordInput"
                                    placeholder="Confirmação de senha">
                            </div>

                        </div>

                        <div class="card-footer">
                            <button class="btn btn-success">Alterar</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
