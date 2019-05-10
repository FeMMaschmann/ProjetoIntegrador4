<?php
  session_start();
  if ($_SESSION['validacao'] == 1) {
?>

<h1>Discussão</h1>

<a href="index.php">Voltar</a>

<?php
  } else {
    header("Location: login.php");
  }
?>
