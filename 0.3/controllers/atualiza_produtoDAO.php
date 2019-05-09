<?php
  require_once('../Models/conectar.php');
  $db = new conectar();

  if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $desc = $_POST['descricao'];
    if ($nome == '' || $desc == '') {
      $erro = "Atenção! Todos os campos devem ser preenchidos!";
    } else {
      $sql = "UPDATE produtos SET nome = '$nome', descricao = '$desc' WHERE id = $id";
      $update = $db->atualizar($sql);
    }
  }
?>
