<?php
require_once ("conexao.php");


$posi = $_GET['posi'];

$sql = mysqli_query($conn,"SELECT ID from onlinemode where nome_2 IS NULL");


$row = null;

if ($sql){
	$count = 0;
	while ($count < $posi) {
		$row = mysqli_fetch_assoc($sql);	
		$count++;
	}
	$pass1 = $row['ID'];
	echo $pass1;
	   
    mysqli_close($conn);
 
} else {
	echo -2;
}


?>