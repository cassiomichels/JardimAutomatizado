<?php
include 'crudUsuario.php';

if (isset($_POST["opcao"])) {

	$opcao = $_POST["opcao"];




	if ($opcao == "Entrar") {
		$nome = $_POST["nome"];
		$senha = sha1($_POST["senha"]);

		$nomeSeguro = addslashes($nome);
		$senhaSegura = addslashes($senha);

		$nomeBanco = "null";
		$senhaBanco = "null";
		$resultado = buscarUsuario($nomeSeguro);
		while ($linha = mysqli_fetch_assoc($resultado)) {
			$nomeBanco = addslashes($linha['nome']);
			$senhaBanco = addslashes($linha['senha']);
		}
		if ($nome == $nomeBanco) {
			if ($senha == $senhaBanco) {

				session_start();

				$_SESSION['nome'] = $nomeBanco;
				$_SESSION['senha'] = $senhaBanco;

				header("Location: PaginaInicial.php");
			} else {
				echo "<script>alert('Nome ou senha Incorretos');</script>";
				echo "<script>window.location = 'index.php';</script>";
			}
		}else{
				echo "<script>alert('Nome ou senha Incorretos');</script>";
				echo "<script>window.location = 'index.php';</script>";
					}
				}

		
		
}
	elseif(isset($_GET["opcao"])){
				$opcao=$_GET["opcao"];
				if($opcao == 'Sair'){
					session_start();
					session_destroy();
					
					header("Location: index.php");
				}
			}

