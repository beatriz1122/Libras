<?php
    session_start();
    include_once('conexao.php');
    // print_r($_SESSION);
    if((!isset($_SESSION['ra']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['ra']);
        unset($_SESSION['senha']);
        header('Location: login-aluno.php');
    }
    $logado = $_SESSION['ra'];
    if(!empty($_GET['search']))
    {
        $data = $_GET['search'];
        $sql = "SELECT * FROM aluno WHERE id LIKE '%$data%' or nome LIKE '%$data%' or ra LIKE '%$data%' ORDER BY id DESC";
    }
    else
    {
        $sql = "SELECT * FROM aluno ORDER BY id DESC";
    }
    $result = $conexao->query($sql);
?>