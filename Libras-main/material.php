<?php
//HEADER
include 'includes/header.php';
//NAV-BAR
include 'includes/nav-bar.php';
?>
<title> Materiais </title>
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
  <?php
  //Livros
  ?>
<html>
    <head>
    <!--<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" href="./style.css" />-->
    <ul id="fileList"></ul>
    <style>
       

        table {
            border-collapse: collapse;
            width: 100%;
        }

        table, th, td {
            border: 2px solid black;
        }

        th, td {
            padding: 8px;
            text-align: left;
        }

        form {
            margin-bottom: 20px;
        }
    </style>
    </head>
<body>


<h2>Arquivos existentes:</h2>
    
   
<table>
        
       
<tr>
            
           
<th>Nome do Arquivo</th>
            
           
<th>Ações</th>
        
       
</tr>
         
<?php include 'read.php'; ?>
    </table>
</body>
</html>
<?php
//FOOTER
include 'includes/footer.php';
?>
</body>
</html>




