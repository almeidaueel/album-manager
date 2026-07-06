<?php

require_once "includes/conexao.php";

$capa = $_POST['capa'];
$titulo = $_POST['titulo'];
$artista = $_POST['artista'];
$genero = $_POST['genero'];
$ano = $_POST['ano'];
$gravadora = $_POST['gravadora'];

if(empty($titulo) || empty($artista)) {

    header("Location: novo.php?erro=campos");
    exit;

}

$sql = "INSERT INTO albums 
(capa, titulo, artista, genero, ano, gravadora)
VALUES
(?, ?, ?, ?, ?, ?)";


$stmt = $conexao->prepare($sql);

$stmt->execute([
    $capa,
    $titulo,
    $artista,
    $genero,
    $ano,
    $gravadora
]);


header("Location: index.php?sucesso=cadastro");