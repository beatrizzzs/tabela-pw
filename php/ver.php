<?php
     
    require './conexao.php';
    require './fechaConexao.php';

    $matricula = $_POST['matricula'];
    $nome = $_POST['nomeAluno'];
    $nota1 =  $_POST['nota1'];
    $nota2 = $_POST['nota2'];
    $nota3 = $_POST['nota3'];

    $link = abrirConexao();

    $sql= "UPDATE tbAluno SET nomeAluno = '$nome', nota1 = $nota1, nota2 = $nota2, nota3 = $nota3 WHERE " . "matricula = $matricula";

    echo $matricula ." ". $nome ." ". $nota1 ." ". $nota2 ." ". $nota3;

           


            if (mysqli_query($link, $sql)) {
                # code...
                echo 'Editado com sucesso!<br>';
            }else {
                # code...
                echo '[ERRO] ghfctyk cdr6jkxsd<br>';
            }
            
                fecharConexao($link);
            
                echo 'Fecha conexão com sucesso!';
    
?>