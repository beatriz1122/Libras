<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login do Professor </title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(to right, rgb(20, 147, 220), #00c2ea);
        }

        div {
            background-color: lightslategrey;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 80px;
            border-radius: 15px;
            color: #fff;
        }

        input {
            padding: 20px;
            width: 250px;
            border: none;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
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

        .inputSubmit {
            background-color: #00c2ea;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-size: 15px;

        }
        

        .inputSubmit:hover {
            background-color: rgb(20, 147, 220);
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div>
        <h1>Login do Professor</h1>
        <form action="testLogin-professor.php" method="POST">
            <input type="text" name="email" placeholder="EMAIL">
            <br><br>
            <input type="password" name="Senha" placeholder="Senha">
            <br><br>
            <input class="inputSubmit" type="submit" name="submit" value="Entrar">
        </form>
        <br><br><br>
    </div>
        <a href="index.php"><button>VOLTAR</button></a>
</body>

</html>








