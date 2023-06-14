<?php
//include('protect.php');
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" sizes="16x16" href="img\logo_usuario.png">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="theme-color" content="#ffffff">
  <link rel="stylesheet" href="css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Hammersmith+One&family=Inter:wght@700&family=Lato&display=swap');
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-white">
    <a class="navbar-brand" href="index.php">HOME</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="livros.php">LIVROS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="sobre.php">SOBRE A BIBLIOTECA</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="eventos.php">EVENTOS</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="login.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            JOGOS</a>
          </a>
          <ul class="dropdown-menu dropdown-menu-lg-end ">
            <li><a class="dropdown-item" href="jogodavelha.php">Jogo da Velha</a></li>
            <li><a class="dropdown-item" href="jogoencontreonumero.php">Jogo Encontre o Número</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            ENTRAR
          </a>
          <ul class="dropdown-menu dropdown-menu-lg-end ">
            <li><a class="dropdown-item" href="login-aluno.php">Login Aluno</a></li>
            <li><a class="dropdown-item" href="login-professor.php">Login Professor</a></li>
            <li><a class="dropdown-item" href="criarconta-aluno.php">Cadastrar-se como Aluno</a></li>
            <li><a class="dropdown-item" href="criarconta-professor.php">Cadastrar-se como Professor</a></li>
          </ul>
          <!--<a class="nav-link" href="login.php">ENTRAR</a>-->
        </li>
      </ul>
    </div>
  </nav>
</body>

</html>

