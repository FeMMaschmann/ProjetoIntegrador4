<h2 class="title">login</h2>
<div class="titleDivisor"></div>
<h6><?php if(isset($erro)){echo $erro;} ?></h6>
<form method="POST" class="login">
	<label for="email_login">E-mail:
	<input type="email" name="email" placeholder="Digite seu e-mail aqui" id="email_login"></label>
	<label for="senha_login">Senha:
	<input type="password" name="senha" placeholder="Digite sua senha aqui" id="senha_login"></label>
	<input type="submit" name="submit" id="submit_login" value="Logar">
</form>