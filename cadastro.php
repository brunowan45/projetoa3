<!DOCTYPE html>
<html>
<head>
    <title>Cadastro</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #AD2230;
            text-align: center;
            padding-top: 100px;
        }

        h1 {
            color: #333;
        }

        form {
            margin-top: 20px;
        }

        input[type="text"],
        input[type="password"],
        input[type="date"] { /* Adicionado estilo para o campo de data */
            padding: 8px;
            margin-bottom: 10px;
            width: 200px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            padding: 8px 15px;
            background-color: blue;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: red;
        }

        a {
            color: #999;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <center>
        <h1>Cadastro</h1>
        <form id="Cadastro" action="cadastrar.php" method="POST">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" required><br>

            <label for="login">Login:</label>
            <input type="text" name="login" required><br>

            <label for="senha">Senha:</label>
            <input type="password" name="senha" required><br>

            <input type="submit" name="cadastrar" value="Cadastrar">
            <p>
                <a href="login.php">Voltar</a><br>
            </p>
        </form>
    </center>
</body>
</html>
