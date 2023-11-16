<?php

include_once 'connection.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $nome = $_GET['nome'];

    $sql = "DELETE FROM avaliacoes WHERE id = $id";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        $mensagem = "Avaliação de '$nome' excluída com sucesso!";
        header("Location: ../admin.php?mensagem=" . urlencode($mensagem));
        exit();
    } else {
        $mensagem = "Erro(02) ao excluir avaliação.";
        header("Location: ../admin.php?mensagem=" . urlencode($mensagem));
        exit();
    }
} else {
    $mensagem = "Erro(01) na solicitação de dados para a exclusão.";
    header("Location: ../admin.php?mensagem=" . urlencode($mensagem));
    exit();
}
?>