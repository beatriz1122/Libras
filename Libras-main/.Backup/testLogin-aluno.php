<?php
    session_start();
    // print_r($_REQUEST);
    if(isset($_POST['submit']) && !empty($_POST['ra']) && !empty($_POST['senha']))
    {
        // Acessa
        include_once('conexao.php');
        $ra = $_POST['ra'];
        $senha = $_POST['senha'];

        // print_r('Email: ' . $email);
        // print_r('<br>');
        // print_r('Senha: ' . $senha);

        $sql = "SELECT * FROM aluno WHERE ra = '$ra' and senha = '$senha'";

        $result = $conexao->query($sql);

        // print_r($sql);
        // print_r($result);

        if(mysqli_num_rows($result) < 1)
        {
            unset($_SESSION['ra']);
            unset($_SESSION['senha']);
            header('Location: login-aluno.php');
        }
        else
        {
            $_SESSION['ra'] = $ra;
            $_SESSION['senha'] = $senha;
            header('Location: index.php');
        }
    }
    else
    {
        // Não acessa
        header('Location: login-aluno.php');
    }
?>