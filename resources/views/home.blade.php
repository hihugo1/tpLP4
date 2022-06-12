@extends('layouts.app')

@section('content')
<div class="container ">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="d-flex flex-column">
                        {{ __('Bem vindo de volta!')  }}
                        <strong>{{Auth::user()->name}}</strong>
                            {{ __('Esse é o sistema de cadastro de Funcionários 4.0!')  }}
                        <a href='/funcionario'>Visualizar Funcionários</a>
                        <a href='/funcionario/create'>Cadastrar Funcionários</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection