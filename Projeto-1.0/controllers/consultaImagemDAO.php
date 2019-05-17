<?php
  require_once('models/conectar.php');
  $db = new conectar();
  $sql = "SELECT * FROM imagens";
  $read = $db->consulta($sql);
?>
