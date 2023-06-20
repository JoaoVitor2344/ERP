<!DOCTYPE html>
<html lang="pt-br">
<head>
    @include('layouts.head')
    <link rel="stylesheet" href="assets/css/profile.css">
</head>
<body>
    @include('layouts.navbar')

    <div class="container text-center">
        <div class="mb-5" id="divImage">
            <img class="img-fluid {{ (!isset($user->image)) ? 'd-none' : '' }}" id="image" src="{{ (isset($user->image)) ? assets('uploads/profile/$user->image') : '' }}">
            <i class="fas fa-user-circle {{ (isset($user->image)) ? 'd-none' : '' }}" id="icon"></i>
        </div>
        <form action="/profile" method="post" enctype="multipart/form-data">
            @csrf
            <div style="display: none;">
                <input type="file" name="image" id="image">
            </div>
            <input type="text" name="nome" id="nome" placeholder="Nome Completo" value="{{ $user->nome }}">
            <input type="tel" name="cpf" id="cpf" placeholder="CPF" value="{{ $user->cpf }}">
            <input type="tel" name="celular" id="celular" placeholder="Celular" value="{{ $user->celular }}">
            <input class="mb-2" type="email" name="email" id="email" placeholder="E-mail" value="{{ $user->email }}">
            <a class="link" href="/cadastro-localizacao">Cadastrar endereço</a>
            <button class="btn-principal mt-3">Editar</button>
        </form>
    </div>

    <script>
        $(document).ready(function(){
            $('#cpf').mask('000.000.000-00', {reverse: true});
            $('#phone').mask('(00) 00000-0000');
            $("#celular").mask("(00) 00000-0000");

            $('#divImage').click(function() {
                $("[type=file]").click();
            });

            // Colocar a imagem selecionada na tag image
            $("[type=file]").change(function() {
                if (this.files && this.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $(".fa-user-circle").addClass('d-none');
                        $("#image").removeClass('d-none');
                        $('#image').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(this.files[0]);
                }
            });
        });
    </script>

    @include('layouts.footer')
</body>
</html>