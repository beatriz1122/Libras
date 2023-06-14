<?php

/*include_once('conexao.php');
if(isset($_POST['email']) && strlen($_POST['email']) > 0){
  include('acesso.php');
  
  if(!isset($_SESSION))
    session_start();

    $_SESSION['email'] = $mysqli->real_escape_string($_POST['email']);
    $_SESSION['senha'] = $mysqli->real_escape_string($_POST['senha']);
  
    $sql = "SELECT email,senha FROM cadastro_usuario WHERE email = '$email' AND senha= '$senha'";
    $sql_query = $mysqli->query($sql) or die("Falha na execução do código SQL: ". $mysqli->error);
    $row = $sql_query->num_rows;
    $usuario = $sql_query->fetch_assoc();

    if($row == 0){
        $erro[] = "Este email não pertence à nenhum usuário!";
    }else{

        if($usuario['senha']== $_SESSION['senha']){

          $_SESSION['usuario'] = $usuario['nome'];
      
        }else{

          $erro[]= "Senha incorreta.";
        }
      }
    if(count($erro) == 0 || !isset($erro)){
      header("Location: Landing Page/index.php");
    }
  }
?>