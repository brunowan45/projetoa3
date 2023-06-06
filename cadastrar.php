<?php
include("conexao.php");
$nome = isset($_POST['nome']) ? $_POST['nome'] : '';
$login = isset($_POST['login']) ? $_POST['login'] : '';
$senha = isset($_POST['senha']) ? $_POST['senha'] : '';

$insert = "INSERT INTO login (nome, login, senha)
VALUES ('$nome', '$login', '$senha')";

$query = mysqli_query($conexao, $insert);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cadastro Realizado</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f1f1f1;
            text-align: center;
            padding-top: 100px;
        }

        h2 {
            color: #333;
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
    <h2>Cadastro Realizado com sucesso</h2>
    <a href="index.php">Voltar</a>
</body>
</html>
