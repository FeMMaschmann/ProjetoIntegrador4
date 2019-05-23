<?php
  session_start();
  $tipo = $_SESSION['tipo'];
  if ($_SESSION['validacao'] == 1) {
  $level = 'roote';
  if ($level == $tipo) {
    require_once('../models/conectar.php');
    $db = new conectar();
    $id = $_GET['id'];
    $sql = " SELECT * FROM usuarios WHERE tipo = '$tipo' ";
    $consulta = $db->consulta($sql);
    if ($db->consulta($sql) == true){
      header("Location: ../gerenciar_usuarios.php?msg=Impossivel excluir um Admin!");
    }
    $sql = " SELECT * FROM mensagens WHERE id_usuario = '$id' ";
    $consulta = $db->consulta($sql);
    if ($db->consulta($sql) == true){
      header("Location: ../gerenciar_usuarios.php?msg=Impossivel excluir um usuário com mensagens cadastradas!");
    }
    $sql = "DELETE FROM usuarios WHERE id = $id";
    $delete = $db->apagarUser($sql);
  } else {
    header("Location: ../login.php");
  }

  } else {
    header("Location: ../login.php");
  }
?>
