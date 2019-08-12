<?php
require_once('connect.php');


$sql = "SELECT * FROM mulheres_entretenimento";  //This is where I specify what data to query
$result = $conn->query($sql);

$data = array();
while($enr = mysqli_fetch_assoc($result)){
    $a = array($enr['id'], $enr['nome'],$enr['profissao'],$enr['data_nascimento'],$enr['local_nascimento'],$enr['destaques'],$enr['imagem']);
    array_push($data, $a);
    
}

echo json_encode($data);
?>