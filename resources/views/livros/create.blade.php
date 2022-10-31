@extends('layout.default')
@section('content')
    <h2>Cadastrar livro: </h2>
    <form action="{{route('store.livro')}}" method="post">
        <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">
        <div class="form-floating mb-3">
            <input type="text" class="form-control mb-3" name="nome" value="{{$aluno->nome}}" readonly>
            <input type="hidden" class="form-control mb-3" name="id_aluno" value="{{$aluno->id}}">
            <label for="floatingInput"></label></label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control mb-3" name="titulo" placeholder="titulo">
            <label for="floatingInput">Titulo</label>
        </div>
        <div class="form-floating mb-3">
            <input type="integer" class="form-control mb-3" name="ano" placeholder="ano">
            <label for="floatingPassword">Ano</label>
        </div>
        <button type="submit" class="btn btn-outline-primary">Cadastrar</button>
    </form>
    
@endsection