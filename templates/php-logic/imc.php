<?php

include_once "connection.php";

$id = $_SESSION['id'];

$sql = "SELECT * FROM usuarios WHERE id = '$id'";
$result = mysqli_query($conn, $sql);

if($result){
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);

        $nome = $row['nome'];
        $peso = $row['peso'];
        $peso = number_format($peso, 2);
        $altura = $row['altura'] / 100;
        
        $imc = $peso / ($altura * $altura);
        $imc = number_format($imc, 2);

        if ($imc >= 40) {
            echo "Obeso Mórbido (IMC: $imc)";
        } elseif ($imc >= 30.1) {
            echo "Obeso (IMC: $imc)";
        } elseif ($imc >= 25) {
            echo "Levemente acima do peso (IMC: $imc)";
        } elseif ($imc >= 18.5) {
            echo "Peso saudável (IMC: $imc)";
        } else {
            echo "Abaixo do peso (IMC: $imc)";
        }
    }
}
?>