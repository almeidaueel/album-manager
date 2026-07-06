<?php

require_once "includes/conexao.php";

$titulo = $_POST['titulo'];
$artista = $_POST['artista'];
$genero = $_POST['genero'];
$ano = $_POST['ano'];
$gravadora = $_POST['gravadora'];


$sql = "INSERT INTO albums 
(titulo, artista, genero, ano, gravadora)
VALUES
(?, ?, ?, ?, ?)";


$stmt = $conexao->prepare($sql);

$stmt->execute([
    $titulo,
    $artista,
    $genero,
    $ano,
    $gravadora
]);


header("Location: index.php");