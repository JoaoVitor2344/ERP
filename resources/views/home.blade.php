<!DOCTYPE html>
<html lang="pt-br">
<head>
    @include('layouts.head')
    
    <link rel="stylesheet" href="assets/css/home.css">
</head>
<body>
    @include('layouts.navbar')

    <div class="topicos">
        <div class="divTopico mb-4 position-relative">
            <a href="/pedidos">
                <div class="topico end-0 rounded-start">
                    <div>Pedidos</div>
                    <i class="fa-solid fa-cart-shopping"></i>
                </div>
            </a>
        </div>
        <div class="divTopico mb-4 position-relative">
            <a href="/lojas">
                <div class="topico start-0 rounded-end">
                    <div>Lojas</div>
                    <i class="fa-solid fa-truck"></i>
                </div>
            </a>
        </div>
        <div class="divTopico mb-4 position-relative">
            <a href="">
                <div class="topico end-0 rounded-start">
                    <div>Registro de Conversas</div>
                    <i class="fa-solid fa-comments"></i>
                </div>
            </a>
        </div>
    </div>

    @include('layouts.footer')
</body>
</html>