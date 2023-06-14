<?php
    session_start();
    // print_r($_REQUEST);
    if(isset($_POST['submit']) && !empty($_POST['cpf']) && !empty($_POST['senha']))
    {
        // Acessa
        include_once('conexao.php');
        $cpf = $_POST['cpf'];
        $senha = $_POST['senha'];

        // print_r('Email: ' . $email);
        // print_r('<br>');
        // print_r('Senha: ' . $senha);

        $sql = "SELECT * FROM administrador WHERE cpf = '$cpf' and senha = '$senha'";

        $result = $conexao->query($sql);

        // print_r($sql);
        // print_r($result);

        if(mysqli_num_rows($result) < 1)
        {
            unset($_SESSION['cpf']);
            unset($_SESSION['senha']);
            header('Location: login-professor.php');
        }
        else
        {
            $_SESSION['cpf'] = $email;
            $_SESSION['senha'] = $senha;
            header('Location: areadoprofessor.php');
        }
    }
    else
    {
        // Não acessa
        header('Location: login-professor.php');
    }
?>