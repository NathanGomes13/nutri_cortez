<?php
include_once "connection.php";

// Obtenha o nome do prato da requisição AJAX
if (isset($_GET['nome']) && isset($_GET['tabela'])) {
    $nome_prato = mysqli_real_escape_string($conn, $_GET['nome']);
    $tabela = mysqli_real_escape_string($conn, $_GET['tabela']);

    // Consulte o banco de dados para obter os detalhes do prato com base no nome
    $sql = "SELECT * FROM $tabela WHERE nome = '$nome_prato'";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);

        // Formate as informações detalhadas em HTML
        $detalhes = "
            <h2>" . $row['nome'] . "</h2>
            <p>Calorias: " . $row['calorias'] . "</p>
            <p>Quantidade: " . $row['peso'] . "</p>
            <p>Carboidratos: " . $row['carboidratos'] . "</p>
            <p>Proteínas: " . $row['proteinas'] . "</p>
            <p>Gorduras: " . $row['gorduras'] . "</p>
        ";

        $macronutrientes = array(
            'totalCalorias' => $row['calorias'],
            'totalCarboidratos' => $row['carboidratos'],
            'totalProteinas' => $row['proteinas'],
            'totalGorduras' => $row['gorduras'],
        );
    
        echo '<span class="hide">';
        echo json_encode($macronutrientes);
        echo '</span>';

        echo $detalhes;
    } else {
        echo "Nenhum prato selecionado.";
        header("Location: ../home.php");
    }
} else {
    echo "Erro(02) na requisição.";
    header("Location: ../home.php");
    //nome ou tabela não fornecidos na requisição
}
?>