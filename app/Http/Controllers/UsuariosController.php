<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {

        return response('<h1>index de usuario</h1>');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        return response('<h1>formulario de creacion de usuarios</h1>');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): Response
    {
        return response('<h1>formulario de creacion de usuarios</h1>' . $id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
