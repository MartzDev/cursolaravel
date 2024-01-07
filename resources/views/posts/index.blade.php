<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>index</title>
</head>

<body>
    <h1>
        @if ($nombre && $apellido)
            vista index {{ $post }}{{ $nombre }} {{ $apellido }}
        @else
            vista index {{ $post }}
        @endif

    </h1>
</body>

</html>
