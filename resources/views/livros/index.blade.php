@extends('layout.default')
@section('content')
    <table class="table caption-top">
        <h2>Livros do Aluno:</h2>
        <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Titulo</th>
            <th scope="col">Ano</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
            @foreach ($livros as $livro)
            <tr id="tr-livro-{{$livro->id}}">
                <th>{{$livro->id}}</th>
                <td>{{$livro->titulo}}</td>
                <td>{{$livro->ano}}</td>
                <td>
                    <a href="{{route('edit.livro', $livro->id)}}" class="btn btn-outline-secondary">Editar</a>
                    <a onclick="DeletarLivro({{$livro->id}})" class="btn btn-outline-danger">Excluir</a>
                </td>
            </tr>
            @endforeach
        </tbody>
        <a href="{{route('create.livro', $aluno->id)}}" class="btn btn-outline-primary">Adicionar Livro</a>
      </table>
@endsection