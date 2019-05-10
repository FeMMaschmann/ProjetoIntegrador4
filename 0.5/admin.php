
<?php
  session_start();
  $tipo = $_SESSION['tipo'];
  if ($_SESSION['validacao'] == 1) {
    $level = 'roote';
    if ($level == $tipo) {

    } else {
      header("Location: login.php");
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Fernando Mottin Maschmann">
    <meta name="description" content="Projeto Integrador do módulo 4 - Curso técnico em informática do Senac">
    <meta name="keywords" content="PHP, HTML, CSS, JAVASCRIPT, MYSQL">
    <title>Os Quatro Cantos da Civilização - Administrativo</title>
    <link rel="icon" href="img/favicon.png" type="image/x-icon"/>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <h1 class="titleAdm">Página Administrativa</h1>
    <div class="container">
      <div class="fundCinza">
        <a class="linkCorpo" href="gerenciar_usuarios.php">
          <img src="img/users.png">
          <p>Gerenciar Usuários</p>
        </a>
      </div>
      <a class="linkCorpo" href="index.php">Voltar</a>
      <span></span>
      <a class="linkCorpo" href="sair.php">Sair</a>
    </div>
  </body>
</html>
<?php
  } else {
    header("Location: login.php");
  }
?>
