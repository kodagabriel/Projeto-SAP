<?php
require_once ("conexao.php");


$nome = $_GET['nome'];

$sql = mysqli_query($conn,"SELECT nome_sala from onlinemode where nome_sala='$nome'");


$row = null;

if ($sql){
	
		$row = mysqli_fetch_assoc($sql);	
	
	$pass1 = $row['nome_sala'];
	echo $pass1;
	   
    mysqli_close($conn);
 
} else {
	echo 2;
}


?>