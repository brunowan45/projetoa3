<?php
$host = 'localhost';
$dbname = 'bancoa3';
$username = 'seu_usuario';
$password = 'sua_senha';

$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $login = $_POST['login'];
    $currentSenha = $_POST['current_password'];
    $newSenha = $_POST['new_password'];
    
    $stmt = $conn->prepare('SELECT * FROM login WHERE login = :login AND senha = :senha');
    $stmt->bindParam(':login', $login);
    $stmt->bindParam(':senha', $currentSenha);
    $stmt->execute();
    
    if ($stmt->rowCount() > 0) {
        
        $updateStmt = $conn->prepare('UPDATE login SET senha = :new_senha WHERE login = :login');
        $updateStmt->bindParam(':new_senha', $newSenha);
        $updateStmt->bindParam(':login', $login);
        $updateStmt->execute();
        
        echo 'Senha alterada com sucesso!';
    } else {
        echo 'Login ou senha atual incorretos.';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Alterar Senha</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f1f1f1;
        }

        center {
            margin-top: 100px;
        }

        h1 {
            color: #333;
        }

        form {
            width: 300px;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 10px;
            color: #333;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
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
    <h1>Alterar Senha</h1>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="login">Login:</label>
        <input type="text" name="login" required><br><br>

        <label for="current_password">Senha Atual:</label>
        <input type="password" name="current_password" required><br><br>

        <label for="new_password">Nova Senha:</label>
        <input type="password" name="new_password" required><br><br>

        <input type="submit" value="Alterar senha">
        <p>
        <a href= "login.php">Voltar</a><br>
        </p>
        
