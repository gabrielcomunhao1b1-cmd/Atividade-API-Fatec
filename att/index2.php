<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto 26/03</title>
</head>
<body>
    <h3>Excluir registro</h3>
    <form action="resultado2.php" method="post">
        <label for="id">Digite o ID</label>
        <input type="text" name="id" required><br>
        <label for="title">Digite o Título</label>
        <input type="text" name="title" required><br>
        <label for="body">Digite o corpo da postagem </label>
        <input type="text" name="body" required><br>
        <label for="userId">Digite o ID do usuário</label>
        <input type="number" name="userId" required><br>
        <button type="submit">Atualizar</button>
    </form>
</body>
</html>