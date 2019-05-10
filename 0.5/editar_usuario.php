<?php
  session_start();
  $tipo = $_SESSION['tipo'];
  if ($_SESSION['validacao'] == 1) {
    $level = 'roote';
    if ($level == $tipo) {
      require_once('controllers/atualizarUserDAO.php');
      $id = $_GET['id'];
      $sql = "SELECT * FROM usuarios WHERE id = $id";
      $linha = $db->consulta($sql)->fetch_assoc();
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
    <title>Os Quatro Cantos da Civilização - Cadastrar Usuário</title>
    <link rel="icon" href="img/favicon.png" type="image/x-icon"/>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <h1 class="titleAdm">Editar Usuário</h1>
    <div class="container">
      <h2 class="title"><?php echo $linha['usuario']; ?></h2>
			<div class="titleDivisor"></div>
      <?php if(isset($erro)){echo "<h3 class='erro'>$erro</h3>";} ?>
      <form method="POST" class="inscricao" action="editar_usuario.php">
        <input type="hidden" name="id" value="<?php echo $linha['id'];?>">
        <label for="nome_inscricao">Usuário:
        <input type="text" name="usuario" id="user_editar" value="<?php echo $linha['usuario'];?>"></label>
        <label for="email_inscricao">E-mail:
        <input type="email" name="email" id="email_editar" value="<?php echo $linha['email'];?>"></label>
        <label>Tipo de Usuário:
        <div class="radio">
          <label for="roote"><input type="radio" name="tipo" value="roote" id="roote">ROOTE</label>
          <label for="comum"><input type="radio" name="tipo" value="comum" id="comum" checked>COMUM</label>
        </div></label>
        <input type="submit" class="submit" name="submit" id="submit" value="Atualizar">
      </form>
      <a class="linkCorpo" href="gerenciar_usuarios.php">Voltar</a>
    </div>
  </body>
</html>
<?php
  } else {
    header("Location: entrar.php");
  }
?>
