<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar senha - Biblioteca Lino de Mattos </title>
    <link rel="icon" type="image/png" sizes="16x16"  href="img/favicon/favicon-16x16.png">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="css/styles.css">
   <!-- GOOGLE FONTS -->
   <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>
<body id="login" class="login pag-recuperar-senha">
<!-- início do preloader -->
  <div id="preloader">
    <div class="inner">
       <!-- HTML DA ANIMAÇÃO MUITO LOUCA DO SEU PRELOADER! -->
       <img src="img/gif/1490.gif" alt="">
    </div>
  </div>
<!-- fim do preloader --> 
    <form class="container-login" action="confirmar-usuario.php" method="post" id="form">
    <div class="top-login login-user">
        <h1>RECUPERE SUA SENHA</h1>
        <small>Email:</small>
        <?php
            if(isset($_SESSION['usuario_invalido'])){
                echo($_SESSION['usuario_invalido']);
                unset($_SESSION['usuario_invalido']);
            }
        ?>
        <input type="text" name="email" id="email" required>
        <small id="textRecuperar">Digite o email para continuar</small>
        <a href="index.php"><button id="entrar" type="submit">Avançar</button></a>
        <a href="recuperar-senha.php"><h3 id="recuperar-senha">Esqueceu a senha?</h3></a>
        </div>
        <div class="criarConta">
            <h3>Já tem uma conta?</h3>
            <a href="login.php"><strong><h4 id="criar-conta">REALIZAR LOGIN</h4></strong></a>
        </div>
    </form>
    <script src="script/preloader.js" defer></script>
    <script src="js.js"></script>
</body>
</html>


