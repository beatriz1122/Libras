<?php

if (isset($_POST['submit'])) {
    // print_r('Nome: ' . $_POST['nome']);
    // print_r('<br>');
    // print_r('Email: ' . $_POST['email']);
    // print_r('<br>');
    // print_r('Telefone: ' . $_POST['telefone']);
    // print_r('<br>');
    // print_r('Sexo: ' . $_POST['genero']);
    // print_r('<br>');
    // print_r('Data de nascimento: ' . $_POST['data_nascimento']);
    // print_r('<br>');
    // print_r('Cidade: ' . $_POST['cidade']);
    // print_r('<br>');
    // print_r('Estado: ' . $_POST['estado']);
    // print_r('<br>');
    // print_r('Endereço: ' . $_POST['endereco']);

    include_once('conexao.php');

    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $ra = $_POST['ra'];

    $result = mysqli_query($conexao, "INSERT INTO aluno(nome,senha,ra) 
        VALUES ('$nome','$senha','$ra')");

    header('Location: login.php');
}

?>
<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca Lino de Mattos - Criar conta</title>
    <link rel="icon" type="image/png" sizes="16x16" href="img\logobiblioteca.png">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <!--<link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/style.css">-->
    <!-- CSS only -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Hammersmith+One&family=Inter:wght@700&family=Lato&display=swap');

        h1{
            font-size: 29px;
        }

        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(20, 147, 220), #00c2ea);
        }

        .box{
            background-color: lightslategrey;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 80px;
            border-radius: 15px;
            color: #fff;
        }


        .inputBox {
            position: relative;
        }

        .inputUser{
            padding: 15px;
            width: 100%;
            border: none;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
        }
        
        .labelInput{
            position: absolute;
            top: 25%;
            left: 0%;
            pointer-events: none;

        }

        #submit{
            background-color: #00c2ea;
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }


        button{
            background: linear-gradient(to right, rgb(20, 147, 220), #00c2ea);
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }

        #submit:hover{
            background-color: rgb(20, 147, 220);
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="box">
        <form action="criarconta-aluno.php" method="POST">
                <h1><b>Cadastrar Aluno</b></h1>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required placeholder="Nome Completo">
                </div>
                <br>
                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" required placeholder="Senha">
                </div>
                <br>
                <div class="inputBox">
                    <input type="numb" name="ra" id="ra" class="inputUser" required placeholder="RA">
                </div>
                <br><br>
                <input type="submit" name="submit" id="submit">
        </form>
    </div>
    <a href="index.php"><button>VOLTAR</button></a>
</body>

</html>