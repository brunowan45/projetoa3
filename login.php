<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Projeto A3 - Programação e Modelagem Manhã</title>
    <style>
        <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Projeto A3 - Programação e Modelagem Manhã</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: red;
		}

		center {
			margin-top: 100px;
		}

		h1 {
			color: dark;
		}

		form {
			width: 300px;
			padding: 20px;
			background-color: #fff;
			border-radius: 5px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
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
		<h1>Login</h1>
		<form id="form-login" action="logado.php" method="POST">
			Login: <input type="text" name="login" required><br>
			Senha: <input type="password" name="senha" required><br><br>
			<input type="submit" name="entrar" value="Entrar">
            <p>
            Não tem conta?, crie um agora <a href="cadastro.php">Criar Conta</a><br>
            <p>
            <a href="alterarsenha2.php">Esqueceu a senha?</a><br>
            </p>
		</form>
	</center>
</body>
</html>

    </style>
