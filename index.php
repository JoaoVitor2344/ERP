<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <base href="/trabalho/">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/d07f089424.js" crossorigin="anonymous"></script>

    <style>
        input {
            padding: 5px 20px;
            border: none;
            outline: none;
            background-color: #d5d5d5;
            font-size: 16px;
            font-weight: 600;
        }

        button {
            border: none;
            padding: 5px 20px;
            font-size: 18px;
            font-weight: 700;
            background: black;
            color: white;
        }
    </style>
</head>
<body class="d-flex flex-column align-items-center" style="background-color: #d5d5d5; min-height: 100vh;">
    <div style="width: 100%; height: 60px; background: black;"></div>
    <?php 
    if(!strpos($_SERVER['REQUEST_URI'], 'controllers')) {
        if (file_exists("views/"."login".".php")){
            include "views/"."home".".php";
        } else {
            echo "404";
        }
    } else {
        if (file_exists("controllers/"."cadastrar".".php")){
            include "controllers/"."cadastrar".".php";
        } else {
            echo "404";
        }
    }
    ?>
</body>
</html>