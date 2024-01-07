<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PostController extends Controller
{
    public function index(): View
    {
        return view('posts.index');
    }

    public function create(): View
    {
        return view('posts.create');
    }

    public function store(): void
    {
        //
    }

    public function show(): View
    {
        return view('posts.show');
    }

    public function edit($id): View
    {
        return view('posts.edit');
    }

    public function update(): void
    {
        //
    }

    public function delete(): void
    {
        //
    }
}
