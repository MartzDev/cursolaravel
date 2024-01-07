<?php

namespace App\View\Composers;

use Illuminate\View\View;

class PostComposer
{

    private ?string $nombre = 'nombre';
    private ?string $apellido = 'apellido';

    public function __construct()
    {
    }

    public function compose(View $view): void
    {
        $view->with('post', 'post general a todas las vistas post')->with('nombre', $this->nombre)->with('apellido', $this->apellido);
    }
}
