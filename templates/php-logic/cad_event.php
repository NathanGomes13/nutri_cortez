<?php
session_start();

include_once 'connection.php';

if($_POST['color']){ //if para caso não seja digitado o url à mão

$id_usuario = $_SESSION['id'];
$title = $_POST['title'];
$color = $_POST['color'];
$start = $_POST['start'];
$end = $_POST['end'];

$json_cafe_da_manha = serialize($_POST['select_cafe_da_manha']);
$json_almoco = serialize($_POST['select_almoco']);
$json_almoco_montar = serialize($_POST['select_montar_almoco']);
$json_janta = serialize($_POST['select_janta']);
$json_janta_montar = serialize($_POST['select_montar_janta']);
$json_lanches = serialize($_POST['select_lanches']);
$json_salada = serialize($_POST['select_salada']);

//Converter a data e hora do formato brasileiro para o formato do Banco de Dados
$data_start = str_replace('/', '-', $start);
$data_start_conv = date("Y-m-d H:i:s", strtotime($data_start));
$data_end = str_replace('/', '-', $end);
$data_end_conv = date("Y-m-d H:i:s", strtotime($data_end));

$atual_calorias_input = $_POST['atual_calorias_input'];
$atual_carboidratos_input = $_POST['atual_carboidratos_input'];
$atual_proteinas_input = $_POST['atual_proteinas_input'];
$atual_gorduras_input = $_POST['atual_gorduras_input'];

$sql = "INSERT INTO eventos_calendario (id_usuario, title, color, start, end, cafe_da_manha, almoco, almoco_montar, janta, janta_montar, lanches, salada, calorias, carboidratos, proteinas, gorduras) VALUES
    ('$id_usuario','$title','$color','$data_start_conv','$data_end_conv', '$json_cafe_da_manha', '$json_almoco', '$json_almoco_montar', '$json_janta', '$json_janta_montar', '$json_lanches', '$json_salada', '$atual_calorias_input', '$atual_carboidratos_input', '$atual_proteinas_input', '$atual_gorduras_input')";
    $query = mysqli_query($conn, $sql);

if ($query) {
    $mensagem = 'Refeição ' . $title . ' cadastrada! ' . $start;

    $retorna = ['sit' => true, 'msg' => '<div class="alert alert-success show" role="alert" id="msg-cad-calend">' . $mensagem . '</div>'];
    $_SESSION['msg'] = '<div class="alert alert-success show" role="alert" id="msg-cad-calend">' . $mensagem . '</div>';
} else {
    $retorna = ['sit' => false, 'msg' => '<div class="alert alert-danger" role="alert" id="msg-cad-calend">Erro: Refeição não cadastrada.</div>'];
}   

header("Content-type: application/json;charset=utf8");
echo json_encode($retorna);
}else{
    header("Location: ../home.php");
};