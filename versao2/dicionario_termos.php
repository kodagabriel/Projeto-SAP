<?php
require_once('connect.php');


$sql = "SELECT * FROM dicionario ORDER BY titulo" ;  //This is where I specify what data to query
$result = $conn->query($sql);

$data = array();
while($enr = mysqli_fetch_assoc($result)){
    $a = array($enr['id'],$enr['titulo'], $enr['descricao']);
    array_push($data, $a);
    
}

echo json_encode($data);
?>