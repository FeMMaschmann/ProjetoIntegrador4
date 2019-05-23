<?php
  session_start();
  require_once('../models/conectar.php');
  $db = new conectar();
  if (isset($_POST['submit'])) {
    $mensagem = $_POST['mensagem'];
    if ($mensagem == '') {
      header("Location: ../q&a.php?erro=1");
      die();
    }
    $usuario = $_SESSION['usuario'];
    $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario'";
    $consulta = $db->consulta($sql);
    while ($linha = $consulta->fetch_assoc()) {
      $tipo = $linha['tipo'];
      $id = $_SESSION['id'];
      $sql = "INSERT INTO mensagens(mensagem,id_usuario) VALUES('$mensagem','$id')";
      $create = $db->incluirMensagem($sql);
    }
  }
?>
