 <?php
	Class conectar{
		public $server = "localhost";
		public $username = "root";
		public $password = "";
		public $banco = "projetoIntegrador";

		public $conn;
		public $erro;

		public function __construct(){
			$this->conexao();
		}

		private function conexao(){

		$this->conn = new mysqli($this->server, $this->username, $this->password, $this->banco);

		if (!$this->conn) {
			$this->erro ="Erro na conexao!".$this->conn->connect_error;
			return false;
			}
		}


		// consulta de dados
		public function consulta($sql){
			$result = $this->conn->query($sql) or die($this->conn->error.__LINE__);
			if($result->num_rows > 0){
				return $result;
			}else{
				return false;
			}
		}

		// cadastrar produtos
		public function cadastrarimg($sql){
			$inserir_linha = $this->conn->query($sql) or die($this->conn->error.__LINE__);
			if ($inserir_linha) {
				header("Location: index.php?pagina=galeria");
				$conn->close();
				exit();
			} else {
				die("Erro ao cadastrar:(".$this->conn->errno.")".$this->conn->error);
			}
		}

		// cadastrar usuarios
		public function cadastrarUser($sql){
			$inserir_linha = $this->conn->query($sql) or die($this->conn->error.__LINE__);
			if ($inserir_linha) {
				header("Location: ../inscrever.php?msg=Usuário cadastrado com sucesso!");
				$conn->close();
				exit();
			} else {
				die("Erro ao cadastrar:(".$this->conn->errno.")".$this->conn->error);
			}
		}

		// cadastrar usuarios através do Adm
		public function cadastrarUserAdm($sql){
			$inserir_linha = $this->conn->query($sql) or die($this->conn->error.__LINE__);
			if ($inserir_linha) {
				header("Location: ../gerenciar_usuarios.php?msg=Usuário cadastrado com sucesso!");
				$conn->close();
				exit();
			} else {
				die("Erro ao cadastrar:(".$this->conn->errno.")".$this->conn->error);
			}
		}

		// função atualizar usuários
		public function atualizarUser($sql){
			$atualizar_linha = $this->conn->query($sql) or die($this->conn->error.__LINE__);
			if ($atualizar_linha) {
				header("Location: gerenciar_usuarios.php?msg=Dados atualizados com sucesso!");
				$conn->close();
				exit();
			} else {
				die("Erro ao atualizar:(".$this->conn->errno.")".$this->conn->error);
			}
		}

		// função apagar usuarios
		public function apagarUser($sql){
			$apagar_linha = $this->conn->query($sql) or die($this->conn->error.__LINE__);
			if ($apagar_linha) {
				header("Location: ../gerenciar_usuarios.php?msg=Usuário apagado com sucesso!");
				$conn->close();
				exit();
			} else {
				die("Erro ao apagar:(".$this->conn->errno.")".$this->conn->error);
			}
		}

		//função de logon de usuário
		public function logar($sql){
			$usuario = $_POST['usuario'];
			$login = $this->conn->query($sql) or die($this->conn->error.__LINE__);
			if (mysqli_num_rows($login) != 1) {
				echo "<p id='erro'>Login inválido!</p>";
			} else {
				session_start();
				$_SESSION['validacao'] = 1;
				$_SESSION['usuario'] = $usuario;
				header("Location: ../controllers/logadoDAO.php");
			}
		}

		// função deslogar
		public function deslogar(){
			session_start();
			session_name('logado');
			unset($_SESSION['validacao']);
			unset($_SESSION['nome']);
			unset($_SESSION['email']);
			session_destroy();
			header("Location: index.php?msg=Usuário Deslogado");
		}

} //fim da classe conexao
