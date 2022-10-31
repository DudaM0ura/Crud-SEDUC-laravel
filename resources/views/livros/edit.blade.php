@extends('layout.default')
@section('content')
    <h2>Editar Livro</h2>
    <form action="{{route('update.livro', $livro->id)}}" method="post">
        @csrf
        @method('put')
        <div class="form-floating mb-3">
            <input type="text" class="form-control mb-3" name="titulo" placeholder="titulo" value="{{$livro->titulo}}">
            <label for="floatingInput">Titulo</label>
        </div>
        <div class="form-floating mb-3">
            <input type="integer" class="form-control mb-3" name="ano" placeholder="ano" value="{{$livro->ano}}">
            <label for="floatingPassword">Ano</label>
        </div>
        <button type="submit" class="btn btn-outline-primary">Salvar</button>
    </form>
    
@endsection