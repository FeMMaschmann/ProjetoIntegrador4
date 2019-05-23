<?php
  session_start();
  $tipo = $_SESSION['tipo'];
  if ($_SESSION['validacao'] == 1) {
    $level = 'roote';
    if ($level == $tipo) {
      require_once('controllers/imagemDAO.php');
    } else {
      header("Location: index.php?pagina=galeria");
    }
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
    <title>Os Quatro Cantos da Civilização - Upload Galeria</title>
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
      <h3 class="title h3to2">upload de imagem</h3>
  		<div class="titleDivisor"></div>
      <?php if(isset($erro)){echo "<h3 class='erro'>$erro</h3>";} ?>
      <form class="login" action="uploadImg.php" method="POST" enctype="multipart/form-data">
        <label for="imagem_upload">Imagem:
				<input type="file" name="imagem" id="imagem_upload"></label>
				<label for="titulo_upload">Título:
				<input type="text" name="titulo" placeholder="Digite o título da imagem aqui" id="titulo_upload"></label>
				<label for="desc_upload">Descrição:
				<input type="text" name="descricao" placeholder="Digite sua senha aqui" id="desc_upload"></label>
				<input type="submit" name="submit" class="submit" id="submit_upload" value="Enviar imagem">
      </form>
      <a class="linkCorpo" href="index.php?pagina=galeria">Voltar</a>
    </div>
<?php
  include_once('footer.php');
?>
</body>
</html>

<?php
  } else {
    header("Location: index.php?pagina=galeria");
  }
?>
