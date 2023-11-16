<?php

include_once "connection.php";

$alimentoId = $_POST['alimentoId'];
$tabelaOrigem = $_POST['tabelaOrigem'];

$sql = "SELECT id, nome, peso, calorias, carboidratos, gorduras, proteinas FROM $tabelaOrigem WHERE id = $alimentoId";

$resultado = mysqli_query($conn, $sql);

if (!$resultado) {
    die('Erro na consulta: ' . mysqli_error($conn));
}

// Exibir as informações nutricionais do alimento
$row = mysqli_fetch_assoc($resultado);
echo '<h2>' . $row['nome'] . '</h2>';
echo '<div class="info-box">';
echo '<span id="receita-span">Receita recomendada</span>';
echo '<div id="main-top-info">';
echo '<p><span class="info-tit">Peso(g)</span><span class="info-content"> ' . $row['peso'] . '</span></p>';
echo '<p><span class="info-tit">Calorias</span><span class="info-content"> ' . $row['calorias'] . '</span></p>';
echo '</div>';
echo '<span id="quantidade-span">Quantidade por porção</span>';
echo '<div id="main-mid-info">';
echo '<p><span class="info-tit">Carboidratos</span><span class="info-content"> ' . $row['carboidratos'] . 'g</span></p>';
echo '<p><span class="info-tit">Gorduras</span><span class="info-content"> ' . $row['gorduras'] . 'g</span></p>';
echo '<p><span class="info-tit">Proteínas</span><span class="info-content"> ' . $row['proteinas'] . 'g</span></p>';
echo '</div>';
echo '</div>';
echo '<span id="bottom-info-span" class="text-center">Informações geradas por inteligências artificiais.</span>';

?>