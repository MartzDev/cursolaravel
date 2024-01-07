<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>index</title>
</head>

<body>

    @php

    @endphp



    <h1>index: {{ $data }} {{ $cadena }}</h1>
    @dump($array)
    <p class="">asasdsdasdsd</p>
    <h2>directivas de blade</h2>

    @php
        $variable_uno = null;
        $variable_dos = null;
        $variable_tres = 2;
        $esta_definido;
        $record;

        $dias_semana = 3;

        $array_vacio = [];
    @endphp

    @if ($variable_uno)
        <p>la variable 1 tiene como valor {{ $variable_uno }}</p>
    @endif

    @if ($variable_uno && $variable_dos)
        <p>la variable 1 y 2 tiene como valor:</p>
        <ul>
            <li>{{ $variable_uno }}</li>
            <li>{{ $variable_dos }}</li>
        </ul>
    @else
        <p>las variables 1 y 2 no estan definidas</p>
    @endif

    @unless ($variable_tres === null)
        <p>la variable 3 no es nulo</p>
    @endunless

    @isset($esta_definido)
        <p>la variable esta definido y no es nulo</p>
    @else
        <p>la variable no esta definido</p>
    @endisset

    @empty($record)
        <p>la variable esta vacio</p>
    @endempty

    @env('local')
    <p>en local</p>
    @endenv

    @production
        <p>en produccion</p>
    @endproduction

    @env('staging')
    <p>iniciando</p>
    @endenv

    @auth
        <p>autenticado</p>
    @endauth

    {{-- @auth('admin')
        <p>autenticado como admin</p>
    @endauth --}}

    @guest
        <p>invitado</p>
    @endguest

    {{-- @guest('admin')
        <p>no esta autenticado como admin</p>
    @endguest --}}

    @switch($dias_semana)
        @case(1)
            <p>lunes</p>
        @break

        @case(2)
            <p>martes</p>
        @break

        @case(3)
            <p>miercoles</p>
        @break

        @case(4)
            <p>jueves</p>
        @break

        @case(5)
            <p>viernes</p>
        @break

        @case(6)
            <p>sabado</p>
        @break

        @case(7)
            <p>domingo</p>
        @break

        @default
            <p>el dia no existe</p>
    @endswitch
    <ul>
        @for ($i = 0; $i < 10; $i++)
            <li>{{ $i }}</li>
        @endfor
    </ul>


    <ul>
        @foreach ($array as $item)
            <li>{{ $item['id'] }}</li>
            <li>{{ $item['titulo'] }}</li>
        @endforeach
    </ul>

    <ul>
        @forelse ($array_vacio as $item)
            <li>{{ $item }}</li>
        @empty
            <p>no hay datos por mostrar</p>
        @endforelse
    </ul>


    <ul>
        @foreach ($array as $item)
            <li>indice: {{ $loop->index }} - numero de la iteracion: {{ $loop->iteration }} - iteracion restante:
                {{ $loop->remaining }} - total de items en la matriz: {{ $loop->count }} - @if ($loop->first)
                    primera iteracion
                @endif
                @if ($loop->last)
                    ultima iteracion
                @endif
                - nivel de anidamiento{{ $loop->depth }}

                @foreach ($item['tag'] as $tag)
            <li>
                @if ($loop->parent->first)
                    tag: {{ $tag }} - del padre {{ $loop->parent->iteration }}
                    - nivel de anidamiento{{ $loop->depth }}
                @endif

                @if ($loop->parent->last)
                    tag: {{ $tag }} - del padre {{ $loop->parent->iteration }}
                @endif
            </li>
        @endforeach
        </li>
        @endforeach
    </ul>

    <script>
        var usuario = 'DevBuster';

        // var manual = <?php echo json_encode($array); ?>;
        // console.log(manual);

        var directiva = {{ Illuminate\Support\Js::from($array) }};
        console.log(directiva);

        var directiva_simplificada = {{ Js::from($array) }};
        console.log(directiva_simplificada);

        var json = @json($array);
        console.log(json);
    </script>
</body>

</html>
