<?php
  require_once('models/conectar.php');
  $db = new conectar();

  if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $usuario = $_POST['usuario'];
    $tipo = $_POST['tipo'];
    $email = $_POST['email'];
    if ($usuario == '' || $tipo == '' || $email == '') {
      header("Location: editar_usuario.php?id=$id&erro=1");
      die();
    } else {
      $sql = "UPDATE usuarios SET usuario = '$usuario', tipo = '$tipo', email = '$email' WHERE id = $id";
      $update = $db->atualizarUser($sql);
    }
  }
?>
