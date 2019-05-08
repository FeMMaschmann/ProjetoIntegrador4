<?php
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
			<h2 class="title">cadastro</h2>
			<div class="titleDivisor"></div>
			<?php if(isset($erro)){echo "<h3 class='erro'>$erro</h3>";} ?>
			<form action="controllers/cadastrarUserDAO.php" method="POST" class="inscricao">
				<label for="nome_inscricao">Usuário:
				<input type="text" name="usuario" placeholder="Digite seu usuário aqui" id="usuario_inscricao"></label>
				<label for="email_inscricao">E-mail:
				<input type="email" name="email" placeholder="Digite seu e-mail aqui" id="email_inscricao"></label>
				<label for="emailConfirma_inscricao">Confirme o E-mail:
				<input type="email" name="emailConfirma" placeholder="Confirme seu e-mail aqui" id="emailConfirma_inscricao"></label>
				<label for="senha_inscricao">Senha:
				<input type="password" name="senha" placeholder="Digite sua senha aqui" id="senha_inscricao"></label>
				<label for="senhaConfirma_inscricao">Confirme a Senha:
				<input type="password" name="senhaConfirma" placeholder="Confirme sua senha aqui" id="senhaConfirma_inscricao"></label>
				<input type="submit" name="submit" id="submit_inscricao" value="Enviar">
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

		<?php
      if (isset($_GET['msg'])) {
        echo "<div id='msg'>".$_GET['msg']."</div>";
      }
    ?>
		<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="js/msg.js"></script>
  </body>
</html>
