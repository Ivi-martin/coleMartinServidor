<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asignaturas de Martín</title>
</head>
<body>
    <h1>Asignaturas de Martín</h1>
    <h2>2º de Primaria</h2>
    <ul>
        @foreach($asignaturas as $asignatura)
            <li>{{ $asignatura }}</li>
        @endforeach 
</body>
</html>