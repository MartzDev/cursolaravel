<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index()
    {
        $array = [
            [
                'id' => 1,
                'titulo' => '<h1>SAO</h1>',
                'tag' => [1, 2, 3],
            ],
            [
                'id' => 2,
                'titulo' => 'LMFAO',
                'tag' => [1, 2, 3],
            ],
            [
                'id' => 3,
                'titulo' => 'LOL',
                'tag' => [1, 2, 3],
            ]
        ];

        if (view()->exists('homes.index')) {
            $data = 'data';
            return view('homes.index', ['data' => $data, 'array' => $array]);
        } else {
            return response('no existe la vista');
        }
    }

    public function create(): View
    {
        return view('homes.create');
    }

    public function store(Request $request)
    {
        return view();
    }

    public function show(string|int $home)
    {
        $c = 'hola mundo';
        return view('homes.show', compact('home', 'c'));
    }

    public function edit(string|int $id)
    {
        return view('homes.edit')->with('id', 123)->with('foo', 'bar');
    }

    public function update(Request $request, int $id)
    {
        return 'actualizar recurso: ' . $id;
    }

    public function delete(int $id)
    {
        return 'eliminar recurso: ' . $id;
    }
}
