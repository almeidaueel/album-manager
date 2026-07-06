<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once "includes/conexao.php";

$capa = $_POST['capa'];
$titulo = $_POST['titulo'];
$artista = $_POST['artista'];
$genero = $_POST['genero'];
$ano = !empty($_POST['ano']) ? $_POST['ano'] : null;
$gravadora = $_POST['gravadora'];
$faixas = !empty($_POST['faixas']) ? $_POST['faixas'] : null;
$nota = !empty($_POST['nota']) ? $_POST['nota'] : null;
$status = !empty($_POST['status']) ? $_POST['status'] : null;

if(empty($titulo) || empty($artista)) {

    header("Location: novo.php?erro=campos");
    exit;

}

$sql = "INSERT INTO albums 
(capa, titulo, artista, genero, ano, gravadora, faixas, nota, status)
VALUES
(?, ?, ?, ?, ?, ?, ?, ?, ?)";


$stmt = $conexao->prepare($sql);

$stmt->execute([
    $capa,
    $titulo,
    $artista,
    $genero,
    $ano,
    $gravadora,
    $faixas,
    $nota,
    $status
]);


header("Location: index.php?sucesso=cadastro");