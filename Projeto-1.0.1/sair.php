<?php
  session_start();
  if ($_SESSION['validacao'] == 1) {
    require_once('controllers/deslogarDAO.php');
  } else {
    header("Location: index.php");
  }
?>
