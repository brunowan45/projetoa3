<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Página Inicial</title>
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
		<h1>Olá,
			<?php
			if (isset($_SESSION['nome']) == null) {
				echo "Visitante";
				?>
		</h1>
		<a href="login.php">Login</a>
		<?php
		} else {
			echo $_SESSION['nome'];
			?>
		</h1>
		<br>
		<a href="cadastro.php">Cadastrar</a><br>
		<a href="listarusuario.php">Lista de usuários</a><br>
		<a href="alterarsenha.php">Esqueceu a senha?</a><br>
		<a href="logout.php">Sair</a>
		<?php
		}
		?>
	</center>
</body>
</html>
