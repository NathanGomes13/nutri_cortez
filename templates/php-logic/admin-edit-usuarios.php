<?php

include_once 'connection.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $sql = "SELECT * FROM usuarios WHERE id = $id";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        if ($result && mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);

            ?>
            <!DOCTYPE html>
            <html lang="pt-br">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <!-- bootstrap -->
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
                <!-- Site -->
                <link rel="stylesheet" href="../../static/styles/style.css">
                <link rel="stylesheet" href="../../static/styles/admin.css">
                <title>Editar Usuário: <?php echo $row['nome'] ?></title>
                <link rel="shortcut icon" href="" type="image/x-icon">
            </head>
            <body>
            <div class="container">
            <h2 class="text-center my-5">Editar Usuário: <?php echo $row['nome'] ?></h2>
            <form method="post" id="admin-edit" action="admin-save-edit-usuarios.php">
                <article style="overflow-x:auto;" class="row">
                <input type="hidden" name="id" value="<?php echo $id ?>" readonly>
                
                <label class="col-2" style="line-height: 44px;" class="col-2" for="new_nome">Nome:</label class="col-2">
                <input class="col-10" class="col-10" type="text" name="new_nome" value="<?php echo $row['nome'] ?>" required><br>
                <hr>
                <label class="col-2" style="line-height: 44px;" for="new_email">E-mail:</label class="col-2">
                <input class="col-10" type="email" name="new_email" value="<?php echo $row['email'] ?>" required><br>
                <hr>
                <label class="col-2" style="line-height: 44px;" for="new_phone">Phone:</label class="col-2">
                <input class="col-10" type="number" name="new_phone" value="<?php echo $row['phone'] ?>"><br>
                <hr>
                <label class="col-2" style="line-height: 44px;" for="new_idade">Idade:</label class="col-2">
                <input class="col-10" type="number" name="new_idade" value="<?php echo $row['idade'] ?>" required><br>
                <hr>
                <label class="col-2" style="line-height: 44px;" for="new_sexo">Sexo:</label class="col-2">
                <input class="col-10" type="text" name="new_sexo" value="<?php echo $row['sexo'] ?>" required><br>
                <hr>
                <label class="col-2" style="line-height: 44px;" for="new_peso">Peso:</label class="col-2">
                <input class="col-10" type="number" name="new_peso" value="<?php echo $row['peso'] ?>" required><br>
                <hr>
                <label class="col-2" style="line-height: 44px;" for="new_altura">Altura:</label class="col-2">
                <input class="col-10" type="number" name="new_altura" value="<?php echo $row['altura'] ?>" required><br>
                <hr>
                <label class="col-2" style="line-height: 44px;" for="new_nivel_atividade">Nivel de Atividade:</label class="col-2">
                <input class="col-10" type="text" name="new_nivel_atividade" value="<?php echo $row['nivel_atividade'] ?>" required><br>
                <hr>
                <label class="col-2" style="line-height: 44px;" for="new_objetivo">Objetivo:</label class="col-2">
                <input class="col-10" type="text" name="new_objetivo" value="<?php echo $row['objetivo'] ?>" required><br>
                <hr>
                <a class="text-white mt-4 col-1 btn btn-secondary" href="../admin.php">Voltar</a>
                <button class="btn btn-success mt-4 mx-3 col-1"><input class="col-10" class="text-white" style="background: none; color:white !important;" type="submit" value="Salvar"></button>
            </form>
            </article>
            </div>
            </body>
            </html>
            <?php
        }
    } else {
        $mensagem = "Erro(02) no envio de dados para a edição.";
        header("Location: ../admin.php?mensagem=" . urlencode($mensagem));
        exit();
    }
} else {
    $mensagem = "Erro(01) na solicitação de dados para a edição.";
    header("Location: ../admin.php?mensagem=" . urlencode($mensagem));
    exit();
}
?>