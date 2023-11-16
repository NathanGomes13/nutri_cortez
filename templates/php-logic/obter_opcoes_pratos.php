<option value=""></option>
<?php
    include_once "connection.php";

    $sql = "SELECT opcao, nome, calorias FROM pratos_almoco_e_janta ORDER BY opcao";
    $result = mysqli_query($conn, $sql);

    $titulo_atual = ""; // Variável para armazenar o título atual

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $opcao = $row['opcao'];
            $nome = $row['nome'];
            $calorias = $row['calorias'];
            
            // Verifica se a opção mudou e adiciona um título
            if ($opcao != $titulo_atual) {
                echo "<optgroup label='$opcao'>";
                $titulo_atual = $opcao;
            }
            
            echo "<option value='$nome' data-calorias='$calorias'>$nome</option>";
        }
    } else {
        echo "<option value=''>Nenhum prato encontrado</option>";
    }
?>