<?php
//HEADER
include 'includes/header.php';
//NAV-BAR
include 'includes/nav-barp.php';
?>
<title> Material </title>
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

</html>

</body>
<?php
// Conexão com o banco de dados (certifique-se de fornecer as credenciais corretas)
$host = 'localhost';
$db = 'libras';
$user = 'root';
$password = '';

$dsn = "mysql:host=$host;dbname=$db;charset=utf8mb4";

try {
    $pdo = new PDO($dsn, $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die('Erro na conexão com o banco de dados: ' . $e->getMessage());
}

// Função para obter a extensão do arquivo
function getFileExtension($filename) {
    $pathinfo = pathinfo($filename);
    return $pathinfo['extension'];
}

// Função para realizar o upload de um arquivo
function uploadFile($file) {
    $file_name = $file['name'];
    $file_tmp = $file['tmp_name'];
    $file_error = $file['error'];

    if ($file_error === 0) {
        $file_extension = getFileExtension($file_name);
        $new_filename = uniqid() . '.' . $file_extension;
        $upload_path = 'arquivos/' . $new_filename;

        move_uploaded_file($file_tmp, $upload_path);

        return $new_filename;
    }

    return false;
}

// Função para adicionar um novo arquivo ao banco de dados
function addFileToDatabase($filename, $filetype, $filepath) {
    global $pdo;

    $stmt = $pdo->prepare('INSERT INTO files (filename, filetype, filepath) VALUES (?, ?, ?)');
    $stmt->execute([$filename, $filetype, $filepath]);
}

// Função para obter todos os arquivos do banco de dados
function getFilesFromDatabase() {
    global $pdo;

    $stmt = $pdo->query('SELECT * FROM files');
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

// Função para excluir um arquivo do banco de dados e do servidor
function deleteFile($file_id) {
    global $pdo;

    $stmt = $pdo->prepare('SELECT * FROM files WHERE id = ?');
    $stmt->execute([$file_id]);
    $file = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($file) {
        $filepath = 'arquivos/' . $file['filepath'];
        if (file_exists($filepath)) {
            unlink($filepath);
        }

        $stmt = $pdo->prepare('DELETE FROM files WHERE id = ?');
        $stmt->execute([$file_id]);
    }
}

// Manipulação do envio do arquivo
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $file = $_FILES['file'];

    $uploaded_filename = uploadFile($file);

    if ($uploaded_filename) {
        $file_name = $file['name'];
        $file_type = getFileExtension($file_name);
        $file_path = $uploaded_filename;

        addFileToDatabase($file_name, $file_type, $file_path);
    }
}

// Manipulação da exclusão do arquivo
if (isset($_GET['delete'])) {
    $file_id = $_GET['delete'];
    deleteFile($file_id);
}

// Obtenção dos arquivos existentes no banco de dados
$files = getFilesFromDatabase();
?>

<html>

<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="file" required>
        <input type="submit" value="Upload">
    </form>

    <h2>Arquivos existentes:</h2>
    <table>
        <tr>
            <th>Nome do Arquivo</th>
            <th>Tipo de Arquivo</th>
            <th>Ações</th>
        </tr>
        <?php foreach ($files as $file): ?>
            <tr>
                <td><?php echo $file['filename']; ?></td>
                <td><?php echo $file['filetype']; ?></td>
                <td>
                    <a href="uploads/<?php echo $file['filepath']; ?>" target="_blank">Visualizar</a>
                    <a href="?delete=<?php echo $file['id']; ?>">Deletar</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

</body>
<?php
//FOOTER
include 'includes/footer.php';
?>
</html>