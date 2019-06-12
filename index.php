<!DOCTYPE html>
<html lang="pt" >
<head>
    <title>Smart Baber Shop</title>
    <meta charset="utf-8">
    <?php header("Content-Type: text/html; charset=utf8"); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="estilo.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>

<body>

<div class="headerLogin d-flex align-items-center justify-content-center">
    <img  class="headerLogin__image align-items-center" src="\imagens\logo.jpeg">
</div>

<div class="d-flex justify-content-center container">
<form action="produto.php" method="post">
    <div class="form">
        <div class="form-group">
            <label style="color: white">Login</label>
            <input type="text" class="form-control" name="login" placeholder="Digite aqui o seu login">
        </div>
        <div class="form-group">
            <label style="color: white">Senha</label>
            <input type="text" class="form-control" name="senha" placeholder="Digite aqui a sua senha">
        </div>
        <div class="d-flex justify-content-center">
            <button class="btn btn-primary" type="submit" name="enviar">ENTRAR</button>
        </div>
    </div>
</form>
<br>
</div>

<div class="footer d-flex justify-content-center ">
    <div class="column">
        <p class="footer__name">Smart Barber Shop</p>
        <p class="footer__contact">Contato - (31) 3XXX-XXXX</p>
    </div>
</div>

</body>
</html>
