<?php

namespace App\Providers;

use App\View\Composers\PostComposer;
use App\View\Creators\PostCreator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServicesProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::share('cadena', 'esto es un dato global a todas las vistas');
        View::composer('posts.*', PostComposer::class);
        View::creator('homes.*', PostCreator::class);
    }
}
