<?php

require "../conexao.php";
$conexao = abrirConexao();

$matricula = $_POST['matricula'];
$nome = $_POST['nomeAluno'];
$nota1 = $_POST['nota1'];
$nota2 = $_POST['nota2'];
$nota3 = $_POST['nota3'];

$sql= "UPDATE tbAluno SET nomeAluno = '$nome', nota1 = $nota1, nota2 = $nota2, nota3 = $nota3 WHERE " . "matricula = $matricula";

echo $matricula ." ". $nome ." ". $nota1 ." ". $nota2 ." ". $nota3;

mysqli_query($conexao, $sql) or die ("erro ao tentar atualizar");

fecharConexao($conexao);

?>