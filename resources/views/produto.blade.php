<!DOCTYPE html>
<html lang="pt-br">
<head>
    @include('layouts.head')

    <link rel="stylesheet" href="assets/css/produto.css">
</head>
<body>
    @include('layouts.navbar')

    <div class="container">
        <div class="divImg rounded"><img src="/uploads/img/produtos/{{ $produto->imagem }}" alt=""></div>
        <div class="description mt-3">
            <h1 class="nome mb-3">{{ $produto->nome }}</h1>
            <span>{{ $produto->descricao }}</span>
            <span>R$ {{ $produto->preco }}</span>
        </div>
        <div class="divBtn"><button class="btn-principal btn-fazer-pedido mt-3" id="btn-pricipal">Fazer Pedido</button></div>

        <form action="/produtos" method="POST">
            @csrf
            <input type="hidden" name="id_produto" value="{{ $produto->id }}">
            <input type="hidden" name="preco" value="{{ $produto->preco }}">
        </form>
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