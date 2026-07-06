<?php

require_once "includes/conexao.php";


$id = $_GET['id'];


$sql = "DELETE FROM albums WHERE id = ?";


$stmt = $conexao->prepare($sql);


$stmt->execute([$id]);


header("Location: index.php");