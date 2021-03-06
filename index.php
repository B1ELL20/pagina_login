<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">

    <link rel="shortcut icon" href="icons8-usuário-30.png" type="image/x-icon">

    <script src="https://kit.fontawesome.com/2134c11f77.js" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="script.js"></script>

</head>
<body class="bg-light">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-sm-7 caixa d-flex justify-content-center mt-5" id="carregamento">
                <div id="sub-caixa" class="text-danger">
                    <div class="caixa-icone mt-3 mb-5"><h1 class="display-1">Login</h1></div>
                    <label><i class="fa-solid fa-at pe-2"></i>Email</label> <br>
                    <input id="email" class="entradas form-control mt-3" type="email" name="email" placeholder="user@email.com">
                    <br>
                    <label><i class="fa-solid fa-key pe-2"></i>Senha</label> <br>
                    <input id="senha" class="entradas form-control mt-3" type="password" name="senha" placeholder="Senha">
                    <br>
                    <button type="submit" id="enviar" class="botao btn btn-lg btn-outline-danger mb-3">Entrar</button>
                    <p class="mensagem" id="msg-email"></p>
                    <p>Não possui uma conta? <a href="cadastro.html">Cadastre-se</a></p>
                    <?php
                        if(isset($_GET['invalidado']) && $_GET['invalidado'] == 1) {
                    ?>
                        <p>Por favor acesse de forma correta!</p>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>