<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Fernando Mottin Maschmann">
    <meta name="description" content="Projeto Integrador do módulo 4 - Curso técnico em informática do Senac">
    <meta name="keywords" content="PHP, HTML, CSS, JAVASCRIPT, MYSQL">
    <title>Os Quatro Cantos da Civilização</title>
    <link rel="icon" href="img/favicon.png" type="image/x-icon"/>
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" language="javascript" src="lytebox.js"></script>
    <link rel="stylesheet" href="lytebox.css" type="text/css" media="screen" />
  </head>
  <body>
    <a href="#principal" class="semview">Clique para ir para o conteudo principal...</a>
    <?php
      $valida = '';
      if (isset($_SESSION['validacao'])) {
        $valida = $_SESSION['validacao'];
      }
			include_once('menu.php');
		?>
    <div class="container">
      <section class="principal" id="principal">
        <?php
          if(empty($_GET['pagina'])){
            include "home.php";
          }else{
          $pagina = $_GET['pagina'];
          switch ($pagina){
            case 'home':
            include "home.php";
            break;

            case 'explorar':
            include "explorar.php";
            break;

            case 'galeria':
            include "galeria.php";
            break;

            case 'universidade':
            include "universidade.php";
            break;

            default:
            include "home.php";
            break;
            }
          }
        ?>
      </section>
    </div>
    <?php
      include_once('footer.php');
    ?>
  </body>
</html>
