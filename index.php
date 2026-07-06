<?php

require_once "includes/conexao.php";

$sql = "SELECT * FROM albums";

$resultado = $conexao->query($sql);

$albuns = $resultado->fetchAll(PDO::FETCH_ASSOC);

if(isset($_GET['sucesso'])){

    echo "

    <div class='mensagem sucesso'>

        Álbum cadastrado com sucesso!

    </div>

    ";

}

if($_GET['sucesso'] == "editar"){

echo "
<div class='mensagem sucesso'>
Álbum atualizado com sucesso!
</div>
";

}

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">
    <title>Album Manager</title>

    <link rel="stylesheet" href="css/style.css">

</head>


<body>

<div class="cards">

<?php foreach($albuns as $album): ?>

<div class="card">

<img 
src="<?= $album['capa'] ?>"
alt="Capa do álbum">


<h3>
<?= $album['titulo'] ?>
</h3>


<p>
<?= $album['artista'] ?>
</p>


<p>
<?= $album['ano'] ?>
</p>


<a href="editar.php?id=<?= $album['id'] ?>">
Editar
</a>


<a href="excluir.php?id=<?= $album['id'] ?>">
Excluir
</a>


</div>


<?php endforeach; ?>

</div>

</body>

</html>