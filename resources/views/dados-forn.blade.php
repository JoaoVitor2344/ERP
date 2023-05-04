<!DOCTYPE html>
<html lang="en">
<head>
        @include('layouts.head')
        <link rel="stylesheet" href="assets/css/cadastro-localizacao.css">
        <link rel="stylesheet" href="assets/css/dados-forn.css">
    </head>
    <body>
        @include('layouts.navbar')
        
        <div class="container">
            <div style="text-align: center;"><i class="perfil-icon fa-solid fa-user"></i></div>
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
                <button style="background-color: #1C9BE2;" class="btn-cadastrar">Editar</button>
            </form>
            <div>
            </div>
        </div>
        
        @include('layouts.footer')
    </body>
    </html>