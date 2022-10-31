<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <title>Biblioteca</title>
</head>
<body>
    <div class="container content-center">
        <ul class="nav nav-pills nav-fill">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{route('index.aluno')}}">Home - Alunos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('create.aluno')}}">Cadastrar Aluno</a>
            </li>
        </ul>
    </div>
    <div class="container">
        @if(session('message'))
        <div class="alert alert-success" role="alert">
            {{session('message')}}
        </div>
    @endif
    </div>
    <div class="container">
        @yield('content')
    </div>
    <script type="text/javascript" src="{{asset('delete.js')}}"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>