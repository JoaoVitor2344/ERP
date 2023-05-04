<!DOCTYPE html>
<html lang="en">
<head>
    <!-- <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <link rel="stylesheet" href="assets/css/cadastro-produto.css">
    <!-- <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://kit.fontawesome.com/d07f089424.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Document</title> -->
    @include('layouts.head')
</head>
<body>
@include('layouts.navbar')
<div class="quadrado"></div>
<div class="container">
        <form class="formLogin" id="formCadastro" action="login" method="post">
            @csrf
            <input class="mb-3" type="string" name="string" placeholder="Nome do Produto">
            <input class="mb-3" type="number" name="number" placeholder="Preço do Produto">
            <input class="mb-3" type="string" name="string" placeholder="Tipo">
            <input class="mb-3" type="string" name="string" placeholder="Descrição">
            <button class="btn-cadastrar">teste</button>
        </form>
    </div>
</body>
<footer>
@include('layouts.footer')
</footer>
</html>