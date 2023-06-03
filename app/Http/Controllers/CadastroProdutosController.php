<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class CadastroProdutosController extends Controller
{
    public function index()
    {
        return view("cadastro-produto");
    }
    
    public function cadastro(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'nome' => 'required|min:0|max:255',
            'preco'      => 'required|min:0',
            'descricao'  => 'required|min:3|max:128',
            
        ]);
        
        if ($validation->fails()) {
            return redirect()->back()->withErrors($validation);
            
        }

        // Converter os dados em formato JSON
        $jsonData = json_encode($request->all());
            
        // Inicializar uma sessão cURL
        $curl = curl_init();
        
        // Definir a URL de destino
        $url = "https://4815-2804-7f4-538e-b2b3-db1-8d78-c05e-8fa.ngrok-free.app/api/produtos";
        
        // Definir as opções da solicitação cURL
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $jsonData);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Content-Length: ' . strlen($jsonData)
        ));
        
        // Enviar a solicitação cURL e obter a resposta
        $response = curl_exec($curl);
        
        // Verificar se ocorreu algum erro na solicitação
        if (curl_errno($curl)) {
            $error = curl_error($curl);
            // Tratar o erro de acordo com a sua necessidade
            // Por exemplo, exibir uma mensagem de erro ou registrar em um arquivo de log
            die("Erro na solicitação cURL: " . $error);
        }
        
        // Fechar a sessão cURL
        curl_close($curl);

        print_r($response);
    }
}