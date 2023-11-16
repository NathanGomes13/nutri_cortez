<?php

include_once 'connection.php';

$preferencia = $_POST['preferencia'];
$tabela = $_POST['tabela'];

// adaptação
$coluna_preferencia = '';
$macronutriente_selecionado = '';
$ordem = 'DESC';

if ($preferencia === 'muito_carboidrato') {
    $coluna_preferencia = 'muito_carboidratos';
    $macronutriente_selecionado = 'carboidratos';
    $ordem = 'DESC';
}
elseif ($preferencia === 'muita_proteina') {
    $coluna_preferencia = 'muita_proteina';
    $macronutriente_selecionado = 'proteinas';
    $ordem = 'DESC';
}
elseif ($preferencia === 'pouco_carboidrato') {
    $coluna_preferencia = 'pouco_carboidrato';
    $macronutriente_selecionado = 'carboidratos';
    $ordem = 'ASC';
}
elseif ($preferencia === 'pouca_gordura') {
    $coluna_preferencia = 'pouca_gordura';
    $macronutriente_selecionado = 'gorduras';
    $ordem = 'ASC';
}

// Crie uma consulta SQL para obter pratos com base na preferência e limite de calorias
$sql = "SELECT id, nome, calorias, carboidratos, gorduras, proteinas FROM $tabela WHERE $coluna_preferencia = 1 ORDER BY $macronutriente_selecionado $ordem LIMIT 1";
$result = mysqli_query($conn, $sql);

$prato = "";

if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);

    $prato = $row['nome'];
};

echo $prato;

?>