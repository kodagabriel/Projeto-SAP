<?php
require_once('connect.php');


$sql = "SELECT * FROM mulheres_ciencia";  //This is where I specify what data to query
$result = $conn->query($sql);

$data = array();
while($enr = mysqli_fetch_assoc($result)){
    $a = array($enr['id'], $enr['nome'],$enr['nacionalidade'],$enr['formacao_academica'],$enr['profissao'],$enr['feitos'],$enr['imagem']);
    array_push($data, $a);
    
}

echo json_encode($data);
?>