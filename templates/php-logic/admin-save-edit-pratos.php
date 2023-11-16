<?php

include_once 'connection.php';

if(isset($_POST['new_nome'])){
    $id = $_POST['id'];
    $tabela = $_POST['tabela'];
    $isOpcao = $_POST['isOpcao'];
    $new_nome = $_POST['new_nome'];
    $new_peso = $_POST['new_peso'];
    $new_calorias = $_POST['new_calorias'];
    $new_carboidratos = $_POST['new_carboidratos'];
    $new_gorduras = $_POST['new_gorduras'];
    $new_proteinas = $_POST['new_proteinas'];
    $new_opcao = $_POST['new_opcao'];
    $new_muito_carboidratos = $_POST['new_muito_carboidratos'];
    $new_muita_proteina = $_POST['new_muita_proteina'];
    $new_pouco_carboidrato = $_POST['new_pouco_carboidrato'];
    $new_pouca_gordura = $_POST['new_pouca_gordura'];

    if($isOpcao == 'sim'){
        $sql = "UPDATE $tabela SET nome = '$new_nome', peso='$new_peso', calorias='$new_calorias', carboidratos='$new_carboidratos', gorduras='$new_gorduras', proteinas='$new_proteinas', opcao='$new_opcao', muito_carboidratos='$new_muito_carboidratos', muita_proteina='$new_muita_proteina', pouco_carboidrato='$new_pouco_carboidrato', pouca_gordura='$new_pouca_gordura' WHERE id = $id";
    }else{
        $sql = "UPDATE $tabela SET nome = '$new_nome', peso='$new_peso', calorias='$new_calorias', carboidratos='$new_carboidratos', gorduras='$new_gorduras', proteinas='$new_proteinas', muito_carboidratos='$new_muito_carboidratos', muita_proteina='$new_muita_proteina', pouco_carboidrato='$new_pouco_carboidrato', pouca_gordura='$new_pouca_gordura' WHERE id = $id";
    }
    $result = mysqli_query($conn, $sql);

    if ($result) {
        $mensagem = "Prato '$id' da tabela '$tabela' atualizado com sucesso!";
        header("Location: ../admin.php?mensagem=" . urlencode($mensagem));
        exit();
    } else {
        $mensagem = "Erro(01.2) ao atualizar o prato.";
        header("Location: ../admin.php?mensagem=" . urlencode($mensagem));
        exit();
    }
}else {
    $mensagem = "Erro(01.1) ao atualizar o prato.";
    header("Location: ../admin.php?mensagem=" . urlencode($mensagem));
    exit();
}
?>