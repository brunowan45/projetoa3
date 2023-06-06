<!DOCTYPE html>
<html>
<head>
    <title>Cadastro</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f1f1f1;
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
        input[type="password"] {
            padding: 8px;
            margin-bottom: 10px;
            width: 200px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            padding: 8px 15px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
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
            nome: <input type="text" name="nome" required><br>
            login: <input type="text" name="login" required><br>
            senha: <input type="password" name="senha" required><br><br>
            <input type="submit" name="cadastrar" value="Cadastrar">
            <p>
                <a href="login.php">Voltar</a><br>
            </p>
        </form>
    </center>
</body>
</html>
