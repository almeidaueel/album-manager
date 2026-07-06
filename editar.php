<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once "includes/conexao.php";


if(!isset($_GET['id'])) {

    header("Location: index.php");
    exit;

}


$id = $_GET['id'];


$sql = "SELECT * FROM albums WHERE id = ?";


$stmt = $conexao->prepare($sql);

$stmt->execute([$id]);


$album = $stmt->fetch(PDO::FETCH_ASSOC);



if(!$album) {

    header("Location: index.php");
    exit;

}


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


<h1>✏️ Editar Álbum</h1>



<form action="atualizar.php" method="POST">


<input 
    type="hidden"
    name="id"
    value="<?= $album['id'] ?>"
>



<label>
    Capa do álbum:
</label>

<br>

<input
    type="text"
    name="capa"
    value="<?= htmlspecialchars($album['capa']) ?>"
    placeholder="Ex: capas/default.jpeg"
>


<br><br>



<label>
    Título:
</label>

<br>

<input
    type="text"
    name="titulo"
    value="<?= htmlspecialchars($album['titulo']) ?>"
    required
>


<br><br>



<label>
    Artista:
</label>

<br>

<input
    type="text"
    name="artista"
    value="<?= htmlspecialchars($album['artista']) ?>"
    required
>


<br><br>



<label>
    Gênero:
</label>

<br>

<input
    type="text"
    name="genero"
    value="<?= htmlspecialchars($album['genero']) ?>"
>


<br><br>



<label>
    Ano:
</label>

<br>

<input
    type="number"
    name="ano"
    value="<?= htmlspecialchars($album['ano']) ?>"
    min="1900"
>


<br><br>



<label>
    Gravadora:
</label>

<br>

<input
    type="text"
    name="gravadora"
    value="<?= htmlspecialchars($album['gravadora']) ?>"
>


<br><br>

<label>
    Número de faixas:
</label>

<br>

<input
    type="number"
    name="faixas"
    value="<?= htmlspecialchars($album['faixas']) ?>"
    min="1"
>


<br><br>


<label>
    Nota (0 a 10):
</label>

<br>

<input
    type="number"
    name="nota"
    value="<?= htmlspecialchars($album['nota']) ?>"
    min="0"
    max="10"
    step="0.1"
>


<br><br>


<label>
    Status:
</label>

<br>

<select name="status">


<option 
value="Ouvido"
<?= $album['status'] == "Ouvido" ? "selected" : "" ?>
>
Ouvido
</option>


<option 
value="Quero ouvir"
<?= $album['status'] == "Quero ouvir" ? "selected" : "" ?>
>
Quero ouvir
</option>


</select>


<br><br>




<button type="submit">
    Atualizar Álbum
</button>


</form>


<br>


<a class="botao" href="index.php">
    Voltar
</a>



</div>


</body>


</html>