<?php

include_once 'connection.php';
if(isset($_GET['confirm'])){

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
        <title>Adicionar Avaliação</title>
        <link rel="shortcut icon" href="" type="image/x-icon">
    </head>
    <body>
    <div class="container">
    <h2 class="text-center text-success my-5">Adicionar Avaliação</h2>
    <form method="post" id="admin-edit" action="">
        <article style="overflow-x:auto;" class="row">
        <label class="col-2" style="line-height: 44px;" class="col-2" for="add_nome">Nome:</label class="col-2">
        <input class="col-10" class="col-10" type="text" name="add_nome" required><br>
        <hr>
        <label class="col-2" style="line-height: 44px;" for="add_descricao">Descrição:</label class="col-2">
        <input class="col-10" type="text" name="add_descricao" required><br>
        <a class="text-white mt-4 col-1 btn btn-secondary" href="../admin.php">Voltar</a>
        <button class="btn btn-success mt-4 mx-3 col-1"><input class="col-10" class="text-white" style="background: none; color:white !important;" name="add_prato" type="submit" value="Adicionar">
    </form>
    </div>
    </body>
    </html>
    <?php
    
    if (isset($_POST['add_prato'])) {
        $nome = $_POST['add_nome'];
        $descricao = $_POST['add_descricao'];
        
        $sql = "INSERT INTO avaliacoes (nome, descricao) VALUES ('$nome', '$descricao')";
        $result = mysqli_query($conn, $sql);
        if($result){
            $mensagem = "Avaliação de '$nome' enviada com sucesso!";
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