<?php
  require_once('../models/conectar.php');
  $db = new conectar();
  session_start();
  $usuario = $_SESSION['usuario'];
  if ($_SESSION['validacao'] == 1) {
    $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario'";
    $consulta = $db->consulta($sql);
    session_name('logado');
    while ($linha = $consulta->fetch_assoc()) {
      $tipo = $linha['tipo'];
      $value = 'roote';
      if ($tipo == $value) {
        session_start();
        $_SESSION['validacao'] = 1;
        $_SESSION['tipo'] = $tipo;
        header("Location: ../index.php?msg=Logado");
      } else {
        session_start();
        $_SESSION['validacao'] = 1;
        $_SESSION['tipo'] = $tipo;
        header("Location: ../index.php?msg=Logado");
      }
    }
  } else {
    header("Location: ../login.php");
  }
?>
