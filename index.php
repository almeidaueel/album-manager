<?php

require_once "includes/conexao.php";

$sql = "SELECT * FROM albums";

$resultado = $conexao->query($sql);

$albuns = $resultado->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Album Manager</title>
</head>

<body>

<h1>Album Manager</h1>

<h2>Álbuns cadastrados</h2>


<?php foreach($albuns as $album): ?>

    <p>
        <?php echo $album['titulo']; ?>
        -
        <?php echo $album['artista']; ?>
    </p>

<?php endforeach; ?>


</body>

</html>