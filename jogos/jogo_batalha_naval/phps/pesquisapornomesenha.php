<?php
require_once ("conexao.php");


$nome = $_GET['nome'];

$sql = mysqli_query($conn,"SELECT senha from onlinemode where nome_sala='$nome'");


$row = null;

if ($sql){
	
		$row = mysqli_fetch_assoc($sql);	
	
	$pass1 = $row['senha'];
	echo $pass1;
	   
    mysqli_close($conn);
 
} else {
	echo 2;
}


?>