<?php
$servername = "localhost";
$username = "root";
$password = "";
$database ="progweb2_db";

$conn = new mysqli($servername, $username, $username, $database);

if ($conn->connect_error){
    die("Falha na conexão ". $conn->connect_error);
} 

function buscarProduto($campo, $valor) {
    global $conn;
    $stmt = $conn->prepare("select * from produtos where $campo LIKE ?");
    $valor ="%$valor%";
    $stmt->bind_param("s", $valor);
    return $stmt->get_result();
    
}
?>