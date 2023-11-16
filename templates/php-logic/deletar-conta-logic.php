<?php

session_start();
include_once("connection.php");

if (isset($_POST['excluir_conta'])) {
    $senha = $_POST['senha-confirm'];
    $id = $_SESSION['id'];

    if ($senha == $_SESSION['senha']) {
        $sql_excluir_eventos = "DELETE FROM eventos_calendario WHERE id_usuario = $id";
        $result_eventos = mysqli_query($conn, $sql_excluir_eventos);

        $sql_excluir_semanas_data = "DELETE FROM peso_semanal WHERE id_usuario = $id";
        $result_semanas = mysqli_query($conn, $sql_excluir_semanas_data);

        if ($result_eventos && $result_semanas) {
            $sql_excluir_usuario = "DELETE FROM usuarios WHERE id = $id";
            $result_usuario = mysqli_query($conn, $sql_excluir_usuario);

            if ($result_usuario) {
                if (mysqli_affected_rows($conn) > 0) {
                    session_destroy();
                    header("Location: ../index.php");
                } else {
                    header("Location: ../profile.php?Erro(04): Conta não deletada.");
                }
            } else {
                header("Location: ../profile.php?Erro(03): Conta não deletada.");
            }
        }else{
            header("Location: ../profile.php?Erro(02): Conta não deletada.");
        }

    } else {
        header("Location: ../profile.php?Erro: Senha errada.");
    }
}
else{
	header("Location: ../home.php");
	exit();
}

?>