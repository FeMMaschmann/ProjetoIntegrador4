<?php
  session_start();
  $tipo = $_SESSION['tipo'];
  if ($_SESSION['validacao'] == 1) {
    $level = 'roote';
    if ($level == $tipo) {

    } else {
      header("Location: usuario.php");
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Fernando Mottin Maschmann">
    <meta name="description" content="Projeto Integrador do módulo 4 - Curso técnico em informática do Senac">
    <meta name="keywords" content="PHP, HTML, CSS, JAVASCRIPT, MYSQL">
    <title>Os Quatro Cantos da Civilização - Gerenciar Usuários</title>
    <link rel="icon" href="img/favicon.png" type="image/x-icon"/>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <h1 class="titleAdm">Gerenciar Usuários</h1>
    <div class="container">
      <a href="cadastrar_usuario.php" class="linkCorpo large">Cadastrar Usuário</a>
      <table class="tabela bordinha" cellspacing="0">
        <tr>
          <th>NUM</th>
          <th>USUÁRIO</th>
          <th>TIPO</th>
          <th>EMAIL</th>
          <th>DATA</th>
          <th>SENHA</th>
          <th>EDITAR</th>
          <th>EXCLUIR</th>
        </tr>
      <?php
        require_once('controllers/usuarioDAO.php');
        $i = 1;
        while($linha = $read->fetch_assoc()){
        	$id = $linha['id'];
        	$usuario = $linha['usuario'];
        	$tipo = $linha['tipo'];
        	$email = $linha['email'];
        	$data = $linha['data_cadastro'];
          $data = date('d/m/Y H:i:s',strtotime($data));

        	echo "
            <tr>
              <td>".$i++."</td>
              <td>$usuario</td>
              <td>$tipo</td>
              <td>$email</td>
              <td>$data</td>
              <td><a class='linkCorpo' href='mudar_senha.php?id=$id'>MUDAR SENHA</a></td>
              <td><a href='editar_usuario.php?id=$id'><img src='img/edit.png'></a></td>";
              if ($tipo == 'roote') {
                echo "<td>Não</td>";
              }else {
                echo "<td><a onclick='return confirm(\"Você tem certeza que deseja excluir o usuário?\")' href='controllers/excluir_usuarioDAO.php?id=$id''><img src='img/delete.png'></a></td>";
              }
              echo "
            </tr>";
        }
      ?>
      </table>
      <a class="linkCorpo" href="admin.php">Voltar</a>
      <span></span>
      <a class="linkCorpo" href="sair.php">Sair</a>
    </div>
    <?php
      if (isset($_GET['msg'])) {
        echo "<div id='msg'>".$_GET['msg']."</div>";
      }
    ?>
		<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="js/msg.js"></script>
  </body>
</html>
<?php
  } else {
    header("Location: entrar.php");
  }
?>
