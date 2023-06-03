<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Endereco;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EnderecosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Endereco::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'id_cliente_fornecedor' => 'required',
            'cep' => 'required',
            'rua' => 'required',
            'bairro' => 'required',
            'cidade' => 'required',
            'estado' => 'required',
            'complemento' => 'required'
        ]);

        if ($validation->fails()) {
            return response()->json($validation->errors(), 400);
        }

        $endereco = Endereco::create($request->all());

        return response()->json($endereco, 201);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validation = Validator::make($request->all(), [
            'id_cliente_fornecedor' => 'required',
            'cep' => 'required',
            'rua' => 'required',
            'bairro' => 'required',
            'cidade' => 'required',
            'estado' => 'required',
            'complemento' => 'required'
        ]);

        if ($validation->fails()) {
            return response()->json($validation->errors(), 400);
        }

        $endereco = Endereco::find($id);
        $endereco->update($request->all());

        return response()->json($endereco, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $endereco = Endereco::find($id);
        $endereco->delete();

        return response()->json(null, 204);
    }
}
