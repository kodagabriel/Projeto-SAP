<?php
require_once ("conexao.php");


$posi = $_GET['posi'];
$tabela = $_GET['tabela'];

$sql = mysqli_query($conn,"UPDATE onlinemode SET tabela='$tabela' where nome_sala='$posi'");


$row = null;

if ($sql){
	
	$pass1 = $row['tabela'];
	echo $pass1;
	   
    mysqli_close($conn);
 
} else {
	echo 2;
}


?>