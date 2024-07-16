<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Movies')</title>
    <style>
        /* Estilos personalizados */
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }
        .navbar {
            background-color: #03a6a6;
            color: #fff;
        }
        .navbar-brand {
            color: #fff;
        }
        .nav-link {
            color: #fff;
            text-decoration: none;
        }
        .container {
            margin-top: 20px;
        }
        .btn {
            background-color: #03a6a6;
            color: #fff;
        }
        .btn:hover {
            background-color: #028282;
        }
        .table {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">App de Películas</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">Página principal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/movies') }}">Películas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/movies/create') }}">Agregar película</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
