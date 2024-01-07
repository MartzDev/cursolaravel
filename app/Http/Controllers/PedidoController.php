<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PedidoController extends Controller
{
    public function index(): Response
    {
        return response('metodo index del pedido');
    }

    public function create(): Response
    {
        return response('metodo create del pedido');
    }

    public function store(): Response
    {
        return response('metodo store del pedido');
    }

    public function show($id): Response
    {
        return response('metodo show del pedido' . $id);
    }

    public function edit($id): Response
    {
        return response('metodo edit del pedido' . $id);
    }

    public function update($id): Response
    {
        return response('metodo update del pedido' . $id);
    }

    public function delete($id): Response
    {
        return response('metodo delete del pedido' . $id);
    }
}
