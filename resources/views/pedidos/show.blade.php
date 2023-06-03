<!DOCTYPE html>
<html lang="pt-br">
<head>
    @include('layouts.head')

    <link rel="stylesheet" href="assets/css/produto.css">

    <style>
        .description {
            display: flex;
            flex-direction: column;
            font-size: 20px;
            font-weight: 700;
        }

        .divImg {
            padding: 15px;
            background-color: var(--main-color3);
        }
    </style>
</head>
<body>
    @include('layouts.navbar')

    <div class="container">
        <div class="divImg rounded"><img class="img-fluid" src="/assets/image/mapa.png" alt=""></div>
        <div class="description mt-3">
            <span>Pedido #{{ $pedido->id }}</span>
            <span>Status: {{ $pedido->status }}</span>
            <span>Produto: <a href="/produtos/{{ $pedido->produto->id }}">{{ $pedido->produto->nome }}</a></span>
            <span>Valor: R$ {{ $pedido->produto->preco }}</span>
        </div>
        <div class="divBtn"><button class="btn-principal bg-success bg-gradient mt-3">Contactar o Vendedor</button></div>
        <div class="divBtn"><button class="btn-principal bg-danger bg-gradient mt-3">Cancelar</button></div>
    </div>

    @include('layouts.footer')

    <script>
        $(function() {
            $(document).ready(function() {
                let height = $("footer").css("height");
                height = parseInt(height.replace("px", "")) + 20;

                let pe = $(".container").css("padding-right");
                let ps = $(".container").css("padding-left");

                $(".divBtn").css("bottom", height+"px");
                $(".divBtn").css("right", pe);
                $(".divBtn").css("left", ps);

                $("#btn-pricipal").click(function() {
                    $("form").submit();
                });
            });
        }, { passive: true });
    </script>
</body>
</html>