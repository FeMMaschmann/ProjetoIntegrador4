<div class="top">
  <nav class="menu flex">
    <a class="logo" href="index.php"><img src="img/logo.png"></a>
    <ul id="links">
      <li><a href="index.php">HOME</a></li>
      <li><a href="index.php?pagina=explorar">O MUNDO</a></li>
      <li><a href="index.php?pagina=galeria">FAN ARTS</a></li>
      <?php if ($valida) {
        echo "<li><a href='discussao.php'>DISCUSSÂO</a></li>";
        $level = 'roote';
        $tipo = $_SESSION['tipo'];
        if ($level == $tipo) {
          echo "<li><a href='admin.php'>ADMINISTRATIVO</a></li>";
        }
      ?>
        <li><a href="controllers/deslogarDAO.php">SAIR</a></li>
      <?php } else { ?>
        <li><a href="inscrever.php">INCREVA-SE</a></li>
        <li><a href="login.php">LOGIN</a></li>
      <?php } ?>
    </ul>
  </nav>
</div>
