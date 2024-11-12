<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Empresa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="cadastro_process_empresa.php" method="POST">
        <h2>Cadastro Empresa</h2>
       
        <P style="color: red">erro</P>
        <label for="nome">Nome da Empresa:</label>
        <input type="text" id="nome" name="nome" required>
        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required>
        <label for="descricao">Descrição:</label>
        <textarea id="descricao" name="descricao"></textarea>
        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required>
        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>