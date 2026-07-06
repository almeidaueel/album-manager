<?php

require_once "includes/conexao.php";


$id = $_POST['id'];
$titulo = $_POST['titulo'];
$artista = $_POST['artista'];
$genero = $_POST['genero'];
$ano = $_POST['ano'];
$gravadora = $_POST['gravadora'];


$sql = "UPDATE albums SET
        titulo = ?,
        artista = ?,
        genero = ?,
        ano = ?,
        gravadora = ?
        WHERE id = ?";


$stmt = $conexao->prepare($sql);


$stmt->execute([
    $titulo,
    $artista,
    $genero,
    $ano,
    $gravadora,
    $id
]);


header("Location: index.php");