<?php
require_once ("conexao.php");


$posi = $_GET['posi'];
$senha = $_GET['senha'];
$sql = mysqli_query($conn,"SELECT senha, ID from onlinemode where nome_2 IS NULL");


$row = null;

if ($sql){
	$count = 0;
	while ($count < $posi) {
		$row = mysqli_fetch_assoc($sql);	
		$count++;
	}
	echo $row['senha'];
		
    mysqli_close($conn);
 
} else {
	echo 2;
}


?>