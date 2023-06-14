<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Jogo Encontre o Número</title>
    <style>
        :root {
            --color-white: #fff;
            --color-blue: rgb(20, 147, 220);
            --color-blue2: #00c2ea;
            --color-gray: rgb(238, 238, 238);
        }


        body {
            all: unset;
            font-family: Arial, Helvetica, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: var(--color-blue);
        }

        .content {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 1rem;
            background-color: rgba(0, 0, 0, 0.6);
            color: var(--color-white);
            padding: 3rem 4rem;
            border-radius: 1rem;
        }

        .content input {
            background-color: transparent;
            border: none;
            border-bottom: 1px solid var(--color-gray);
            color: var(--color-white);
            outline: none;
            padding: .4rem;
            width: 50%;
            font-size: 1rem;
        }

        .content input::placeholder {
            color: var(--color-white);
        }

        .content input:focus {
            border-bottom: 1px solid var(--color-blue);
        }

        .content button {
            padding: .8rem;
            width: 100%;
            font-size: 1rem;
            background-color: var(--color-blue2);
            border: none;
            border-radius: 1rem;
            color: var(--color-white);
            margin-top: 2rem;
            cursor: pointer;
            transition: .4s;
        }

        .content button:hover {
            background-color: var(--color-blue);
        }

        .voltar {
            background: linear-gradient(to right, rgb(20, 147, 220), #00c2ea);
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }
    </style>

</head>

<body>
    <div class="content">
        <h1>Descubra o número de 0 a 100</h1>
        <input type="number" placeholder="Digite um número" id="bet">
        <button onclick="verifyNumber()">Enviar</button>
        <a href="index.php"><button>VOLTAR</button></a>
    </div>
    
</body>
<script>
    var numberToFind = 0;
    var attempts = 0;

    function refresh() {
        var element = document.getElementById('bet');
        element.value = '';

        numberToFind = parseInt(Math.random() * 100);
        vattempts = 0;

        console.log('The number to find: ' + numberToFind);
    }

    refresh();

    function verifyNumber() {
        var element = document.getElementById('bet');
        var bet = element.value;

        if (bet > 100 || bet < 0) {
            alert('Aposta é inválida');
            return;
        }

        if (bet > numberToFind) {
            attempts++;
            alert('🚨 O número para ser encontrado é MENOR');
        } else if (bet < numberToFind) {
            attempts++;
            alert('🚨 O número para ser encontrado é MAIOR')
        } else {
            alert('✅ Parabéns você acertou!! Com ' + attempts + ' erros!');
            refresh();
        }
    }
</script>

</html>