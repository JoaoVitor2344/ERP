<!DOCTYPE html>
<html lang="en">
<head>  
    @include('layouts.head')
    
    <link rel="stylesheet" href="assets/css/cadastro-localizacao.css">
</head>
<body>
    @include('layouts.navbar')
    
    <div class="container">
        <form class="formLogin" id="formCadastro" action="/cadastro-localizacao" method="POST">
            @csrf
            <div style="width: 100%;">
                <p>CEP</p>
                <input class="mb-2" type="tel" name="cep" placeholder="CEP" value="{{ (isset($endereco)) ? $endereco->cep : '' }}">
            </div>
            <div style="width: 100%;">
                <p>Complemento</p>
                <input class="mb-2" type="text" name="complemento" placeholder="Complemento" value="{{ (isset($endereco)) ? $endereco->complemento : '' }}">
            </div>
            <div style="width: 100%;">
                <p>Rua</p>
                <input class="mb-2" type="text" name="rua" placeholder="Rua" value="{{ (isset($endereco)) ? $endereco->rua : '' }}">
            </div>
            <div style="width: 100%; display: flex;">
                <div style="width: 50%; padding-right:5px;">
                    <p>Cidade</p>
                    <input class="mb-2" type="text" name="cidade" placeholder="Cidade" value="{{ (isset($endereco)) ? $endereco->cidade : '' }}">
                </div>
                <div style="width: 50%; padding-left:5px;">
                    <P>Estado</P>
                    <input class="mb-2" type="text" name="estado" placeholder="Estado" value="{{ (isset($endereco)) ? $endereco->estado : '' }}">
                </div>
            </div>
            <button class="btn-cadastrar">{{ (isset($endereco)) ? 'Editar endereço' : 'Adicionar endereço' }}</button>
        </form>
        <div>
        </div>
    </div>
    
    @include('layouts.footer')

    <script>
        $(document).ready(function(){
            $('[name=cep]').mask('00000-000');
        });
    </script>
</body>
</html>