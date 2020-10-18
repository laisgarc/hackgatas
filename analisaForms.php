<?php
session_start();

$horasSono = $_POST['horasSono'];
$cafeDaManha = $_POST['cafeDaManha'];
$quantRefeicoes = $_POST['quantRefeicoes'];
$frutasVerduras = $_POST['frutasVerduras'];
$gorduras = $_POST['email'];
$processados = $_POST['processados'];
$alcool = $_POST['alcool'];

$insigth = [
    "horasSono" => $horasSono,
    "cafeDaManha" => $cafeDaManha,
    "quantRefeicoes" => $quantRefeicoes,
    "frutasVerduras" => $frutasVerduras,
    "gorduras" => $gorduras,
    "processados" => $processados,
    "alcool" => $alcool,
];

$_SESSION['insigth'] = $insigth;
header('Location: analisado.php');
exit();
?>