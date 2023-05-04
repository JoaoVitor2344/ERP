<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="assets/css/style.css"> -->
    <link rel="stylesheet" href="assets/css/cadastro-cliente.css">
    <script src="https://kit.fontawesome.com/d07f089424.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>TESTE</title>
</head>
<body>
    <div>
        <div style="text-align: left;"><i class="seta-cadastro fa-solid fa-arrow-left"></i><a class="cadastro">Login</a></div>
        <div class="perfil"><i class="perfil-icon fa-solid fa-user"></i></div>
    </div>
    <div class="container">
        <form class="formLogin" id="formCadastro" action="login" method="post">
            @csrf
            <input class="mb-4" type="string" name="string" placeholder="Nome Completo">
            <input class="mb-4" type="number" name="number" placeholder="CPF">
            <input class="mb-4" type="email" name="email" placeholder="E-mail">
            <input class="mb-4" type="number" name="number" placeholder="Telefone">
            <input class="mb-4" type="password" name="password" placeholder="Senha">
            <button class="btn-acessar">Cadastrar</button>
        </form>
    </div>
</body>
</html>