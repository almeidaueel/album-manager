<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Novo Álbum</title>
</head>

<body>

<h1>Cadastrar Álbum</h1>

<form action="salvar.php" method="POST">

    <label>
        Título:
    </label>
    <br>
    <input type="text" name="titulo">

    <br><br>

    <label>
        Artista:
    </label>
    <br>
    <input type="text" name="artista">

    <br><br>

    <label>
        Gênero:
    </label>
    <br>
    <input type="text" name="genero">

    <br><br>

    <label>
        Ano:
    </label>
    <br>
    <input type="number" name="ano">

    <br><br>

    <label>
        Gravadora:
    </label>
    <br>
    <input type="text" name="gravadora">

    <br><br>

    <button type="submit">
        Salvar
    </button>

</form>

</body>

</html>