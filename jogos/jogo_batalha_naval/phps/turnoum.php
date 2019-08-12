<?php
require_once ("conexao.php");


$posi = $_GET['posi'];
$tabela = $_GET['turno'];

$sql = mysqli_query($conn,"UPDATE onlinemode SET vez_1=$tabela where nome_sala='$posi'");


$row = null;

if ($sql){
	
	
	echo 1;
	   
    mysqli_close($conn);
 
} else {
	echo 2;
}


?>