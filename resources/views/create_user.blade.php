<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link rel="stylesheet"
          href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
          crossorigin="anonymous">

    <!-- Fonts -->
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}"
          rel="stylesheet">

    <title>CRUD User</title>
</head>
<body>
<div class="card text-center">
    <div class="card-header bg-primary">
        <ul class="nav nav-tabs card-header-tabs">
            <li class="nav-item">
                <a class="nav-link active" href="{{ route('home') }}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active selected"> Cadastrar novo usuário</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active selected" href="{{ route('user.index') }}"> Lista de usuários</a>
            </li>
        </ul>
    </div>
    <div class="card-body">
        <h5 class="card-title">Insira os dados do usuário</h5>
        <form action="{{ route('user.store') }}" method="post">
            @csrf
            <div class="row">
                <div class="form-group col-6">
                    <label for="nome"><strong>Nome</strong></label>
                    <input type="text"
                           class="form-control"
                           id="name"
                           name="name">
                </div>
                <div class="form-group col-6">
                    <label for="email"><strong>E-mail</strong></label>
                    <input type="email"
                           class="form-control"
                           id="email"
                           name="email">
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <button type="submit"
                            class="buttonSubmit btn text-center bg-success"
                            onclick="">Criar usuário</button>
                </div>
            </div>
        </form>
    </div>
</div>
</body>
</html>
