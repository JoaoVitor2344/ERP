<!DOCTYPE html>
<html lang="pt-br">
<head>
    @include('layouts.head')

    <link rel="stylesheet" href="/assets/css/produtos.css">
</head>
<body>
    @include('layouts.navbar')

    <div class="container">
        <div class="produtos">
            @foreach($produtos as $i => $produto)
                <div class="produto rounded col-6 mb-2 <?= ($i % 2 == 0) ? 'me-2' : '' ?>">
                    <a href="/produtos/{{ $produto->id }}">
                        <div class="divImg rounded-top"><img src="" alt=""></div>
                        <div class="divName mt-2">
                            {{ $produto->nome }} <br>
                            R$ {{ $produto->preco }}
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>

    @include('layouts.footer')
</body>
</html>