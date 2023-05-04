<!DOCTYPE html>
<html lang="en">
<head>
    <!-- <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/d07f089424.js" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <title>Document</title> -->
        
        @include('layouts.head')
        <link rel="stylesheet" href="assets/css/cadastro-localizacao.css">
    </head>
    <body>
        @include('layouts.navbar')
        
        <div class="container">
            <form class="formLogin" id="formCadastro" action="login" method="post">
                @csrf
                <div style="width: 100%;">
                    <p>CEP</p>
                    <input class="mb-2" type="number" name="number" placeholder="CEP">
                </div>
                <div style="width: 100%;">
                    <p>Complemento</p>
                    <input class="mb-2" type="string" name="string" placeholder="Complemento">
                </div>
                <div style="width: 100%;">
                    <p>Rua</p>
                    <input class="mb-2" type="string" name="string" placeholder="Rua">
                </div>
                <div style="width: 100%; display: flex;">
                    <div style="width: 50%; padding-right:5px;">
                        <p>Cidade</p>
                        <input class="mb-2" type="string" name="string" placeholder="Cidade">
                    </div>
                    <div style="width: 50%; padding-left:5px;">
                        <P>Estado</P>
                        <input class="mb-2" type="string" name="string" placeholder="Estado">
                    </div>
                </div>
                <button class="btn-cadastrar">Fazer Pedido</button>
            </form>
            <div>
            </div>
        </div>
        
        @include('layouts.footer')
    </body>
    </html>