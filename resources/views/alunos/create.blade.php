@extends('layout.default')
@section('content')
    <h2>Cadastrar Aluno</h2>
    <form action="{{route('store.aluno')}}" method="post">
        <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">
        <div class="form-floating mb-3">
            <input type="text" class="form-control mb-3" name="nome" placeholder="nome">
            <label for="floatingInput">Nome</label>
        </div>
        <div class="form-floating mb-3">
            <input type="date" class="form-control mb-3" name="nascimento" placeholder="nascimento">
            <label for="floatingInput">Data de Nascimento</label>
        </div>
        <button type="submit" class="btn btn-outline-primary">Cadastrar</button>
    </form>
@endsection