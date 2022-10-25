<!-- <?php

    require "../conexao.php";
    $conexao = abrirConexao();

    $matricula = $_POST['matricula'];

    // Atualiza os dados da tabela
    $sql = "DELETE FROM tbAluno WHERE matricula = $matricula";

    mysqli_query($conexao, $sql) or die ("erro ao tentar atualizar");
    
    echo "Aluno deletado com sucesso!";

    fecharConexao($conexao)

?> -->