@extends('layout.default')
@section('content')
<h2>Alunos</h2>
<input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">
<table class="table table-striped">
    <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nome</th>
          <th scope="col">Data de Nascimento</th>
          <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($alunos as $aluno)
        <tr id="tr-aluno-{{$aluno->id}}">
            <td>{{$aluno->id}}</td>
            <td>{{$aluno->nome}}</td>
            <td>{{$aluno->nascimento}}</td>
            <td>
                <a href="{{route('index.livro', $aluno->id)}}" class="btn btn-outline-primary">Livros do Aluno</a>
            </td>
            <td>
                <a href="{{route('edit.aluno', $aluno->id)}}" class="btn btn-outline-secondary">Editar</a>
                <a onclick="DeletarAluno({{$aluno->id}})" class="btn btn-outline-danger">Deletar</a>
            </td>
        </tr>
        @endforeach    
    </tbody>

</table>
    
@endsection