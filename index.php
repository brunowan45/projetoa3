<?php
session_start();
?>

<html>
  <body>
    <center>
    <h1>Olá, <?php
    if(isset($_SESSION['nome'])==null){
    ?>
     Visitante </h1>
     <a href="login.php">login</a>
     <?php } else {
        echo $_SESSION['nome']; ?>
     </h1><br><a href="cadastro.php">Cadastrar</a><br>
         <a href="listarusuario.php">Listas de usuários</a><br>
         <a href="alterarsenha.php">Alterar senha</a><br>
         <a href="logout.php">Sair</a>
         <?php } ?>
     </center>
   <body>
</html>
