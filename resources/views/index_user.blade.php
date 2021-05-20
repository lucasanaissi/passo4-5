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

    <title>Listagem de usuários</title>
</head>
<body>
<div class="card text-center">
    <div class="card-header bg-primary">
        <ul class="nav nav-tabs card-header-tabs">
            <li class="nav-item">
                <a class="nav-link active" href="{{ route('home') }}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active selected" href="{{ route('user.create') }}"> Cadastrar novo usuário</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active selected"> Lista de usuários</a>
            </li>
        </ul>
    </div>
    <table class="table">
        <tr class="tr">
            <th>ID</th>
            <th>Nome</th>
            <th>E-mail</th>
        </tr>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <a type="button"
                           class="btn btn-warning"
                               onclick="{{ route('user.edit', ['userId' => $user->id]) }}">Editar usuário</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
