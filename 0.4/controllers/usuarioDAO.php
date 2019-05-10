<?php
require_once('../models/conectar.php');
$db = new conectar();
$sql = "SELECT * FROM usuarios ORDER BY tipo DESC";
$read = $db->consulta($sql);
?>
