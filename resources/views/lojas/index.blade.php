<!DOCTYPE html>
<html lang="pt-br">
<head>
    @include('layouts.head')

    <link rel="stylesheet" href="/assets/css/lojas.css">
</head>
<body>
    @include('layouts.navbar')

    <div class="container">
        <div class="row lojas gap-3">
            @foreach($lojas as $i => $loja)
                <div class="loja rounded">
                    <a href="lojas/{{ $loja->id }}">
                        <div class="divImg rounded-top"><img src="" alt=""></div>
                        <div class="divName mt-2"><span>{{ $loja->nome }}</span></div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>

    @include('layouts.footer')
</body>
</html>