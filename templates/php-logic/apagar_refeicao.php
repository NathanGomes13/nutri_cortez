<?php

session_start();
include_once 'connection.php';


$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);


if(!empty($id)){
    $sql = "DELETE FROM eventos_calendario WHERE id = $id";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        if (mysqli_affected_rows($conn) > 0) {
            $_SESSION['msg'] = '<div class="alert alert-success show" role="alert" id="msg-cad-calend">Refeição deletada com sucesso!</div>';
            header("Location: ../home.php");
        } else {
            $_SESSION['msg'] = '<div class="alert alert-danger" role="alert" id="msg-cad-calend">Erro: Refeição não apagada.</div>';
            header("Location: ../home.php");
        }
    }
    else{
        $_SESSION['msg'] = '<div class="alert alert-danger" role="alert" id="msg-cad-calend">Erro(01): Refeição não apagada.</div>';
        header("Location: ../home.php");
    }
}else{
    $_SESSION['msg'] = '<div class="alert alert-danger" role="alert" id="msg-cad-calend">Erro(02): Refeição não apagada.</div>';
    
    header("Location: ../home.php");
};
?>