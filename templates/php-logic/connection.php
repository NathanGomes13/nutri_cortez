<?php

$servername= "localhost";
$username = "root";
$pass = "";
$db = "nutri_cortez_db";


$conn = mysqli_connect($servername, $username, $pass, $db);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
  // echo "Conectado!";
?>