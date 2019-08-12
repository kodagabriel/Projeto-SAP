<?php
require_once('connect.php');


$sql = "SELECT * FROM mulheres_negras";  //This is where I specify what data to query
$result = $conn->query($sql);

$data = array();
while($enr = mysqli_fetch_assoc($result)){
    $a = array($enr['id'], $enr['nome'],$enr['nascimento'],$enr['informacoes'],$enr['imagem']);
    array_push($data, $a);
    
}

echo json_encode($data);
?>