<?php
require_once ("conexao.php");


$posi = $_GET['posi'];
$pontos = $_GET['coordenada'];


$sql = mysqli_query($conn,"UPDATE onlinemode SET coordenada = '$pontos' WHERE nome_sala='$posi'");




if ($sql){
	
	
	
	echo 1;
	   
    mysqli_close($conn);
 
} else {
	echo 2;
}


?>