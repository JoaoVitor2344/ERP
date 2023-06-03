<!DOCTYPE html>
<html lang="pt-br">
<head>
    @include('layouts.head')

    <link rel="stylesheet" href="/assets/css/login.css">
</head>
<body>
    <div class="container">
        <div style="text-align: right;"><a class="link" href="/login/{{ ($tipo == 'cliente') ? 'fornecedor' : 'cliente' }}">{{ ($tipo == 'cliente') ? 'Fornecedor' : 'Cliente' }}</a></div>
        <div class="mt-5 text-center"><h1 class="bemVindo">Bem vindo</h1></div>
        <form class="mt-5" id="formLogin" action="/login" method="post">
            @csrf
            <input type="hidden" name="tipo" value="{{ $tipo }}">
            <input class="mb-4" type="email" name="email" placeholder="E-mail" value="joaovitorb2345@gmail.com">
            <input class="mb-2" type="password" name="senha" placeholder="Senha" value="123">
            <div class="mb-2"><a class="link">Esqueceu a senha?</a></div>
            <button class="btn-principal btn-acessar mb-2">Acessar</button>
        </form>
        <div class="text-center"><a class="link" href="/cadastro-cliente">Cadastre-se</a></div>
    </div>
</body>
</html>