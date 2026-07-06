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

    <link rel="stylesheet" href="css/style.css">

</head>


<body>


<div class="container">


<h1>🎵 Album Manager</h1>


<a class="botao" href="novo.php">
    + Novo Álbum
</a>


<?php if(isset($_GET['sucesso'])): ?>


    <?php if($_GET['sucesso'] == "cadastro"): ?>

        <div class="mensagem sucesso">
            Álbum cadastrado com sucesso!
        </div>

    <?php endif; ?>


    <?php if($_GET['sucesso'] == "editar"): ?>

        <div class="mensagem sucesso">
            Álbum atualizado com sucesso!
        </div>

    <?php endif; ?>


<?php endif; ?>



<div class="cards">


<?php foreach($albuns as $album): ?>


<div class="card">


<img 
src="<?= !empty($album['capa']) ? htmlspecialchars($album['capa']) : 'capas/default.jpeg' ?>"
alt="Capa do álbum"
>



<h3>
<?= htmlspecialchars($album['titulo']) ?>
</h3>



<p>
<?= htmlspecialchars($album['artista']) ?>
</p>



<p>
<?= htmlspecialchars($album['ano']) ?>
</p>

<p>
🎵 <?= $album['faixas'] ?> faixas
</p>


<p>
⭐ <?= $album['nota'] ?>/10
</p>


<p>
🎧 <?= $album['status'] ?>
</p>



<a href="editar.php?id=<?= $album['id'] ?>">
Editar
</a>



<a 
href="excluir.php?id=<?= $album['id'] ?>"
onclick="return confirm('Tem certeza que deseja excluir este álbum?')"
>
Excluir
</a>



</div>


<?php endforeach; ?>


</div>


</div>


</body>


</html>