<?php
  session_start();
  $tipo = $_SESSION['tipo'];
  if ($_SESSION['validacao'] == 1) {
    $level = 'roote';
    if ($level == $tipo) {

    } else {
      header("Location: index.php?pagina=galeria");
    }
?>
      <h1>Upload de imagens</h1>
      <form class="inscricao" action="imagemDAO.php" method="POST">

        <label for="imagem_upload">Imagem:
				<input type="file" name="imagem" id="imagem_upload">
				<label for="titulo_upload">Título:
				<input type="text" name="titulo" placeholder="Digite o título da imagem aqui" id="titulo_upload"></label>
				<label for="desc_upload">Descrição:
				<input type="text" name="descricao" placeholder="Digite sua senha aqui" id="desc_upload"></label>
				<input type="submit" name="submit" id="submit_inscricao" value="Enviar imagem">
      </form>
      <a href="index.php?pagina=galeria">Voltar</a>
    </div>
  </body>
</html>
<?php
  } else {
    header("Location: index.php?pagina=galeria");
  }
?>
