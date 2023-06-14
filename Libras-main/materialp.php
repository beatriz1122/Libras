<?php
//HEADER
include 'includes/header.php';
//NAV-BAR
include 'includes/nav-barp.php';
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

    // Função para adicionar um arquivo
    if (isset($_POST['add'])) {
        $nome = $_POST['nome'];
        $tipo = $_FILES['mat']['type'];
        $tamanho = $_FILES['mat']['size'];
        $conteudo = file_get_contents($_FILES['mat']['tmp_name']);

        // Preparando a consulta
        $stmt = $conn->prepare("INSERT INTO mat (nome, tipo, tamanho, conteudo) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssis", $nome, $tipo, $tamanho, $conteudo);

        // Executando a consulta
        if ($stmt->execute()) {
            echo "Arquivo adicionado com sucesso.";
        } else {
            echo "Erro ao adicionar o arquivo: " . $stmt->error;
        }

        // Fechando a declaração
        $stmt->close();
    }

    // Função para excluir um arquivo
    if (isset($_GET['delete'])) {
        $id = $_GET['delete'];

        // Preparando a consulta
        $stmt = $conn->prepare("DELETE FROM mat WHERE id = ?");
        $stmt->bind_param("i", $id);

        // Executando a consulta
        if ($stmt->execute()) {
            echo "Arquivo excluído com sucesso.";
        } else {
            echo "Erro ao excluir o arquivo: " . $stmt->error;
        }

        // Fechando a declaração
        $stmt->close();
    }

    // Consulta para selecionar todos os arquivos da tabela
    $sql = "SELECT * FROM mat";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>ID</th><th>Nome</th><th>Ações</th></tr>";

        // Imprime os dados de cada linha
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["nome"] . "</td>";
            echo "<td>";
            echo "<a href='download.php?id=" . $row["id"] . "'>Baixar</a> | ";
            echo "<a href='?delete=" . $row["id"] . "'>Excluir</a> | ";
            echo "<a href='#' onclick='editFile(" . $row["id"] . ")'>Editar</a>";
            echo "</td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "Não foram encontrados resultados.";
    }

    // Fechando a conexão com o banco de dados
    $conn->close();
    ?>

    

   
<h2>Adicionar Arquivo</h2>
    
   
<form method="post" enctype="multipart/form-data">
        Nome: 
       
<input type="text" name="nome" required>
        Arquivo: 
       
<input type="file" name="arquivo" required>
        
       
<input type="submit" name="add" value="Adicionar">
    
   
</form>

    <script>
       

        function editFile(id) {
            // Implemente a lógica de edição aqui
        }
    </script>
    </div>
</body>
</html>
<?php
//FOOTER
include 'includes/footer.php';
?>
</body>
</html>