<?php
$conexao;
function conectar(){
global $conexao;
$conexao = mysqli_connect('localhost', 'root', '', 'projetointegrador') or die (mysqli_connect_error());
}
function fechar(){
global $conexao;
mysqli_close($conexao);
}
function query($sql){
global $conexao;
$query = mysqli_query($conexao, $sql) or die (mysqli_query_error());
return $query;
}
 ?>