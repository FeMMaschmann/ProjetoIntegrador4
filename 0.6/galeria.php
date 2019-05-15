<h2 class="title">Galeria de artes</h2>
<div class="titleDivisor"></div>
<div class='row'>
<?php
  require_once('controllers/consultaImagemDAO.php');
  while($linha = $read->fetch_assoc()){
    $id = $linha['id'];
    $nome = $linha['nome'];
    $titulo = $linha['titulo'];
    $descricao = $linha['descricao'];
    echo "
      <div class='galeriaimg'>
        <a href='img/$nome' class='lytebox' data-lyte-options='group:galeria' data-title='$titulo'>
          <img src='img/$nome' title='$titulo' alt='$descricao' class='bordinha size'>
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
