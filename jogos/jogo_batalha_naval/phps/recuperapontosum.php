<?php
require_once ("conexao.php");


$posi = $_GET['posi'];



$sql = mysqli_query($conn,"SELECT  pontos_1 from onlinemode where nome_sala='$posi'");


$row = null;

if ($sql){
	
	$row = mysqli_fetch_assoc($sql);
	$pass1 = $row['pontos_1'];
	echo $pass1;
	   
    mysqli_close($conn);
 
} else {
	echo 2;
}


?>