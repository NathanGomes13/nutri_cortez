<?php

session_start();
include_once 'connection.php';

if (isset($_POST['editar_perfil'])){
    $id = $_SESSION['id'];

    $nome = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    if (!empty($_POST['password1'])) {
        $senha = $_POST['password1'];
    } else {
        $senha = $_SESSION['senha'];
    }
    
    $sexo = $_POST['gender'];
    $idade = $_POST['idade'];
    $peso = $_POST['weight'];
    $altura = $_POST['height'];
    $objetivo = $_POST['objetivo'];
    $ativ_fisica = $_POST['ativ_fisica_usuario'];

    $semana_peso = $_POST['semana_peso'];

    //SQL para checar se já existe uma semana_peso cadastrada
    $sql_checar_data = "SELECT id_usuario FROM peso_semanal WHERE id_usuario = '$id'";
    $result_checar_data = mysqli_query($conn, $sql_checar_data);

    if ($result_checar_data) {
        if (mysqli_num_rows($result_checar_data) > 0) {
            // Já existe uma entrada com a mesma semana, então exclua a linha antiga
            $row = mysqli_fetch_assoc($result_checar_data);
            $id_antigo = $row['id_usuario'];

            $sql_excluir_antigo = "DELETE FROM peso_semanal WHERE id_usuario = '$id_antigo' AND semana_peso = '$semana_peso'";
            $result_excluir = mysqli_query($conn, $sql_excluir_antigo);

            if (!$result_excluir) {
                header("Location: ../profile.php?error=Erro ao excluir a entrada antiga.");
                exit();
            }
        }
    }

    //SQL tabela 'peso_semanal'
    $sql_semana_peso = "INSERT INTO peso_semanal(semana_peso, peso, id_usuario) VALUES ('$semana_peso', '$peso', '$id')";
    //SQL edição de perfil
    $sql = "UPDATE usuarios SET nome='$nome', phone='$phone', email='$email', senha='$senha', sexo='$sexo', idade='$idade', peso='$peso', altura='$altura', objetivo='$objetivo', nivel_atividade='$ativ_fisica' WHERE id=$id";
    $result = mysqli_query($conn, $sql);
    $result_semana_peso = mysqli_query($conn, $sql_semana_peso);
    if ($result) {
        if($result_semana_peso){
            header("Location: ../profile.php?success=Perfil atualizado com sucesso.");
        }else{
            header("Location: ../profile.php?error=Erro ao editar o gráfico do usuário.");
        }
    } else {
        header("Location: ../profile.php?error=Erro ao atualizar perfil.");
    }
}else{
    header("Location: ../home.php");
}
?>