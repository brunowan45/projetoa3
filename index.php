<?php
session_start();
?>

<html>
  <body>
    <center>
    <h1>olá, <?php
    if(isset($_SESSION['nome'])==null){
    ?>
     visitante </h1>
     <a href="login.php">login</a>
     <?php } else {
        echo $_SESSION['nome']; ?>
     </h1><br><a href="cadastro.php">cadastrar</a><br>
         <a href="logout.php">sair</a>
         <?php } ?>
     </center>
   <body>
</html>
