<?php
require_once __DIR__ . "/conexao.php";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $file = $_FILES['file'];

    // Verifica se o arquivo é do tipo permitido
    $allowed_types = ['application/msword', 'application/pdf', 'image/png'];
    $file_type = $file['type'];

    if (in_array($file_type, $allowed_types)) {
        // Move o arquivo para o diretório desejado
        $upload_dir = 'uploads/';
        $file_name = basename($file['name']);
        $upload_path = $upload_dir . $file_name;

        move_uploaded_file($file['tmp_name'], $upload_path);

        // Insere as informações do arquivo no banco de dados
        include 'database.php';
        $conn = getConnection();

        $stmt = $conexao->prepare('INSERT INTO files (filename) VALUES (?)');
        $stmt->bind_param('s', $file_name);
        $stmt->execute();

        $stmt->close();
        $conexao->close();
    }
}

header('Location: teste.php');
?>
