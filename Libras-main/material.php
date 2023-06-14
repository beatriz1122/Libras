<?php
//HEADER
include 'includes/header.php';
//NAV-BAR
include 'includes/nav-bar.php';
?>
<title> Materiais </title>
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
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" href="./style.css" />
    </head>
<body>
    <div>
    <?php
    // Configurações de conexão com o banco de dados
    $servername = 'localhost'; // nome do servidor
    $username = 'root'; // nome de usuário do banco de dados
    $password = ''; // senha do banco de dados
    $dbname = 'libras'; // nome do banco de dados

    // Criando a conexão com o banco de dados
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificando a conexão
    if ($conn->connect_error) {
        die("Falha na conexão: " . $conn->connect_error);
    }

    // Consulta para selecionar todos os elementos da tabela
    $sql = "SELECT * FROM mat";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>ID</th><th>Nome</th><th>Tipo</th></tr>";

        // Imprime os dados de cada linha
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["nome"] . "</td>";
            echo "<td>" . $row["tipo"] . "</td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "Não foram encontrados resultados.";
    }

    // Fechando a conexão com o banco de dados
    $conn->close();
    ?>

    </div>
</body>
</html>
<?php
//FOOTER
include 'includes/footer.php';
?>
</body>
</html>




