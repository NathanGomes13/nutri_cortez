<?php

include_once 'connection.php';


$sql = "SELECT nome, descricao FROM avaliacoes";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo '<div class="swiper-slide">';
        echo '<div class="content-box">';
        echo '<i class="fa-solid fa-quote-left"></i>';
        echo '<p>' . $row['descricao'] . '</p>';
        echo '</div>';
        echo '<span>' . $row['nome'] . '</span>';
        echo '</div>';
    }
} else {
echo "";
}

?>