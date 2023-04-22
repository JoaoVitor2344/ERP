<!DOCTYPE html>
<html lang="pt-br">
<head>
    @include('layouts.head')

    <link rel="stylesheet" href="/assets/css/produtos.css">
</head>
<body>
    @include('layouts.navbar')

    <div class="container">
        <div class="produtos mt-3">
            @foreach($produtos as $i => $produto)
                <div class="produto rounded col-6 mb-2 <?= ($i % 2 == 0) ? 'me-2' : '' ?>">
                    <a href="/produto/{{ $produto->id }}">
                        <div class="divImg rounded-top"><img src="" alt=""></div>
                        <div class="divName mt-2">
                            {{ $produto->name }} <br>
                            R$ {{ $produto->price }}
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>

    @include('layouts.footer')

    <script>
        $(function() {
            $(document).ready(function() {
                let heightNavBar = $(".nav-bar").css("height");
                $(".container").css("margin-top", heightNavBar);
            });
        }, { passive: true });
    </script>
</body>
</html>