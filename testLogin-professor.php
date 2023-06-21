<?php
    session_start();
    // print_r($_REQUEST);
    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['Senha']))
    {
        // Acessa
        include_once('conexao.php');
        $email = $_POST['email'];
        $Senha = $_POST['Senha'];

        // print_r('Email: ' . $email);
        // print_r('<br>');
        // print_r('Senha: ' . $senha);

        $sql = "SELECT * FROM pro WHERE email = '$email' and Senha = '$Senha'";

        $result = $conexao->query($sql);

        // print_r($sql);
        // print_r($result);

        if(mysqli_num_rows($result) < 1)
        {
            unset($_SESSION['email']);
            unset($_SESSION['Senha']);
            header('Location: login-professor.php');
        }
        else
        {
            $_SESSION['email'] = $email;
            $_SESSION['Senha'] = $Senha;
            header('Location: indexp.php');
        }
    }
    else
    {
        // Não acessa
        header('Location: login.php');
    }
?>