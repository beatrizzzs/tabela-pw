<?php
     require './conexao.php';
     require './fechaConexao.php';
 
     $matricula = $_POST['matricula'];
 
     $link = abrirConexao();
 
             $sql = "DELETE FROM tbAluno WHERE matricula = $matricula";
 
 
             if (mysqli_query($link, $sql)) {
                 # code...
                 echo 'Deletado com sucesso!';
             }else {
                 # code...
                 echo '[ERRO] Não Deletado!';
             }
             
                 fecharConexao($link);
             
                 echo 'Fecha conexão';
?>
<!-- id=$id -->
<!-- Eid-'{$_POST["id"]} -->
