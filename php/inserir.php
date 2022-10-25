<?php
     
    require './conexao.php';
    require './fechaConexao.php';

    $matricula = $_POST['matricula'];
    $nome = $_POST['nomeAluno'];
    $nota1 =  $_POST['nota1'];
    $nota2 = $_POST['nota2'];
    $nota3 = $_POST['nota3'];

    $link = abrirConexao();

            $sql = "INSERT INTO tbAluno(matricula,nomeAluno,nota1,nota2,nota3) VALUES ($matricula, '{$nome}', $nota1, $nota2, $nota3)";


            if (mysqli_query($link, $sql)) {
                # code...
                echo 'Inserido com sucesso!';
            }else {
                # code...
                echo '[ERRO]';
            }
            
                fecharConexao($link);
            
                echo 'Inserido com sucesso!';
    
?>