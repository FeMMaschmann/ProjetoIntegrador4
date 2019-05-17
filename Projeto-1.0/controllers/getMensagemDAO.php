<?php
  require_once('models/conectar.php');
  $db = new conectar();
  $id_usuario = $_SESSION['id'];
  $sql = "SELECT DATE_FORMAT(m.data_inclusao, '%d %b %Y %T') AS data_inclusao_formatada, m.id , m.mensagem , u.usuario
  FROM mensagens AS m JOIN usuarios AS u ON (m.id_usuario = u.id) ORDER BY data_inclusao DESC";
  $read = $db->consulta($sql);
?>
