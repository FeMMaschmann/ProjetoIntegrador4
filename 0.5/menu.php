<div class="top">
  <nav class="menu flex">
    <a class="logo" href="index.php"><img src="img/logo.png"></a>
    <ul id="links">
      <li><a id="linkIndex" href="index.php">HOME</a></li>
      <li><a id="linkExplorar" href="index.php?pagina=explorar">O MUNDO</a></li>
      <li><a id="linkGaleria" href="index.php?pagina=galeria">GALERIA</a></li>
      <?php if ($valida) {
        echo "<li><a id='linkdiscussao' href='discussao.php'>DISCUSSÂO</a></li>";
        $level = 'roote';
        $tipo = $_SESSION['tipo'];
        if ($level == $tipo) {
          echo "<li><a id='linkAdm' href='admin.php'>ADMINISTRATIVO</a></li>";
        }
      ?>
        <li><a id="linkDeslogar" href="sair.php">SAIR</a></li>
      <?php } else { ?>
        <li><a id="linkInscricao" href="inscrever.php">INCREVA-SE</a></li>
        <li><a id="linkLogin" href="login.php">LOGIN</a></li>
      <?php } ?>
    </ul>
  </nav>
</div>
