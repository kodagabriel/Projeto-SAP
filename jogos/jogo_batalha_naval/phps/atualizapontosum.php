<?php
require_once ("conexao.php");


$posi = $_GET['posi'];
$pontos = $_GET['pontos'];


$sql = mysqli_query($conn,"UPDATE onlinemode SET  pontos_1 = $pontos   where nome_sala='$posi'");


$row = null;

if ($sql){
	
	
	
	echo 1;
	   
    mysqli_close($conn);
 
} else {
	echo 2;
}


?>