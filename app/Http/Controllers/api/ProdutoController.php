<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Produto::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $produto = Produto::create($request->all());
        // return response()->json($produto, 201);

        return $request->all();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $produto = Produto::find($id);

        if (!$produto) {
            return response()->json([
                'message' => 'Produto não encontrado'
            ], 404);
        }

        $validation = Validator::make($request->all(), [
            'id_loja' => 'required',
            'nome' => 'required',
            'descricao' => 'required',
            'imagem' => 'required',
            'preco' => 'required'
        ]);

        if ($validation->fails()) {
            return response()->json($validation->errors(), 400);
        }

        $produto->update($request->all());

        return response()->json($produto, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $produto = Produto::find($id);
        
    }
}
