<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>

<h1>Cadastro</h1>

<form action="recebe.php" method="POST">
    <label for="nome">Nome:</label><br>
    <input type="text" name="nome" required><br>

    <label for="idade">Idade:</label><br>
    <input type="number" name="idade" required><br>

    <label for="CPF">CPF:</label><br>
    <input type="text" name="CPF" required><br>

    <button type="submit">Cadastrar</button>
</form>

</body>
</html>
