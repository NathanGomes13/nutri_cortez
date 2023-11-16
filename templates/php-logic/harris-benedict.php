<?php

include_once "connection.php";

$usuario_id = mysqli_real_escape_string($conn, $_SESSION['id']); //proteção contra injeções sql

$sql = "SELECT * FROM usuarios WHERE ID = $usuario_id";
$resultado = mysqli_query($conn, $sql);

if($resultado){
    $usuario = $resultado->fetch_assoc();
    $sexo = $usuario['sexo'];
    $peso = $usuario['peso'];
    $altura = $usuario['altura'];
    $idade = $usuario['idade'];
    $nivel_atividade = $usuario['nivel_atividade'];
    $objetivo = $usuario['objetivo'];
};

// Fatores de atividade física
$fatores_atividade = [
    "sedentario" => 1.2,
    "leve" => 1.375,
    "moderado" => 1.55,
    "ativo" => 1.725,
    "muito_ativo" => 1.9
];

// Cálculo das necessidades calóricas diárias estimadas
if ($sexo == "masculino") {
    $tmb = 88.362 + (13.397 * $peso) + (4.799 * $altura) - (5.677 * $idade);
} elseif ($sexo == "feminino") {
    $tmb = 447.593 + (9.247 * $peso) + (3.098 * $altura) - (4.330 * $idade);
} else {
    echo "Sexo inválido.";
    exit;
}

// Definição das necessidades calóricas com base no objetivo
if ($objetivo == "perder_peso") {
    $necessidades_caloricas = $tmb * $fatores_atividade[$nivel_atividade] - 500; // Defina um déficit calórico
} elseif ($objetivo == "manter_peso") {
    $necessidades_caloricas = $tmb * $fatores_atividade[$nivel_atividade];
} elseif ($objetivo == "ganhar_peso") {
    $necessidades_caloricas = $tmb * $fatores_atividade[$nivel_atividade] + 300; // Defina um superávit calórico
} elseif ($objetivo == "ganhar_massa_muscular") {
    $necessidades_caloricas = $tmb * $fatores_atividade[$nivel_atividade] + 500; // Defina um superávit calórico maior
}

$proteinas_percent = 25; // Porcentagem de proteínas desejada (exemplo: 25%)
#gorduras_percent = 30; // Porcentagem de gorduras desejada (exemplo: 30%)
$gorduras_percent = 30; // Porcentagem de gorduras desejada (exemplo: 30%)
$carboidratos_percent = 100 - ($proteinas_percent + $gorduras_percent); // Calcula a porcentagem restante para carboidratos

// Cálculo da quantidade de calorias para cada macronutriente
$calorias_proteinas = ($proteinas_percent / 100) * $necessidades_caloricas;
$calorias_gorduras = ($gorduras_percent / 100) * $necessidades_caloricas;
$calorias_carboidratos = ($carboidratos_percent / 100) * $necessidades_caloricas;

// Cálculo da quantidade de gramas para cada macronutriente
$gramas_proteinas = $calorias_proteinas / 4; // 4 calorias por grama de proteína
$gramas_gorduras = $calorias_gorduras / 9; // 9 calorias por grama de gordura
$gramas_carboidratos = $calorias_carboidratos / 4; // 4 calorias por grama de carboidrato

// Calculo de calorias para cada refeição ============================================================

// Proporções de calorias para cada refeição (porcentagem)
$proporcao_cafe_manha = 20; // Porcentagem para o café da manhã
$proporcao_almoco = 35; // Porcentagem para o almoço
$proporcao_janta = 30; // Porcentagem para o jantar
$proporcao_lanches = 9; // Porcentagem para os lanches
$proporcao_salada = 6; // Porcentagem para a salada

// Cálculo das calorias para cada refeição
$calorias_cafe_manha = ($proporcao_cafe_manha / 100) * $necessidades_caloricas;
$calorias_almoco = ($proporcao_almoco / 100) * $necessidades_caloricas;
$calorias_janta = ($proporcao_janta / 100) * $necessidades_caloricas;
$calorias_lanches = ($proporcao_lanches / 100) * $necessidades_caloricas;
$calorias_salada= ($proporcao_salada / 100) * $necessidades_caloricas;

// Cálculo dos macronutrientes para cada refeição (café da manhã)
// $proteinas_cafe_manha = ($gramas_proteinas / $necessidades_caloricas) * $calorias_cafe_manha;
// $gorduras_cafe_manha = ($gramas_gorduras / $necessidades_caloricas) * $calorias_cafe_manha;
// $carboidratos_cafe_manha = ($gramas_carboidratos / $necessidades_caloricas) * $calorias_cafe_manha;


echo "<div class='harris-box'>";
echo "<div class='informacoes-nutricionais-box'>";
echo 
"<div class='p'>
    <input class='input-progress-bar' type='range' min='0' max='180' step='1' value='90'/>
    <div class='overflow-bottom'>
        <div class='semi-circle'></div>
        <div class='content'>
            <span class='tit-infos'>Calorias</span><br>
            <span class='infos'><span id='atual_calorias'>0</span> / <span id='total_calorias'>" . round($necessidades_caloricas) . "</span></span>
        </div>
    </div>
</div>";
echo 
"<div class='p'>
    <span class='tit-infos'>Carboidratos</span>
    <div class='progresso-bar'>
        <div class='progresso' id='progresso-carboidratos'>
        </div>
    </div>
    <span class='infos'><span id='atual_carboidratos'>0</span> / <span id='total_carboidratos'>" . round($gramas_carboidratos) . "</span> g</span>
</div>";    
echo 
"<div class='p'>
    <span class='tit-infos'>Proteínas</span>
    <div class='progresso-bar'>
        <div class='progresso' id='progresso-proteinas'>
        </div>
    </div>
    <span class='infos'><span id='atual_proteinas'>0</span> / <span id='total_proteinas'>" . round($gramas_proteinas) . "</span> g</span>
</div>";
echo 
"<div class='p'>
    <span class='tit-infos'>Gorduras</span>
    <div class='progresso-bar'>
        <div class='progresso' id='progresso-gorduras'>
        </div>
    </div>
    <span class='infos'><span id='atual_gorduras'>0</span> / <span id='total_gorduras'>" . round($gramas_gorduras) . "</span> g</span>
</div>";   
echo "</div>";
echo "</div>";

echo "<div class='calorias-refeicoes hide'>";
echo "<span id='calorias-cafe'>" . round($calorias_cafe_manha) . "</span>";    
echo "<span id='calorias-almoco'>" . round($calorias_almoco) . "</span>";    
echo "<span id='calorias-janta'>" . round($calorias_janta) . "</span>";    
echo "<span id='calorias-lanches'>" . round($calorias_lanches) . "</span>";
echo "<span id='calorias-salada'>" . round($calorias_salada) . "</span>";    
echo "</div>";
?>