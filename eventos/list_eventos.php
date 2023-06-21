<?php

include 'conexao.php';

$query_events = "SELECT id, Titulo, cor, Inicio, Fim FROM eventos";
$resultado_events = $conn->prepare($query_events);
$resultado_events->execute();

$eventos = [];

while ($row_events = $resultado_events->fetch(PDO::FETCH_ASSOC)) {
    $id = $row_events['id'];
    $Titulo = $row_events['Titulo'];
    $cor = $row_events['cor'];
    $Inicio = $row_events['Inicio'];
    $Fim = $row_events['Fim'];

    $eventos[] = [
        'id' => $id,
        'Titulo' => $Titulo,
        'cor' => $cor,
        'Inicio' => $Inicio,
        'Fim' => $Fim,
    ];
}

echo json_encode($eventos);