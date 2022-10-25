<?php

    require './Aluno.php';

    $aluno1 = new Aluno();

    $aluno1->nome = "Julia de Oliveira Justino";
    $aluno1->nota1 = 8;
    $aluno1->nota2 = 10;
    $aluno1->nota3 = 9;
    $aluno1->media = $aluno1->calcularMedia($aluno1->nota1,$aluno1->nota2,$aluno1->nota3);

    $listaAlunos = [$aluno1];
    $json = json_encode($listaAlunos);

    var_dump($json);



?>