<?php  
include 'conexaoBD.php';

function cadastrarProduto($nome, $localizacao,$quantidade){

	conectar();
	query("INSERT INTO mudas(nome, localizacao,quantidade) VALUES ('$nome', '$localizacao',$quantidade) ");
	fechar();
}
function mostrarProduto(){

	conectar();
	$resultado = query("SELECT * FROM mudas");
	fechar();
	return $resultado;
}

function excluirProduto($codigo){

	conectar();
	query("DELETE FROM mudas WHERE codigo=$codigo");
	fechar();
}
