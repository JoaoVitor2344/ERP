<!DOCTYPE html>
<html lang="pt-br">
<head>
    @include('layouts.head')

    <link rel="stylesheet" href="assets/css/atendimentos.css">
</head>
<body>
    @include('layouts.navbar')

    <div class="container">
        <div class="atendimentos mt-3">
            @foreach($atendimentos as $i => $loja)
                <div class="loja rounded mb-3 <?= ($i % 2 == 0) ? 'me-3' : '' ?>">
                    <a href="atendimentos/{{ $loja->id }}">
                        <div class="divImg rounded-top"><img src="" alt=""></div>
                        <div class="divName mt-2"><span>{{ $atendimento->name }}</span></div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>

    @include('layouts.footer')
</body>
</html>