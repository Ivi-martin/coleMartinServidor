<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $titulo }}</title>
</head>
<body>
    <h1>{{ $titulo }}</h1>
    <p>Bienvenido al cole de Martín</p>
    <a href="{{ route('listaAsig') }}">Mostrar listado de asignaturas</a>
</body>
</html>