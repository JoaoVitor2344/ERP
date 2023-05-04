<!DOCTYPE html>
<html lang="pt-br">
<head>
    @include('layouts.head')

    <link rel="stylesheet" href="assets/css/atendimentos.css">
</head>
<body>
    @include('layouts.navbar')
    <div class="container">
        <div style="padding: 30px; border: 20px solid rgb(5,52,78);"><img class="imagem" src="/assets/image/mapa.png"></img></div>  
    </div>
    <p>Pedido # <br>
    Status : A caminho <br>
    N° do Pedido : #12345 <br>
    Produto : Produto xyz <br>
    Quantidade : 001 <br>
    Valor : R$ 99,99 <br>

    @include('layouts.footer')
</body>
</html>