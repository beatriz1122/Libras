<?php
//HEADER
include 'includes/header.php';
//NAV-BAR
include 'includes/nav-bar.php';
?>
<head>
  <title>Biblioteca Lino de Mattos - Home</title>
  <link rel="manifest" href="pwa/manifest.webmanifest">
</head>
<body>
  <?php
  //PRELOARD
  include 'includes/preloard.php';
  ?>
  <main>
    <div class="conteudo">
      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="imagens/carrossel/biblioteca5.jpeg" class="d-block w-100" alt="..." height="900vw">
          </div>
          <div class="carousel-item">
            <img src="imagens/carrossel/biblioteca2.jpeg" class="d-block w-100" alt="..." height="900vw">
          </div>
          <div class="carousel-item">
            <img src="imagens/carrossel/biblioteca3.jpeg" class="d-block w-100" alt="..." height="900vw">
          </div>
          <div class="carousel-item">
            <img src="imagens/carrossel/biblioteca4.jpeg" class="d-block w-100" alt="..." height="900vw">
          </div>
          <div class="carousel-item">
            <img src="imagens/carrossel/biblioteca1.jpeg" class="d-block w-100" alt="..." height="900vw">
          </div>
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
  <?php
  //FireBase
  include 'includes/firebase.php';
  ?>
  <script src="pwa/index.js"> </script>
</body>
</html>