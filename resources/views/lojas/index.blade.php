<!DOCTYPE html>
<html lang="pt-br">
<head>
    @include('layouts.head')

    <link rel="stylesheet" href="assets/css/lojas.css">
</head>
<body>
    @include('layouts.navbar')

    <div class="container">
        <div class="lojas mt-3">
            @foreach($lojas as $i => $loja)
                <div class="loja rounded mb-3 <?= ($i % 2 == 0) ? 'me-3' : '' ?>">
                    <a href="lojas/{{ $loja->id }}">
                        <div class="divImg rounded-top"><img src="" alt=""></div>
                        <div class="divName mt-2"><span>{{ $loja->name }}</span></div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>

    @include('layouts.footer')
</body>
</html>