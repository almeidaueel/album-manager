<?php

require_once "includes/conexao.php";


$id = $_POST['id'];
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

    header("Location: editar.php?id=$id&erro=campos");
    exit;

}



$sql = "UPDATE albums SET
        capa = ?,
        titulo = ?,
        artista = ?,
        genero = ?,
        ano = ?,
        gravadora = ?,
        faixas = ?,
        nota = ?,
        status = ?
        WHERE id = ?";



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
    $status,
    $id

]);



header("Location: index.php?sucesso=editar");
exit;