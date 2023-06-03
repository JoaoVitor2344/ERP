<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Lojas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LojasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Lojas::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'id_fornecedor' => 'required',
            'nome' => 'required',
            'imagem' => 'required'
        ]);

        if ($validation->fails()) {
            return response()->json($validation->errors(), 400);
        }

        $loja = Lojas::create($request->all());

        return response()->json($loja, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $loja = Lojas::find($id);
        return response()->json($loja, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validation = Validator::make($request->all(), [
            'id_fornecedor' => 'required',
            'nome' => 'required',
            'imagem' => 'required'
        ]);

        if ($validation->fails()) {
            return response()->json($validation->errors(), 400);
        }

        $loja = Lojas::find($id);
        $loja->update($request->all());

        return response()->json($loja, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $loja = Lojas::find($id);
        $loja->delete();

        return response()->json(null, 204);
    }
}
