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

<div class="container">

    <h1>🎵 Album Manager</h1>

    <a class="botao" href="novo.php">
        + Novo Álbum
    </a>


    <h2>Álbuns cadastrados</h2>


    <table>

        <tr>
            <th>Título</th>
            <th>Artista</th>
            <th>Gênero</th>
            <th>Ano</th>
            <th>Gravadora</th>
            <th>Ações</th>
        </tr>


        <?php foreach($albuns as $album): ?>

        <tr>

            <td>
                <?= $album['titulo'] ?>
            </td>

            <td>
                <?= $album['artista'] ?>
            </td>

            <td>
                <?= $album['genero'] ?>
            </td>

            <td>
                <?= $album['ano'] ?>
            </td>

            <td>
                <?= $album['gravadora'] ?>
            </td>

            <td>
                <a href="editar.php?id=<?= $album['id'] ?>">
                    Editar
                </a>

                <a 
                href="excluir.php?id=<?= $album['id'] ?>"
                onclick="return confirm('Tem certeza que deseja excluir este álbum?')">
                    Excluir
                </a>
            </td>

        </tr>

        <?php endforeach; ?>


    </table>


</div>

</body>

</html>