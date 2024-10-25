<?php
require_once __DIR__ . "/conexao.php";
$stmt = $conexao->prepare('SELECT * FROM files');
$stmt->execute();
$result = $stmt->get_result();

while ($row = $result->fetch_assoc()) {
    echo '<tr>';
    echo '<td>' . $row['filename'] . '</td>';
    echo '<td><a href="uploads/' . $row['filename'] . '">Download</a></td>';
    echo '</tr>';
}

$stmt->close();
$conexao->close();
?>
