<?php

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">
    <title>Novo Álbum</title>

    <link rel="stylesheet" href="css/style.css">

</head>


<body>


<div class="container">


<h1>🎵 Cadastrar Álbum</h1>



<?php if(isset($_GET['erro'])): ?>

    <div class="mensagem erro">
        Preencha os campos obrigatórios!
    </div>

<?php endif; ?>



<form action="salvar.php" method="POST">


    <label>
        Capa do álbum:
    </label>

    <br>

    <input 
        type="text" 
        name="capa"
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
    >


    <br><br>


    <label>
        Ano:
    </label>

    <br>

    <input 
        type="number" 
        name="ano"
        min="1900"
    >


    <br><br>

    <label>
    Número de faixas:
</label>

<br>

<input
    type="number"
    name="faixas"
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

    <option value="Ouvido">
        Ouvido
    </option>

    <option value="Quero ouvir">
        Quero ouvir
    </option>

</select>


<br><br>


    <label>
        Gravadora:
    </label>

    <br>

    <input 
        type="text" 
        name="gravadora"
    >


    <br><br>


    <button type="submit">
        Salvar Álbum
    </button>


</form>


<br>


<a class="botao" href="index.php">
    Voltar
</a>


</div>


</body>


</html>