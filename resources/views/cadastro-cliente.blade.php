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
        <div style="text-align: left;"><i class="seta-cadastro fa-solid fa-arrow-left"></i><a class="cadastro">Login</a></div>
        <div class="perfil"><i class="perfil-icon fa-solid fa-user"></i></div>
    </div>
    <div class="container">
        <form class="formLogin" id="formCadastro" action="/cadastro-cliente" method="post">
            @csrf
            <input class="mb-4" type="text" name="nome" placeholder="Nome Completo">
            <input class="mb-4" type="tel" name="cpf" placeholder="CPF">
            <input class="mb-4" type="email" name="email" placeholder="E-mail">
            <input class="mb-4" type="tel" name="celular" placeholder="Celular">
            <input class="mb-4" type="password" name="senha" placeholder="Senha">
            <button class="btn-acessar">Cadastrar</button>
        </form>
    </div>

    <script>
        $(document).ready(function() {
            $("[name='cpf']").mask('000.000.000-00');
            $("[name='celular']").mask('(00) 00000-0000');
        });
    </script>
</body>
</html>