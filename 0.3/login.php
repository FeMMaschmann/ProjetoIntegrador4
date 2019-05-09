<?php
	if (isset($_GET['erro']) && $_GET['erro'] == 1) {
		$erro = "Atenção! todos os campos devem ser preenchidos!";
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
    <title>Os Quatro Cantos da Civilização - Login</title>
    <link rel="icon" href="img/favicon.png" type="image/x-icon"/>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <?php
			$valida = '';
			if (isset($_SESSION['validacao'])) {
				$valida = $_SESSION['validacao'];
			}
			include_once('menu.php');
		?>
    <div class="container">
			<h2 class="title">login</h2>
			<div class="titleDivisor"></div>
			<?php if(isset($erro)){echo "<h3 class='erro'>$erro</h3>";} ?>
			<form action="controllers/logarDAO.php" method="POST" class="login">
				<label for="usuario_login">E-mail:
				<input type="text" name="usuario" placeholder="Digite seu usuário aqui" id="usuario_login"></label>
				<label for="senha_login">Senha:
				<input type="password" name="senha" placeholder="Digite sua senha aqui" id="senha_login"></label>
				<input type="submit" name="submit" id="submit_login" value="Logar">
			</form>
		</div>
		<?php
      include_once('footer.php');
    ?>
  </body>
</html>
