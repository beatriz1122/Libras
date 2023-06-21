<?php
//HEADER
include 'includes/header.php';
//NAV-BAR
include 'includes/nav-bar.php';
?>
<title> Atividade </title>
<body>
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
        
       
<?php include 'reada.php'; ?>
    </table>
</body>
</html>
<?php
//FOOTER
include 'includes/footer.php';
?>
</body>