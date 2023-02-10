<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    @livewireStyles
</head>
<body class="bg-light">

    <div class="container shadow bg-light">
        <div class="col-sm-12">
            <h1>Tutorial Yt</h1>
        </div>

        <div class="col-sm-12">
            <a href="/" class="btn btn-link">Inicio</a>
            <a href="{{ route('tarea.create') }}" class="btn btn-link">Crear nueva Tarea</a>
            <a href="{{ route('tarea.index') }}" class="btn btn-link">Listar tareas</a>
        </div>
        <div class="">
            @yield('contenido')
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    @livewireScripts
</body>
</html>
