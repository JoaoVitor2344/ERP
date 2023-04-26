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
            <i class="fas fa-circle-user {{ (isset($user->image)) ? 'd-none' : '' }}" id="icon"></i>
        </div>
        <form action="/profile" method="post" enctype="multipart/form-data">
            @csrf
            <div style="display: none;">
                <input type="file" name="image" id="image">
            </div>
            <input type="text" name="name" id="name" placeholder="Nome Completo">
            <input type="tel" name="cpf" id="cpf" placeholder="CPF">
            <input type="tel" name="phone" id="phone" placeholder="Celular">
            <input class="mb-2" type="email" name="email" id="email" placeholder="E-mail">
            <a class="link" href="cad_endereco">Cadastrar endereço</a>
            <button class="btn-principal mt-3">Editar</button>
        </form>
    </div>

    <script>
        $(document).ready(function(){
            $('#cpf').mask('000.000.000-00', {reverse: true});
            $('#phone').mask('(00) 00000-0000');

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