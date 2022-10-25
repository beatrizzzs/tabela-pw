<?php
        require "../conexao.php";

       $conexao = abrirConexao();

       $sql = "SELECT * FROM tbAluno";

       $resultado = mysqli_query($conexao, $sql) or die ("erro ao tentar consultar");

       $aluno = array["Nome"=>$resultad0->nomeAluno,"Nota1"=>$resultado->nota1,"Nota2"=>$resultado->nota2, "Nota3"=>$resultado->nota3];

       echo json_decode($aluno);

       echo 'Matricula: ' . $matricula . '<br>Nome: ' . $nome . '<br>Nota 1: ' . $nota1 .  '<br>Nota 2: ' . $nota2 .  '<br>Nota 3: ' . $nota3 ;

       fecharConexao($conexao);

?>