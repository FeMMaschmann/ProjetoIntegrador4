<?php
  require_once('../models/conectar.php');
  $db = new conectar();
  if (isset($_POST['submit'])) {
    $imagemTMP = $_FILES['imagem']['name'];
    $array = explode('.',$imagemTMP);
    $md5 = md5(microtime($array[0]));
    $imagem = $md5 . "." . $array[1];
    $destino = 'img/';
    if ($imagemTMP == '') {
      $erro = "Atenção! Todos os campos devem ser preenchidos!";
    } else {
      move_uploaded_file($_FILES['imagem']['tmp_name'], $destino.$imagem);
      $sql = "INSERT INTO imagens VALUES imagem";
      $update = $db->cadastrarimg($sql);
    }
  }
?>
