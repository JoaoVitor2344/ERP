<!DOCTYPE html>
<html lang="pt-br">
<head>
    @include('layouts.head')
    <link rel="stylesheet" href="assets/css/home.css">
</head>
<body>
    @include('layouts.navbar')

    <div class="topicos">
        @foreach($topicos as $i => $topico)
            <div class="divTopico mb-4 position-relative">
                <a href="{{ strtolower($topico->name) }}">
                    <div class="topico <?= ($i % 2 == 0) ? 'end-0 rounded-start' : 'start-0 rounded-end' ?>">
                        <div>{{ $topico->name }}</div>
                        <i class="fa-solid {{ $topico->icon }}"></i>
                    </div>
                </a>
            </div>
        @endforeach
    </div>

    @include('layouts.footer')
</body>
</html>