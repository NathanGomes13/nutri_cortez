<?php

include_once 'connection.php';
if(isset($_GET['tabela'])){
    $tabela = $_GET['tabela'];

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
        <title>Adicionar Prato</title>
        <link rel="shortcut icon" href="" type="image/x-icon">
    </head>
    <body>
    <div class="container">
    <h2 class="text-center text-success my-5">Adicionar Prato na tabela: <?php echo $tabela ?></h2>
    <form method="post" id="admin-edit" action="">
        <article style="overflow-x:auto;" class="row">
        <label class="col-2" style="line-height: 44px;" class="col-2" for="add_nome">Nome Prato:</label class="col-2">
        <input class="col-10" class="col-10" type="text" name="add_nome" required><br>
        <hr>
        <label class="col-2" style="line-height: 44px;" for="add_peso">Peso:</label class="col-2">
        <input class="col-10" type="text" name="add_peso" required><br>
        <hr>
        <label class="col-2" style="line-height: 44px;" for="add_calorias">Calorias:</label class="col-2">
        <input class="col-10" type="number" name="add_calorias" required><br>
        <hr>
        <label class="col-2" style="line-height: 44px;" for="add_carboidratos">Carboidratos:</label class="col-2">
        <input class="col-10" type="number" name="add_carboidratos" required><br>
        <hr>
        <label class="col-2" style="line-height: 44px;" for="add_gorduras">Gorduras:</label class="col-2">
        <input class="col-10" type="number" name="add_gorduras" required><br>
        <hr>
        <label class="col-2" style="line-height: 44px;" for="add_proteinas">Proteínas:</label class="col-2">
        <input class="col-10" type="number" name="add_proteinas" required><br>
        <hr>
        <?php

        $sql = "SHOW COLUMNS FROM $tabela LIKE 'opcao'";
        $result = mysqli_query($conn, $sql);
        $isOpcao = '';
        if ($result && mysqli_num_rows($result) > 0) {
            $isOpcao = 'sim';
        ?>
        <label class="col-2" style="line-height: 44px;" for="add_opcao">Opção:</label class="col-2">
        <input class="col-10" type="text" name="add_opcao" required><br>
        <hr>
        <?php
        };
        ?>
        <span class="p-3 bg-warning text-center mb-3">1 = Sim <span class="mx-3">|</span> 0 = Não</span>
        <label class="col-2" style="line-height: 44px;" for="add_muito_carboidratos">Alto Carboidratos:</label class="col-2">
        <input class="col-10" type="number" name="add_muito_carboidratos" required><br>
        <hr>
        <label class="col-2" style="line-height: 44px;" for="add_muita_proteina">Baixa Proteínas:</label class="col-2">
        <input class="col-10" type="number" name="add_muita_proteina" required><br>
        <hr>
        <label class="col-2" style="line-height: 44px;" for="add_pouco_carboidrato">Baixo Carboidrato:</label class="col-2">
        <input class="col-10" type="number" name="add_pouco_carboidrato" required><br>
        <hr>
        <label class="col-2" style="line-height: 44px;" for="add_pouca_gordura">Baixa Gordura:</label class="col-2">
        <input class="col-10" type="number" name="add_pouca_gordura" required><br>
        <hr>
        <a class="text-white mt-4 col-1 btn btn-secondary" href="../admin.php">Voltar</a>
        <button class="btn btn-success mt-4 mx-3 col-1"><input class="col-10" class="text-white" style="background: none; color:white !important;" name="add_prato" type="submit" value="Adicionar">
    </form>
    </div>
    </body>
    </html>
    <?php
    
    if (isset($_POST['add_prato'])) {
        $nome = $_POST['add_nome'];
        $peso = $_POST['add_peso'];
        $calorias = $_POST['add_calorias'];
        $carboidratos = $_POST['add_carboidratos'];
        $gorduras = $_POST['add_gorduras'];
        $proteinas = $_POST['add_proteinas'];
        $muito_carboidratos = $_POST['add_muito_carboidratos'];
        $muita_proteina = $_POST['add_muita_proteina'];
        $pouco_carboidrato = $_POST['add_pouco_carboidrato'];
        $pouca_gordura = $_POST['add_pouca_gordura'];

        if($isOpcao == 'sim'){
            $opcao = $_POST['add_opcao'];
            $sql = "INSERT INTO $tabela (nome, peso, calorias, carboidratos, gorduras, proteinas, opcao, tabela_origem, muito_carboidratos, muita_proteina, pouco_carboidrato, pouca_gordura) VALUES ('$nome', '$peso', '$calorias', '$carboidratos', '$gorduras', '$proteinas', '$opcao', '$tabela', '$muito_carboidratos', '$muita_proteina', '$pouco_carboidrato', '$pouca_gordura')";
        }else{
            $sql = "INSERT INTO $tabela (nome, peso, calorias, carboidratos, gorduras, proteinas, tabela_origem, muito_carboidratos, muita_proteina, pouco_carboidrato, pouca_gordura) VALUES ('$nome', '$peso', '$calorias', '$carboidratos', '$gorduras', '$proteinas', '$tabela', '$muito_carboidratos', '$muita_proteina', '$pouco_carboidrato', '$pouca_gordura')";
        }

        $result = mysqli_query($conn, $sql);
        if($result){
            $mensagem = "Prato '$nome' enviado com sucesso!";
            header("Location: ../admin.php?mensagem=" . urlencode($mensagem));
            exit();
        }else{
            $mensagem = "Erro(02) no envio de dados para a adição.";
            header("Location: ../admin.php?mensagem=" . urlencode($mensagem));
            exit();
        }
    }

} else {    
    $mensagem = "Erro(01) na solicitação de dados para a adição.";
    header("Location: ../admin.php?mensagem=" . urlencode($mensagem));
    exit();
}
?>