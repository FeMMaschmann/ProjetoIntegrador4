<?php
  session_start();
  $tipo = $_SESSION['tipo'];
  if ($_SESSION['validacao'] == 1) {
    $level = 'roote';
    if ($level == $tipo) {

    } else {
      header("Location: login.php");
    }
    if (isset($_GET['erro']) && $_GET['erro'] == 1) {
  		$erro = "Atenção! todos os campos devem ser preenchidos!";
  	}
  	if (isset($_GET['erro']) && $_GET['erro'] == 2) {
  		$erro = "Atenção! os campos de e-mail não coincidem!";
  	}
  	if (isset($_GET['erro']) && $_GET['erro'] == 3) {
  		$erro = "Atenção! os campos de senha não coincidem!";
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
    <h1 class="titleAdm">Cadastrar Usuário</h1>
    <div class="container">
      <h2 class="title">cadastro</h2>
			<div class="titleDivisor"></div>
      <?php if(isset($erro)){echo "<h3 class='erro'>$erro</h3>";} ?>
      <form action="controllers/cadastrarUserAdmDAO.php" method="POST" class="inscricao">
				<label for="nome_inscricao">Usuário:
				<input type="text" name="usuario" placeholder="Digite seu usuário aqui" id="usuario_inscricao"></label>
				<label for="email_inscricao">E-mail:
				<input type="email" name="email" placeholder="Digite seu e-mail aqui" id="email_inscricao"></label>
				<label for="emailConfirma_inscricao">Confirme o E-mail:
				<input type="email" name="emailConfirma" placeholder="Confirme seu e-mail aqui" id="emailConfirma_inscricao"></label>
        <label>Tipo de Usuário:
        <div class="radio">
          <label for="roote"><input type="radio" name="tipo" value="roote" id="roote">ROOTE</label>
          <label for="comum"><input type="radio" name="tipo" value="comum" id="comum" checked>COMUM</label>
        </div></label>
				<label for="senha_inscricao">Senha:
				<input type="password" name="senha" placeholder="Digite sua senha aqui" id="senha_inscricao"></label>
				<label for="senhaConfirma_inscricao">Confirme a Senha:
				<input type="password" name="senhaConfirma" placeholder="Confirme sua senha aqui" id="senhaConfirma_inscricao"></label>
				<input type="submit" name="submit" id="submit_inscricao" class="submit" value="Enviar">
			</form>
      <a class="linkCorpo" href="gerenciar_usuarios.php">Voltar</a>
    </div>
  </body>
</html>
<?php
  } else {
    header("Location: login.php");
  }
?>
