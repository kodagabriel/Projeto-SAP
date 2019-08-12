<?php
require_once ("conexao.php");


$id = $_GET['id'];
$alt = $_GET['alternativa'];


$alternativa = 'alternativa' . $alt; 
$sql = mysqli_query($conn,"SELECT $alternativa from pergunta where ID = '$id' ");


$row = null;

if ($sql){

		
		$row = mysqli_fetch_assoc($sql);	
		$pass1 = $row[$alternativa];
		echo $pass1;
	   
    mysqli_close($conn);
 
}


?>