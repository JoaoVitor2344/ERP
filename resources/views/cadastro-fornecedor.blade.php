<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.head')
    
    <link rel="stylesheet" href="/assets/css/cadastro-cliente.css">

    @if (session('errors'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: {{ session('errors') }},
            });
        </script>
    @endif   
</head>
<body>
    <div>
        <div style="text-align: left;"><i class="seta-cadastro fa-solid fa-arrow-left"></i><a href="/login/fornecedor" class="cadastro">Login</a></div>
        <div class="perfil"><i class="perfil-icon fa-solid fa-user"></i></div>
    </div>
    <div class="container">
        <form class="formLogin" id="formCadastro" action="/cadastro-fornecedor" method="post">
            @csrf
            <input class="mb-4" type="text" name="nome" placeholder="Nome Completo">
            <input class="mb-4" type="tel" name="cnpj" placeholder="CNPJ">
            <input class="mb-4" type="email" name="email" placeholder="E-mail">
            <input class="mb-4" type="tel" name="telefone" placeholder="Telefone">
            <input class="mb-2" type="password" name="senha" placeholder="Senha">
            <button class="btn-acessar">Cadastrar</button>
        </form>
    </div>

    <script>
        $(document).ready(function() {
            $("[name=cnpj]").mask("00.000.000/0000-00");
            $("[name=telefone]").mask("(00) 00000-0000");
        });
    </script>
</body>
</html>