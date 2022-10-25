<?php
     
    require './conexao.php';
    require './fechaConexao.php';

    $link = abrirConexao();

    $sql = "SELECT *FROM tbl_aluno";
    $resultado = mysqli_query($link, $sql) or die ("Erro ao tentar consultar");  


     class Aluno{
        
          public String $nome;
          public double $nota1, $nota2, $nota3, $media;
          
          while($registro = mysqli_fetch_array($resultado)){
               $id = $registro ['idAluno'];
               $nome = $registro ['nomeAluno'];
               $nota1 = $registro ['nota1'];
               $nota2 = $registro ['nota2'];
               $nota3 = $registro ['nota3'];
          
               function calcularMedia(){
                    $media = ($nota1+$nota2+$nota3)/3;
                    return $media;
               }               
               
               echo 'Id: ' . $id . " Nome: " . $nome . " Nota 1: " . $nota1  . " Nota 2: " . $nota2 . " Nota 3: " . $nota3 . " Média: " . calcularMedia() . "<br>";
               echo '<br>'; 
          }
          
          fecharConexao($link);
          
          echo 'OK';
          


    }
    ?>