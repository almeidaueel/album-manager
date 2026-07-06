<?php

require_once "includes/conexao.php";


$id = $_GET['id'];


$sql = "SELECT * FROM albums WHERE id = ?";


$stmt = $conexao->prepare($sql);

$stmt->execute([$id]);


$album = $stmt->fetch(PDO::FETCH_ASSOC);

header("Location:index.php?sucesso=editar");

?>


<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">
    <title>Editar Álbum</title>

    <link rel="stylesheet" href="css/style.css">

</head>


<body>


<div class="container">


<h1>Editar Álbum</h1>


<form action="atualizar.php" method="POST">


    <input 
        type="hidden" 
        name="id" 
        value="<?= $album['id'] ?>"
    >


    <label>
        Título:
    </label>

    <br>

    <input 
        type="text" 
        name="titulo"
        value="<?= $album['titulo'] ?>"
    >


    <br><br>


    <label>
        Artista:
    </label>

    <br>

    <input 
        type="text" 
        name="artista"
        value="<?= $album['artista'] ?>"
    >


    <br><br>


    <label>
        Gênero:
    </label>

    <br>

    <input 
        type="text" 
        name="genero"
        value="<?= $album['genero'] ?>"
    >


    <br><br>


    <label>
        Ano:
    </label>

    <br>

    <input 
        type="number" 
        name="ano"
        value="<?= $album['ano'] ?>"
    >


    <br><br>


    <label>
        Gravadora:
    </label>

    <br>

    <input 
        type="text" 
        name="gravadora"
        value="<?= $album['gravadora'] ?>"
    >


    <br><br>


    <button type="submit">
        Atualizar
    </button>


</form>


</div>


</body>

</html>