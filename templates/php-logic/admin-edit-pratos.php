<?php

include_once 'connection.php';

if(isset($_GET['id']) && isset($_GET['tabela'])){
    $id = $_GET['id'];
    $tabela = $_GET['tabela'];

    $sql = "SELECT * FROM $tabela WHERE id = $id";
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
                <title>Editar Prato: <?php echo $row['nome'] ?></title>
                <link rel="shortcut icon" href="" type="image/x-icon">
            </head>
            <body>
            <div class="container">
            <h2 class="text-center my-5">Editar Prato: <?php echo $row['nome'] ?></h2>
            <form method="post" id="admin-edit" action="admin-save-edit-pratos.php">
                <article style="overflow-x:auto;" class="row">
                <input type="hidden" name="id" value="<?php echo $id ?>" readonly>
                <input type="hidden" name="tabela" value="<?php echo $tabela ?>">
                
                <label class="col-2" style="line-height: 44px;" class="col-2" for="new_nome">Nome Prato:</label class="col-2">
                <input class="col-10" class="col-10" type="text" name="new_nome" value="<?php echo $row['nome'] ?>" required><br>
                <hr>
                <label class="col-2" style="line-height: 44px;" for="new_peso">Peso:</label class="col-2">
                <input class="col-10" type="text" name="new_peso" value="<?php echo $row['peso'] ?>" required><br>
                <hr>
                <label class="col-2" style="line-height: 44px;" for="new_calorias">Calorias:</label class="col-2">
                <input class="col-10" type="number" name="new_calorias" value="<?php echo $row['calorias'] ?>" required><br>
                <hr>
                <label class="col-2" style="line-height: 44px;" for="new_carboidratos">Carboidratos:</label class="col-2">
                <input class="col-10" type="number" name="new_carboidratos" value="<?php echo $row['carboidratos'] ?>" required><br>
                <hr>
                <label class="col-2" style="line-height: 44px;" for="new_gorduras">Gorduras:</label class="col-2">
                <input class="col-10" type="number" name="new_gorduras" value="<?php echo $row['gorduras'] ?>" required><br>
                <hr>
                <label class="col-2" style="line-height: 44px;" for="new_proteinas">Proteínas:</label class="col-2">
                <input class="col-10" type="number" name="new_proteinas" value="<?php echo $row['proteinas'] ?>" required><br>
                <hr>
                <?php
                $sql = "SHOW COLUMNS FROM $tabela LIKE 'opcao'";
                $result = mysqli_query($conn, $sql);
                $isOpcao = '';
                if ($result && mysqli_num_rows($result) > 0) {
                    $isOpcao = 'sim';
                ?>
                <label class="col-2" style="line-height: 44px;" for="new_opcao">Opção:</label class="col-2">
                <input class="col-10" type="text" name="new_opcao" value="<?php echo $row['opcao'] ?>" required><br>
                <hr>
                <?php
                };
                ?>
                <input type="hidden" name="isOpcao" value="<?php echo $isOpcao ?>">
                <span class="p-3 bg-warning text-center mb-3">1 = Sim <span class="mx-3">|</span> 0 = Não</span>
                <label class="col-2" style="line-height: 44px;" for="new_muito_carboidratos">Alto Carboidratos:</label class="col-2">
                <input class="col-10" type="number" name="new_muito_carboidratos" value="<?php echo $row['muito_carboidratos'] ?>" required><br>
                <hr>
                <label class="col-2" style="line-height: 44px;" for="new_muita_proteina">Baixa Proteínas:</label class="col-2">
                <input class="col-10" type="number" name="new_muita_proteina" value="<?php echo $row['muita_proteina'] ?>" required><br>
                <hr>
                <label class="col-2" style="line-height: 44px;" for="new_pouco_carboidrato">Baixo Carboidrato:</label class="col-2">
                <input class="col-10" type="number" name="new_pouco_carboidrato" value="<?php echo $row['pouco_carboidrato'] ?>" required><br>  
                <hr>
                <label class="col-2" style="line-height: 44px;" for="new_pouca_gordura">Baixa Gordura:</label class="col-2">
                <input class="col-10" type="number" name="new_pouca_gordura" value="<?php echo $row['pouca_gordura'] ?>" required><br>
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