<?php
  require_once('../models/conectar.php');
  $db = new conectar();

  if (isset($_POST['submit'])) {
    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
    $emailConfirma = $_POST['emailConfirma'];
    $senha = $_POST['senha'];
    $senhaConfirma = $_POST['senhaConfirma'];

    if ($usuario == '' || $emailConfirma == '' || $email == '' || $senha == '' || $senhaConfirma == '') {
      header("Location: ../inscrever.php?erro=1");
      die();
    }
    if ($email != $emailConfirma) {
      header("Location: ../inscrever.php?erro=2");
      die();
    }
    if ($senha != $senhaConfirma) {
      header("Location: ../inscrever.php?erro=3");
      die();
    }


    //cria um salt aleatório
    $salt = md5("churrasco");
    //encriptação usando o salt criado
    $codifica = crypt($senha,$salt);
    //segunda encriptação sha512
    $senhaNova = hash('sha512',$codifica);
    $sql = "INSERT INTO usuarios(usuario,senha,email) VALUES('$usuario','$senhaNova','$email')";
    $create = $db->cadastrarUser($sql);
  }
?>
