<?php

include_once 'connection.php';

if(isset($_POST['new_nome'])){
    $id = $_POST['id'];
    $new_nome = $_POST['new_nome'];
    $new_descricao = $_POST['new_descricao'];

    $sql = "UPDATE avaliacoes SET nome = '$new_nome', descricao='$new_descricao' WHERE ID = $id";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        $mensagem = "Avaliação do usuário '$new_nome' atualizada com sucesso!";
        header("Location: ../admin.php?mensagem=" . urlencode($mensagem));
        exit();
    } else {
        $mensagem = "Erro(01.2) ao atualizar a avaliação.";
        header("Location: ../admin.php?mensagem=" . urlencode($mensagem));
        exit();
    }
}else {
    $mensagem = "Erro(01.1) ao atualizar a avaliação.";
    header("Location: ../admin.php?mensagem=" . urlencode($mensagem));
    exit();
}
?>