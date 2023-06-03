<!DOCTYPE html>
<html lang="pt-br">
<head>
    @include('layouts.head')

    {{-- <link rel="stylesheet" href="/assets/css/lojas.css"> --}}
    <style>
        .row {
            padding: 15px 20px;;
        }

        .pedido {
            display: flex;
            align-items: center;
            padding: 20px;
            background-color: var(--main-color);
        }

        .divName {
            display: flex;
            flex-direction: column;
            font-size: 18px;
            margin-left: 20px;
            font-weight: 700;
            color: white;
        }
    </style>
</head>
<body>
    @include('layouts.navbar')

    <div class="container">
        <div class="row pedidos gap-3">
            @foreach($pedidos as $i => $pedido)
            <a href="/pedidos/{{ $pedido->id }}" style="color: black;">
                <div class="pedido col-12 rounded">
                    <div style="padding: 10px 20px; background-color: white;"><i class="fa-regular fa-clipboard" style="font-size: 50px;"></i></div>
                    <div class="divName">
                        <span>Pedido: {{ $pedido->id }}</span>
                        <span>Produto: {{ $pedido->produto->nome }}</span>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    </div>

    @include('layouts.footer')
</body>
</html>