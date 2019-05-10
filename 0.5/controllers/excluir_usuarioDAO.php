<?php
  session_start();
  $tipo = $_SESSION['tipo'];
  if ($_SESSION['validacao'] == 1) {
  $level = 'roote';
  if ($level == $tipo) {
    require_once('../models/conectar.php');
    $db = new conectar();
    $id = $_GET['id'];
    $sql = "DELETE FROM usuarios WHERE id = $id";
    $delete = $db->apagarUser($sql);
  } else {
    header("Location: ../login.php");
  }

  } else {
    header("Location: ../login.php");
  }
?>
