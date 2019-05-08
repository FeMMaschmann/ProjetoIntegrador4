<?php
  session_start();
  $tipo = $_SESSION['tipo'];
  if ($_SESSION['validacao'] == 1) {
    $level = 'roote';
    if ($level == $tipo) {

    } else {
      header("Location: usuario.php");
    }
?>
      <h1>Página Administrativa</h1>
      <a href="controllers/deslogarDAO.php"><button>Deslogar</button></a>
    </div>
  </body>
</html>
<?php
  } else {
    header("Location: entrar.php");
  }
?>
