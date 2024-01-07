<?php

namespace App\View\Creators;

use Illuminate\View\View;

class PostCreator
{
    public function __construct()
    {
        //
    }

    public function create(View $view): void
    {
        $view->with('creator', 'postcreator');
    }
}
