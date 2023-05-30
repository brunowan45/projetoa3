<?php
session_start();
?>

<html>
  <body>
    olá, <?php
    if(isset($_SESSION['nome'])==null){
    ?>
     visitante <br>
     <a href="login.php">login</a>
     <?php } else {
        echo $_SESSION['nome']; ?>
     <br><a href="cadastro.php">cadastrar</a><br>
         <a href="logout.php">sair</a>
         <?php } ?>
   <body>
</html>