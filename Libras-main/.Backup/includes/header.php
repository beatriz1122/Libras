<?php
/*
session_start();
include_once('conexao.php');
// print_r($_SESSION);
if ((!isset($_SESSION['ra']) == true) and (!isset($_SESSION['senha']) == true)) {
    unset($_SESSION['ra']);
    unset($_SESSION['senha']);
    header('Location: login-aluno.php');
}
$logado = $_SESSION['Nome'];
if (!empty($_GET['search'])) {
    $data = $_GET['search'];
    $sql = "SELECT * FROM aluno WHERE id LIKE '%$data%' or nome LIKE '%$data%' or ra LIKE '%$data%' ORDER BY id DESC";
} else {
    $sql = "SELECT * FROM aluno ORDER BY id DESC";
}
$result = $conexao->query($sql);
*/
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="16x16" href="imagens\logobiblioteca.png">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Hammersmith+One&family=Inter:wght@700&family=Lato&display=swap');
    </style>
</head>

<body>
    <header>
        <div class="container-header">
            <a href="index.php"><img src="imagens\logobiblioteca.png" alt="" width="170px" height="100px"></a>
            <!--<div class="user-login">
                <a href="#">
                    <small>
                        <?php
                        echo "Aluno(a) $logado";
                        ?>
                    </small>
                </a>
                <img src="imagens\logo_usuario.png" width="60px" alt="">
                <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path d="M16 10v-5l8 7-8 7v-5h-8v-4h8zm-16-8v20h14v-2h-12v-16h12v-2h-14z" />
                    </svg></a>
            </div>-->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </header>
    <hr>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="script/preloader.js"></script>
</body>

</html>