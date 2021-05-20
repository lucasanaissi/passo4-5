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
    <title>Home - CRUD</title>
</head>
<body>
<div class="card text-center">
    <div class="card-header bg-primary">
        <ul class="nav nav-tabs card-header-tabs">
            <li class="nav-item">
                <a class="nav-link active" href="">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="{{ route('crudUser') }}"> CRUD - User</a>
            </li>
        </ul>
    </div>
    <div class="card-body">
        <h5 class="card-title">Welcome to my first CRUD home page</h5>
        <img src="{{ asset('img/CRUD.png') }}">
    </div>
</div>

</body>
</html>