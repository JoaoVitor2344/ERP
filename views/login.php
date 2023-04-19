<form class="mt-5 col-12" id="formLogin" action="controllers/cadastrar.php" method="post" style="padding: 20px;">
    <div class="rounded" style="background-color: white; padding: 20px;">
        <div class="text-center"><i class="fa-solid fa-user" style="font-size: 55px;"></i></div>
        <div class="col-12 mt-2"><input class="w-100 rounded" type="email"></div>
        <div class="col-12 mt-2"><input class="w-100 rounded" type="email"></div>
        <button class="mt-2 rounded w-100">LOGAR</button>
    </div>
</form>

<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<script>
    $("#formLogin").submit(function(e) {
        e.preventDefault();

        $.ajax({
            url: $(this).attr("action"),
            method: $(this).attr("method"),
            data: $(this).serialize(),
            success: function() {
                window.location.href="";
            }
        });
    });

</script>