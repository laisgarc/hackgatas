<?php
session_start();

$horasSono = mysqli_real_escape_string($conexao, $_POST['horasSono']);
$cafeDaManha = mysqli_real_escape_string($conexao, $_POST['cafeDaManha']);
$quantRefeicoes = mysqli_real_escape_string($conexao, $_POST['quantRefeicoes']);
$frutasVerduras = mysqli_real_escape_string($conexao, $_POST['frutasVerduras']);
$gorduras = mysqli_real_escape_string($conexao, $_POST['email']);
$processados = mysqli_real_escape_string($conexao, $_POST['processados']);
$alcool = mysqli_real_escape_string($conexao, $_POST['alcool']);

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