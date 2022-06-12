@extends('master')
@section('corpo')
    @foreach( $errors->all() as $e)
        {{ $e }} <br/>
    @endforeach
    <div class="container">
    <div class="row justify-content-center">
    <div class="col-md-4">
        <h3>Editar Funcionário</h3>
    <form action="/funcionario/{{$func->id}}" method="post">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" value="{{$func->nome}}" class="form-control"/>
        </div>
        <div class="form-group">
            <label for="sobrenome">Sobrenome</label>
            <input type="text" name="sobrenome" id="sobrenome" value="{{$func->sobrenome}}" class="form-control"/>
        </div>
        <div class="form-group">
            <label for="endereco">Endereco</label>
            <input type="text" name="endereco" id="endereco" value="{{$func->endereco}}" class="form-control"/>
        </div>
        <div class="form-group">
            <label for="dataNascimento">Data Nascimento</label>
            <input type="date" name="dataNascimento" id="dataNascimento" value="{{$func->dataNascimento}}" class="form-control"/>
        </div>

        <div class="form-group">
            <label for="cpf">CPF</label>
            <input type="text" name="cpf" id="cpf" value="{{$func->cpf}}" class="form-control"/>
        </div>

        <div class="form-group">
            <label for="telefone">Telefone</label>
            <input type="number" name="telefone" id="telefone" value="{{$func->telefone}}" class="form-control"/>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="telefone" value="{{$func->email}}" class="form-control"/>
        </div>

        <div class="form-group">
            <input type="submit" value="Alterar" class="btn btn-primary" style="Float:left; border:2px solid">
        </div>
        <div>
            <a href="/funcionario" class="btn btn-primary" style="Float:left; border:2px solid">Voltar</a>
        </div>
    </form>
    </div>
    </div>
    </div>
@endsection