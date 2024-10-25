<?php
    session_start();
    include_once('conexao.php');
    // print_r($_SESSION);
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['Senha']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['Senha']);
        header('Location: sucesso.html');
    }
    $logado = $_SESSION['email'];
    if(!empty($_GET['search']))
    {
        $data = $_GET['search'];
        $sql = "SELECT * FROM pro WHERE email LIKE '%$data%' ORDER BY email DESC";
    }
    else
    {
        $sql = "SELECT * FROM pro ORDER BY email DESC";
    }
    $result = $conexao->query($sql);
?>