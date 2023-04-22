<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="assets/css/style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
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