@extends('master')
@section('corpo')
    <h3>Funcionários</h3>
    <table class="table table-striped">
    <tr><th>Nome</th><th>Sobrenome</th><th>Endereço</th><th>Data de Nascimento</th>
    <th>CPF</th><th>Telefone<th><th>E-mail</th></tr>
    @foreach($funcs as $f)
      <tr>
        <td>{{ $f->nome  }}</td>
        <td>{{ $f->sobrenome  }}</td>
        <td>{{ $f->endereco }}</td>
        <td>{{ $f->dataNascimento }}</td>
        <td>{{ $f->cpf  }}</td>
        <td>{{ $f->telefone  }}</td>
        <td>{{ $f->email  }}</td>
        <td>
        <a href="/funcionario/{{ $f->id }}">Excluir</a>
        <a href="/funcionario/{{ $f->id }}/edit">Alterar</a>
        </td>
      </tr>
    @endforeach
    </table>
    <a href="/funcionario/create" class="btn btn-primary">Novo Funcionário</a>
@endsection