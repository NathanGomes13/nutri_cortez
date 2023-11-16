<?php

session_start();
include_once 'connection.php';

$home_id = $_SESSION['id'];

$sql = "SELECT ID, id_usuario, title, color, start, end, cafe_da_manha, almoco, almoco_montar, janta, janta_montar, lanches, salada, calorias, carboidratos, proteinas, gorduras FROM eventos_calendario";
$result = mysqli_query($conn, $sql);

$eventos = [];


if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        if ($row["id_usuario"] == $home_id) {
            $cafe_da_manha = unserialize($row["cafe_da_manha"]);
            $almoco = unserialize($row["almoco"]);
            $almoco_montar = unserialize($row["almoco_montar"]);
            $janta = unserialize($row["janta"]);
            $janta_montar = unserialize($row["janta_montar"]);
            $lanches = unserialize($row["lanches"]);
            $salada = unserialize($row["salada"]);

            $evento = [
                "id" => $row["ID"],
                "id_usuario" => $row["id_usuario"],
                "title" => $row["title"],
                "color" => $row["color"],
                "start" => $row["start"],
                "end" => $row["end"],
                "cafe_da_manha" => $cafe_da_manha,
                "almoco" => $almoco,
                "almoco_montar" => $almoco_montar,
                "janta" => $janta,
                "janta_montar" => $janta_montar,
                "lanches" => $lanches,
                "salada" => $salada,
                "calorias" => $row["calorias"],
                "carboidratos" => $row["carboidratos"],
                "proteinas" => $row["proteinas"],
                "gorduras" => $row["gorduras"],
            ];

            $eventos[] = $evento;
        }
    } 
}

echo json_encode($eventos);

?>