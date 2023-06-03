<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pedidos = requestGET("pedidos");
        $produtos = requestGET("produtos");

        foreach($pedidos as $pedido) {
            foreach($produtos as $produto) {
                if($pedido->id_produto == $produto->id) {
                    $pedido->produto = $produto;
                }
            }
        }

        return view("pedidos.index", compact("pedidos"));
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
        $pedido = requestGET("pedidos/{$id}");
        $produto = requestGET("produtos/{$pedido->id_produto}");

        $pedido->produto = $produto;
        $pedido->produto = $pedido->produto[0];

        return view("pedidos.show", compact("pedido"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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
