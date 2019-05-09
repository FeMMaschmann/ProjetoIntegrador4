<?php
  session_start();
  if ($_SESSION['validacao'] == 1) {
?>

<h1>Usuário logado</h1>

<a href="controllers/deslogarDAO.php">Deslogar</a>

<?php
  } else {
    header("Location: entrar.php");
  }
?>
