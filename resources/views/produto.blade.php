<!DOCTYPE html>
<html lang="pt-br">
<head>
    @include('layouts.head')

    <link rel="stylesheet" href="assets/css/produto.css">
</head>
<body>
    @include('layouts.navbar')

    <div class="container">
        <div class="divImg rounded"><img src="/uploads/img/produtos/{{ $produto->image }}" alt=""></div>
        <div class="description mt-3">
            <h1 class="nome mb-3">{{ $produto->name }}</h1>
            <span>{{ $produto->description }}</span>
            <span>R$ {{ $produto->price }}</span>
        </div>
        <div class="divBtn"><button class="btn-principal btn-fazer-pedido mt-3">Fazer Pedido</button></div>
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
            });
        }, { passive: true });
    </script>
</body>
</html>