<?php
  session_start();
  $tipo = $_SESSION['tipo'];
  if ($_SESSION['validacao'] == 1) {
    $level = 'roote';
    if ($level == $tipo) {

    } else {
      header("Location: login.php");
    }
?>
      <h1>Página Administrativa</h1>
      <a href="index.php">Voltar</a>
    </div>
  </body>
</html>
<?php
  } else {
    header("Location: login.php");
  }
?>
