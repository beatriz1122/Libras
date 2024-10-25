<?php
//HEADER
include 'includes/header.php';
//NAV-BAR
include 'includes/nav-bar.php';
?>
<head>
  <title>LIBRAS - Home</title>
</head>
<body>

<div vw class="enabled">
    <div vw-access-button class="active"></div>
    <div vw-plugin-wrapper>
      <div class="vw-plugin-top-wrapper"></div>
    </div>
  </div>
  <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
  <script>
    new window.VLibras.Widget('https://vlibras.gov.br/app');
  </script>
  
  <?php
  //PRELOARD
  include 'includes/preloard.php';
  ?>
  <main>
    <div class="conteudo">
      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="imagens/Mulherlibra.jpeg" class="d-block w-100" alt="..." height="900vw">
          </div>
          <div class="carousel-item">
            <img src="imagens/menina.jpg" class="d-block w-100" alt="..." height="900vw">
          </div>
          <div class="carousel-item">
            <img src="imagens/menino.jpg" class="d-block w-100" alt="..." height="900vw">
          </div>
          <div class="carousel-item">
            <img src="imagens/meninos.jpg" class="d-block w-90" alt="..." height="720vw">
          </div>
          <!--<div class="carousel-item">
            <img src="imagens/carrossel/biblioteca1.jpeg" class="d-block w-100" alt="..." height="900vw">
          </div>-->
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
  </main>
  <?php
  //FOOTER
  include 'includes/footer.php';
  ?>
</body>
</html>