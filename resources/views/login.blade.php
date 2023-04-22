<!DOCTYPE html>
<html lang="pt-br">
<head>
    @include('layouts.head')

    <link rel="stylesheet" href="assets/css/login.css">
</head>
<body>
    <div class="container">
        <div style="text-align: right;"><a class="link">Fornecedor</a></div>
        <div class="mt-5 text-center"><h1 class="bemVindo">Bem vindo</h1></div>
        <form class="mt-5" id="formLogin" action="login" method="post">
            @csrf
            <input class="mb-4" type="email" name="email" placeholder="E-mail">
            <input class="mb-2" type="password" name="password" placeholder="Senha">
            <div class="mb-2"><a class="link">Esqueceu a senha?</a></div>
            <button class="btn-acessar mb-2">Acessar</button>
        </form>
        <div class="text-center"><a class="link">Cadastre-se</a></div>
    </div>
</body>
</html>