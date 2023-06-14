<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Jogo da Velha </title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@700&family=Raleway:wght@300&family=Roboto+Mono:wght@500&display=swap');

    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: 'Inter', sans-serif;
      font-family: 'Raleway', sans-serif;
      font-family: 'Roboto Mono', monospace;
      height: 100vh;
      width: 100vw;
      background: #00c2ea;
    }

    .board {
      display: grid;
      width: 100%;
      height: 80%;
      display: grid;
      justify-content: center;
      align-content: center;
      justify-items: center;
      align-items: center;
      grid-template-columns: repeat(3, auto);
    }

    .board.x .cell:not(.x):not(.circle):hover::after,
    .board.x .cell:not(.x):not(.circle):hover::before,
    .board.circle .cell:not(.x):not(.circle):hover::after,
    .board.x .cell:not(.x):not(.circle):hover::before {
      background: rgba(243, 243, 243, 0.3) !important;
    }

    /* Célula */
    .cell {
      width: 100px;
      height: 100px;
      border: 7px solid rgb(255, 255, 255);

      display: flex;
      justify-content: center;
      align-items: center;
      position: relative;
    }

    .cell.x,
    .cell.circle {
      cursor: not-allowed;
    }

    .cell:nth-child(1),
    .cell:nth-child(2),
    .cell:nth-child(3) {
      border-top: none;
    }

    .cell:nth-child(1),
    .cell:nth-child(4),
    .cell:nth-child(7) {
      border-left: none;
    }

    .cell:nth-child(7),
    .cell:nth-child(8),
    .cell:nth-child(9) {
      border-bottom: none;
    }

    .cell:nth-child(3),
    .cell:nth-child(6),
    .cell:nth-child(9) {
      border-right: none;
    }

    /* X */
    .cell.x::before,
    .cell.x::after,
    .board.x .cell:not(.x):not(.circle):hover::after,
    .board.x .cell:not(.x):not(.circle):hover::before {
      content: "";
      height: calc(100px * 0.15);
      width: calc(100px * 0.9);
      background: rgb(20, 107, 252);
      position: absolute;
    }

    .cell.x::before,
    .board.x .cell:not(.x):not(.circle):hover::before {
      transform: rotate(45deg);
    }

    .cell.x::after,
    .board.x .cell:not(.x):not(.circle):hover::after {
      transform: rotate(-45deg);
    }

    /* Circle */
    .cell.circle::before,
    .cell.circle::after,
    .board.circle .cell:not(.x):not(.circle):hover::after,
    .board.circle .cell:not(.x):not(.circle):hover::after {
      content: "";
      height: calc(100px * 0.9);
      width: calc(100px * 0.9);
      background: rgb(4, 6, 177);
      position: absolute;
      border-radius: 50%;
    }

    /* Mensagem de Vitória */
    .winning-message {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      justify-content: center;
      align-items: center;
      background-color: rgba(0, 0, 0, 0.8);
      flex-direction: column;
    }

    .winning-message-button {
      font-size: 2rem;
      background-color: rgb(114, 235, 122);
      padding: 10px 15px;
      cursor: pointer;
      border-radius: 80px;
      border: none;
      margin-top: 16px;
      color: white;
    }

    .winning-message-button:hover {
      color: rgb(255, 255, 255);
      background-color: rgb(199, 45, 45);
    }

    .winning-message-text {
      color: white;
      font-size: 5rem;
    }

    .show-winning-message {
      display: flex;
    }

    .group img {
      position: relative;
      border: 8px solid white;
      width: 100px;
      height: 100px;
      margin: 15px 15px;
      border-radius: 50%;
      object-fit: cover;
    }

    .group {
      position: absolute;
      padding: 20px;
      margin: 20px;


    }

    .group p {
      position: relative;
      font-size: 25px;
      text-align: center;
      color: white;
    }

    .group img:hover {
      border: 10px solid rgb(239, 68, 49);
      box-shadow: 10px 10px 1px rgb(69, 44, 40);
      width: 150px;
      height: 150px;
      cursor: pointer;
    }

    #textApresentation {
      color: white;
      font-size: large;
      margin-top: 15vw;
    }

    @media (max-width:700px) {
      #textApresentation {
        display: none;
      }

      .group {
        display: none;
      }
    }

    .titulo {
      text-align-last: center;
    }

    button {
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
  <div class="titulo">
    <h1>Jogo da Velha</h1>
  </div>
  <div class="board" data-board>
    <div class="cell" data-cell></div>
    <div class="cell" data-cell></div>
    <div class="cell" data-cell></div>
    <div class="cell" data-cell></div>
    <div class="cell" data-cell></div>
    <div class="cell" data-cell></div>
    <div class="cell" data-cell></div>
    <div class="cell" data-cell></div>
    <div class="cell" data-cell></div>
  </div>

  <div class="winning-message" data-winning-message>
    <p class="winning-message-text" data-winning-message-text>X VENCEU!</p>
    <button class="winning-message-button" data-restart-button>
      Reiniciar!
    </button>
  </div>
  <a href="index.php"><button>VOLTAR</button></a>
  <script src="scriptsjogodavelha.js"></script>
</body>

</html>