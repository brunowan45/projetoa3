<?php
session_start();
?>

<html>
  <body>
    <center>
    <h1>Olá, <?php
    if(isset($_SESSION['nome'])==null){
    ?>
     visitante </h1>
     <a href="login.php">login</a>
     <?php } else {
        echo $_SESSION['nome']; ?>
     </h1><br><a href="cadastro.php">cadastrar</a><br>
         <a href="listarusuario.php">lista usuário</a><br>
         <a href="alterarsenha.php">alterar senha</a><br>
         <a href="logout.php">sair</a>
         <?php } ?>
     </center>
   <body>
</html>
