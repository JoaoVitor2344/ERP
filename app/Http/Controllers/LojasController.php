<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class LojasController extends Controller
{
    public function index()
    {
        $lojas = requestGET("lojas");
        return view('lojas.index', ['lojas' => $lojas]);
    }
    
    public function show(string $id)
    {
        $produtos = requestGET("produtos/$id");
        return view('lojas.show', ['produtos' => $produtos]);
    }

    public function cadastro(Request $request) {
        
        $validation = Validator::make($request->all(), [
            'id_fornecedor' => 'bigInteger',
            'name' => 'required|min:0|max:255',
        ]);
        
        // Converter os dados em formato JSON
        $jsonData = json_encode($request->all());
        
        // Inicializar uma sessão cURL
        $curl = curl_init();
        
        // Definir a URL de destino
        $url = "https://eedc-2804-7f4-5492-c1cf-5411-1d0-2543-8bf0.ngrok-free.app/api/produtos";
        
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

    }
}
