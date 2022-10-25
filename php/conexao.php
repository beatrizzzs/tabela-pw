<?php 
    function abrirConexao(){
        $host = 'fdb34.awardspace.net';
        $usuario = '3957557_projetopwiii';
        $senha = '4902237Justin@';
        $bd = '3957557_projetopwiii';

        $mysql = new mysqli($host, $usuario, $senha, $bd) or die (mysqli_connect_errno());
        return $mysql;
    }

?>