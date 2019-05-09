<?php
  require_once('../models/conectar.php');
  $db = new conectar();
  $logout = $db->deslogar();
?>
