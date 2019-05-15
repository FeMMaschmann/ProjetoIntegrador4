<footer class="footer">
  <section class="rodape">
    <div class="flex">
      <div class="sect">
        <h4>LEMBRE-SE DE SE DIVERTIR</h4>
        <p>O site inteiro foi feito de fã para fã<br class="none"> e até mesmo para aqueles que não são fãs. Você encontrará diversas imagens, explicações sobre o mundo de Temerant.</p><p>Caso tenha alguma sugestão faça uma conta e contate-nos ou mande um email para:<br>Admin@root.com</p>
      </div>
      <div class="sect">
        <h4>SIGA AS REDES SOCIAIS</h4>
        <ul class="flex">
          <li><a href="https://www.facebook.com/"><img src="img/face.png"></a></li>
          <li><a href="https://www.tumblr.com/"><img src="img/tumblr.png"></a></li>
          <li><a href="https://www.youtube.com/"><img src="img/yout.png"></a></li>
        </ul>
        <ul class="flex">
          <li><a href="https://twitter.com/"><img src="img/twit.png"></a></li>
          <li><a href="https://br.pinterest.com/"><img src="img/pint.png"></a></li>
        </ul>
      </div>
    </div>
  </section>
  <section class="copy">
    <div class="divisor"></div>
    <h4>Copyright &copy; 2019 - Todos os direitos reservados.</h4>
  </section>
</footer>

<?php
  if (isset($_GET['msg'])) {
    echo "<div id='msg'>".$_GET['msg']."</div>";
  }
?>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="js/msg.js"></script>
<script type="text/javascript" language="javascript" src="js/toggle.js"></script>
