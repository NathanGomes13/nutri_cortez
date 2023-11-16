<?php

include_once 'connection.php';

if(isset($_GET['id']) && isset($_GET['tabela'])){
    $id = $_GET['id'];
    $nome = $_GET['nome'];
    $tabela = $_GET['tabela'];

    $sql = "DELETE FROM $tabela WHERE id = $id";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        $mensagem = "Refeição '$nome' da tabela '$tabela' excluída com sucesso!";
        header("Location: ../admin.php?mensagem=" . urlencode($mensagem));
        exit();
    } else {
        $mensagem = "Erro(02) ao excluir refeição.";
        header("Location: ../admin.php?mensagem=" . urlencode($mensagem));
        exit();
    }
} else {
    $mensagem = "Erro(01) na solicitação de dados para a exclusão.";
    header("Location: ../admin.php?mensagem=" . urlencode($mensagem));
    exit();
}
?>