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
    <meta name="keywords" content="PHP, HTML, CSS, JAVASCRIPT">
    <title></title>
    <link rel="icon" href="img/favicon.png" type="image/x-icon"/>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div class="top">
      <nav class="menu flex">
        <a class="logo" href="index.php"><img src="img/logo.png"></a>
        <ul id="links">
          <li><a href="index.php">HOME</a></li>
          <li><a href="index.php?pagina=home">******</a></li>
          <li><a href="index.php?pagina=home">******</a></li>
          <li><a href="index.php?pagina=home">******</a></li>
          <li><a href="inscrever.php">INCREVA-SE</a></li>
          <li><a href="login.php">LOGIN</a></li>
        </ul>
      </nav>
    </div>
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
    <footer class="footer">
      <section class="rodape">
        <div class="flex">
          <div class="sect">
            <h4>SOBRE A EMPRESA</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          </div>
          <div class="sect">
            <h4>SIGA AS REDES SOCIAIS</h4>
            <ul class="flex">
              <li><a href="https://www.facebook.com/"><img src="img/face.png"></a></li>
              <li><a href="https://www.linkedin.com/"><img src="img/linked.png"></a></li>
              <li><a href="https://www.youtube.com/"><img src="img/yout.png"></a></li>
            </ul>
            <ul class="flex">
              <li><a href="https://twitter.com/"><img src="img/twit.png"></a></li>
              <li><a href="https://br.pinterest.com/"><img src="img/pint.png"></a></li>
            </ul>
          </div>
        </div>
      </section>
      <section class="copy">
        <div class="divisor"></div>
        <h4>Copyright &copy; 2019 - Todos os direitos reservados.</h4>
      </section>
    </footer>
  </body>
</html>
