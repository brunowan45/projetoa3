<?php
// Configuração do banco de dados
$servername = "localhost";
$username = "seu_usuario";
$password = "sua_senha";
$dbname = "bancoa3";

// Conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificação da conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Consulta SQL para obter os nomes da tabela "login"
$sql = "SELECT login FROM login";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "Nomes dos Login:\n";
    while ($row = $result->fetch_assoc()) {
        echo $row["login"] . "\n";
    }
} else {
    echo "Nenhum nome encontrado na tabela 'login'.\n";
}

// Fechando a conexão com o banco de dados
$conn->close();
?>

