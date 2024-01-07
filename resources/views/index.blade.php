<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>blade - directiva class y style</title>

    <style>
        .bg-red {
            color: red
        }
    </style>
</head>

<body>
    @php
        $ruta = Route::current();
        $hasError = false;
        $isActive = $ruta == 'otros' ? true : false;
    @endphp

    @dump($ruta->uri)
    @dump($isActive)
    @dump($hasError)

    <span @class([
        'p-4',
        'font-bold' => $isActive,
        'text-gray-500' => !$isActive,
        'bg-red' => $hasError,
    ])>clase</span>

    <form action="">
        <div @style('margin-bottom: 10px')>
            <label for="name">name</label>
            <input type="text" id="name" name="name">
        </div>

        <div @style('margin-bottom: 10px')>
            <label for="ciudad">ciudad</label>
            <select name="ciudad" id="ciudad">
                <option @selected(true) @disabled(true) value="1">
                    {{ Str::upper(__('seleccione una opción')) }}</option>
                <option value="1" @selected(true)>1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select>
        </div>

    </form>
</body>

</html>
