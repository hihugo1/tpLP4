@extends('master')
@section('corpo')
    @foreach( $errors->all() as $e)
        {{ $e }} <br/>
    @endforeach
    <div class="center">
    <div class="row justify-content-center">
    <div class="col-md-4">
        <h3>Cadastre um novo funcionário</h3>
    <form action="/funcionario" method="post">
        @csrf
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" class="form-control" />
        </div>
        <div class="form-group">
            <label for="sobrenome">Sobrenome</label>
            <input type="text" name="sobrenome" id="sobrenome" class="form-control" />
        </div>
        <div class="form-group">
            <label for="endereco">Endereco</label>
            <input type="text" name="endereco" id="endereco" class="form-control"/>
        </div>
        <div class="form-group">
            <label for="dataNascimento">Data</label>
            <input type="date" name="dataNascimento" id="dataNascimento" class="form-control"/>
        </div>
        <div class="form-group">
            <label for="cpf">CPF</label>
            <input type="text" name="cpf" id="cpf" placeholder="000.000.000-00" class="form-control" />
        </div>
        <div class="form-group">
            <label for="telefone">Telefone</label>
            <input type="text" name="telefone" id="telefone" placeholder="(00) 00000-0000" class="form-control" />
        </div>
        <div class="form-group">
            <label for="nome">Email</label>
            <input type="email" name="email" id="email" placeholder="meuemail@email.com" class="form-control" />
        </div>
        <div class="form-group">
            <input type="submit" value="Criar" class="btn btn-primary" style="Float:left; border:2px solid">
        </div>
        <div>
            <a href="/funcionario" class="btn btn-primary" style="Float:left; border:2px solid">Voltar</a>
        </div>
    </form>
    </div>
    </div>
    </div>
    
@endsection