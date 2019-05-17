<?php
  require_once('models/conectar.php');
  $db = new conectar();

  if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $senha = $_POST['senha'];
    $senha2 = $_POST['senha2'];

    $salt = md5("churrasco");
    $codifica = crypt($senha,$salt);
    $senhaNova = hash('sha512',$codifica);
    if ($senha == '' || $senha2 == '') {
      header("Location: mudar_senha.php?id=$id&erro=1");
    } elseif ($senha != $senha2) {
      header("Location: mudar_senha.php?id=$id&erro=2");
    } else {
      $sql = "UPDATE usuarios SET senha = '$senhaNova' WHERE id = $id";
      $update = $db->atualizarUser($sql);
    }
  }
?>
