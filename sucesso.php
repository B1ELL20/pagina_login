<?php

    if(!isset($_GET['validade']) || $_GET['validade'] != 1) {
        header('Location: index.php?invalidado=1');
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="script.js"></script>

    <link rel="shortcut icon" href="icons8-usuário-30.png" type="image/x-icon">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
        .caixa {
            text-align: center;
            padding: 20px;
        }

        h1 {
            font-size: 60px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div>
        <div class="caixa mt-5">
            <h1>Seja bem-vindo</h1>
            <h3><?= $_GET['login'] ?></h3>
            <p class="mt-3">Este programa foi desenvolvido com Html, CSS com Bootstrap, JavaScript com JQuery e um banco de dados MySQL para o registro de cadastros!</p>
            <a href="index.php"><button class="btn btn-outline-danger btn-lg mt-3">Voltar para tela de login</button></a>
        </div>
    </div>
</body>
</html>
