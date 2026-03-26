<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto 19/03</title>
</head>
<body>
    <h4>Cadastrar Postagem</h4>
    <form action="resultado.php" method="post">
        <label for="title">Título</label>
        <input type="text" name="title" required> <br>
        <label for="body">Corpo da postagem</label>
        <input type="text" name="body" required> <br>
        <label for="userId">Id do usuário</label>
        <input type="text" name="userId" required> <br>
        <button type="submit">Cadastrar</button>
    </form>
    </body>
</html>