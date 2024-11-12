<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login Candidato</title>
    <img>
    <link rel="stylesheet" href="styles.css">
    <STyle>/* Reset básico e padronização */
        * {

            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Corpo da página */
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f4f7fc;  /*Cor suave para o fundo */
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        /* Estilo para o formulário */
        form {
            background-color: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        form h2 {
            margin-bottom: 20px;
            font-size: 2em;
            color: #007bff;
            font-weight: bold;
        }

        /* Estilo dos rótulos (labels) */
        label {
            display: block;
            font-size: 1.1em;
            margin-bottom: 8px;
            text-align: left;
            color: #333;
        }

        /* Estilo dos campos de entrada (input) */
        input[type="email"], input[type="password"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1em;
            outline: none;
            transition: border-color 0.3s ease-in-out;
        }

        input[type="email"]:focus, input[type="password"]:focus {
            border-color: #007bff;
        }

        /* Estilo do botão */
        button {
            width: 100%;
            padding: 12px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 1.2em;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
        }

        button:hover {
            background-color: #0056b3;
        }

        /* Estilo do link "Cadastre-se" */
        p {
            margin-top: 20px;
            font-size: 1em;
            color: #555;
        }

        p a {
            color: #007bff;
            text-decoration: none;
        }

        p a:hover {
            text-decoration: underline;
        }
    </STyle>
</head>
<body>

    <form action="login_process.php" method="POST">
        <h2>Login Candidato</h2>
        <?php
        // verifa erro de login
        session_start();
        if (isset($_SESSION['erro_msg'])) {
            echo '<p style="color: red">' . $_SESSION['erro_msg'] . '</p>'; // mostra o erro
            unset($_SESSION['erro_msg']); // remove a sessão de erro
        }
        ?>
        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required>
        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required>
        <button type="submit">Entrar</button>
        <p>Não tem conta? <a href="inddex.html">Cadastre-se</a></p>
    </form>
</body>
</html>
