<?php
  session_start();
  $tipo = $_SESSION['tipo'];
  if ($_SESSION['validacao'] == 1) {
    $level = 'roote';
    if ($level == $tipo) {
      require_once('controllers/senhaDAO.php');
      $id = $_GET['id'];
      $sql = "SELECT * FROM usuarios WHERE id = $id";
      $linha = $db->consulta($sql)->fetch_assoc();
    } else {
      header("Location: login.php");
    }
    if (isset($_GET['erro']) && $_GET['erro'] == 1) {
  		$erro = "Atenção! todos os campos devem ser preenchidos!";
  	}
  	if (isset($_GET['erro']) && $_GET['erro'] == 2) {
  		$erro = "Atenção! os campos não coincidem!";
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
    <title>Os Quatro Cantos da Civilização - Alterar Senha</title>
    <link rel="icon" href="img/favicon.png" type="image/x-icon"/>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <h1 class="titleAdm">Mudar senha</h1>
    <div class="container">
      <?php
        echo "
        <h2 class='title'>".$linha['usuario']."</h2>
  			<div class='titleDivisor'></div>";
        if(isset($erro)){echo "<h3 class='erro'>$erro</h3>";}
      ?>
      <form method="POST" class="login" action="mudar_senha.php">
        <input type="hidden" name="id" value="<?php echo $linha['id'];?>">
        <label for="senha1">Nova senha:
        <input type="password" name="senha" placeholder="Digite a nova senha" id="senha1"></label>
        <label for="senha2">Repita a senha:
        <input type="password" name="senha2" placeholder="Repita a nova senha" id="senha2"></label>
        <input type="submit" class="submit" name="submit" value="Mudar Senha">
      </form>
      <a class="linkCorpo" id="voltar" href="gerenciar_usuarios.php">Voltar</a>
    </div>
  </body>
</html>
<?php
  } else {
    header("Location: login.php");
  }
?>
