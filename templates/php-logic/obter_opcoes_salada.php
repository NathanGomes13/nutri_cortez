<option value=""></option>
<?php
    include_once "connection.php";

    $sql = "SELECT nome, calorias FROM pratos_salada";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $nome = $row['nome'];
            $calorias = $row['calorias'];

            echo "<option value='$nome' data-calorias='$calorias'>$nome</option>";
        }
    } else {
        echo "<option value=''>Nenhum prato encontrado</option>";
    }
?>