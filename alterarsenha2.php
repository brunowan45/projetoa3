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

        <input type="submit" value="Alterar Senha">
        <p>
        <a href="login.php">Voltar</a><br>
        </p>
    </form>
    </center>
</body>
</html>
