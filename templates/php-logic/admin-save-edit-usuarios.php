<?php

include_once 'connection.php';

if(isset($_POST['new_nome'])){
    $id = $_POST['id'];
    $new_nome = $_POST['new_nome'];
    $new_email = $_POST['new_email'];
    $new_phone = $_POST['new_phone'];
    $new_idade = $_POST['new_idade'];
    $new_sexo = $_POST['new_sexo'];
    $new_peso = $_POST['new_peso'];
    $new_altura = $_POST['new_altura'];
    $new_nivel_atividade = $_POST['new_nivel_atividade'];
    $new_objetivo = $_POST['new_objetivo'];

    $sql = "UPDATE usuarios SET nome = '$new_nome', email='$new_email', phone='$new_phone', idade='$new_idade', sexo='$new_sexo', peso='$new_peso', altura='$new_altura', nivel_atividade='$new_nivel_atividade', objetivo='$new_objetivo' WHERE ID = $id";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        $mensagem = "Usuário '$new_nome' atualizado com sucesso!";
        header("Location: ../admin.php?mensagem=" . urlencode($mensagem));
        exit();
    } else {
        $mensagem = "Erro(01.2) ao atualizar o usuário.";
        header("Location: ../admin.php?mensagem=" . urlencode($mensagem));
        exit();
    }
}else {
    $mensagem = "Erro(01.1) ao atualizar o usuário.";
    header("Location: ../admin.php?mensagem=" . urlencode($mensagem));
    exit();
}
?>