<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles de la Asignatura</title>
</head>
<body>
    @if ($asignatura)
        <h1>{{ $asignatura['nombre']}}</h1>
        <p>Súper Poder: {{ $asignatura['superPoder']}}</p>
    @else
        <p>Asignatura no encontrada</p>
    @endif
</body>
</html>