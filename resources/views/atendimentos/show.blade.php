<!DOCTYPE html>
<html lang="pt-br">
<head>
    @include('layouts.head')

    <link rel="stylesheet" href="/assets/css/atendimentos.css">
</head>
<body>
    @include('layouts.navbar')

    <div class="container">
        <div class="atendimentos mt-3">
            @foreach($atendimentos as $i => $atendimento)
                <div class="atendimento rounded col-6 mb-2 <?= ($i % 2 == 0) ? 'me-2' : '' ?>">
                    <a href="/atendimento/{{ $atendimento->id }}">
                        <div class="divImg rounded-top"><img src="" alt=""></div>
                        <div class="divName mt-2">
                            {{ $atendimento->name }} <br>
                            R$ {{ $atendimento->price }}
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