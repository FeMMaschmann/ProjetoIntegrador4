<?php
  session_start();
  if ($_SESSION['validacao'] == 1) {
    $valida = $_SESSION['validacao'];
    require_once('controllers/getMensagemDAO.php');
    if (isset($_GET['erro']) && $_GET['erro'] == 1) {
  		$erro = "Atenção! você deve preencher o campo com a mensagem!";
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
    <title>Os Quatro Cantos da Civilização - Q&A</title>
    <link rel="icon" href="img/favicon.png" type="image/x-icon"/>
    <link rel="stylesheet" href="css/style.css">
	</head>
  <body>
    <h1 class="titleAdm">Q&A</h1>
    <div class="container">
      <?php if(isset($erro)){echo "<h3 class='erro'>$erro</h3>";} ?>
      <form class="envioMens" action="controllers/incluirMensagemDAO.php" method="POST">
        <label for="mensagem">Mensagem:</label>
        <input id="mensagem" placeholder="Digite sua mensagem aqui" type="text" name="mensagem" maxlength="50">
        <input id="enviarMens" class="submit" type="submit" name="submit" value="Enviar">
      </form>
      <a class="linkCorpo" id="voltar" href="index.php">Voltar</a>
      <span></span>
      <a class="linkCorpo" id="sair" href="sair.php">Sair</a>
	    	<?php
        while($linha = $read->fetch_assoc()){
          $mensagem = $linha['mensagem'];
          $usuario = $linha['usuario'];
          $data_inclusao = $linha['data_inclusao_formatada'];
          $idmensagem = $linha['id'];
          echo "
            <div class='mensagemFora'>
              <h3 class='mensagemTitle'>$usuario</h3>
              <div class='mensagemDentro'>
                <p>$mensagem</p>
              </div>
              <small class='mensagemData'>$data_inclusao</small>";
              if ($valida) {
                $level = 'roote';
                $tipo = $_SESSION['tipo'];
                if ($level == $tipo) {
                  echo " - <a class='linkPreto' a onclick='return confirm(\"Você tem certeza que deseja excluir a mensagem?\")' href='controllers/excluir_mensagemDAO.php?id=$idmensagem'>Delete o post</a>";
                }
              }echo "
            </div>";
        }
        ?>
		</div>
    <?php
      if (isset($_GET['msg'])) {
        echo "<div id='msg'>".$_GET['msg']."</div>";
      }
    ?>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="js/msg.js"></script>
	</body>
</html>
<?php
  } else {
    header("Location: login.php");
  }
?>
