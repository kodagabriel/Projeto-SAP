<?php
require_once ("conexao.php");


$id = $_GET['id'];

$sql = mysqli_query($conn,"SELECT alternativa_correta from pergunta where ID = '$id' ");


$row = null;

if ($sql){

		
		$row = mysqli_fetch_assoc($sql);	
		$pass1 = $row['alternativa_correta'];
		echo $pass1;
	   
    mysqli_close($conn);
 
}


?>