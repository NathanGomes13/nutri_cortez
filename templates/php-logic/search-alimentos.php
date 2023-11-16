<?php

include_once "connection.php";

$termo_pesquisa = $_POST['alimento'];

$sql = "SELECT id, nome, peso, calorias, carboidratos, gorduras, proteinas, tabela_origem FROM pratos_cafe_da_manha WHERE nome LIKE '%$termo_pesquisa%'
        UNION SELECT id, nome, peso, calorias, carboidratos, gorduras, proteinas, tabela_origem FROM pratos_lanches WHERE nome LIKE '%$termo_pesquisa%'
        UNION SELECT id, nome, peso, calorias, carboidratos, gorduras, proteinas, tabela_origem FROM pratos_almoco_e_janta WHERE nome LIKE '%$termo_pesquisa%'
        UNION SELECT id, nome, peso, calorias, carboidratos, gorduras, proteinas, tabela_origem FROM pratos_opcoes_separadas WHERE nome LIKE '%$termo_pesquisa%'
        UNION SELECT id, nome, peso, calorias, carboidratos, gorduras, proteinas, tabela_origem FROM pratos_salada WHERE nome LIKE '%$termo_pesquisa%'";

$resultado = mysqli_query($conn, $sql);

if (!$resultado) {
    die('Erro na consulta: ' . mysqli_error($conn));
}

$html_resultados = '<ul>';
while ($row = mysqli_fetch_assoc($resultado)) {
    $html_resultados .= '<li><a href="#!" class="alimentos-link" data-alimento-id="' . $row['id'] . '" data-tabela-origem="' . $row['tabela_origem'] . '">' . $row['nome'] . '</a></li>';
}
$html_resultados .= '</ul>';

echo $html_resultados;

?>