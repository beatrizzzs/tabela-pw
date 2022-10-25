<?php
           require './conexao.php';
           require './fechaConexao.php';
           
       $conexao = abrirConexao();

       $sql = "Select * from tbAluno";

       $resultado = mysqli_query($conexao, $sql) or die ("erro ao tentar consultar");

       while ($registro = mysqli_fetch_array($resultado)) {
               $matricula = $registro['matricula'];
               $nome = $registro['nomeAluno'];
               $nota1 = $registro['nota1'];
               $nota2 = $registro['nota2'];
               $nota3 = $registro['nota3'];

       }

       echo 'Matricula: ' . $matricula . '<br>Nome: ' . $nome . '<br>Nota 1: ' . $nota1 .  '<br>Nota 2: ' . $nota2 .  '<br>Nota 3: ' . $nota3 ;

       fecharConexao($conexao);

?>