<h2 class="title">Galeria de artes</h2>
<div class="titleDivisor"></div>
<div class='row'>
<?php
  require_once('controllers/consultaImagemDAO.php');
  $i = 1;
  while($linha = $read->fetch_assoc()){
    $id = $linha['id'];
    $nome = $linha['nome'];
    $titulo = $linha['titulo'];
    $descricao = $linha['descricao'];
    echo "
      <div class='galeriaimg'>
        <a href='index.php?pagina=galeria'>
          <img src='img/$nome' class='bordinha size'>
        </a>
      </div>";
  }
?>
</div>
<?php
  if ($valida) {
    $level = 'roote';
    $tipo = $_SESSION['tipo'];
    if ($level == $tipo) {
      echo "<a id='linkUploadImg' class='linkCorpo' href='uploadImg.php'>Cadastre uma nova imagem aqui</a>";
    }
  }
?>
