<?php
require_once ("conexao.php");


$categoria = $_GET['categoria'];
$sql = mysqli_query($conn,"SELECT ID as c from categoria where nome = '$categoria' ");


$row = null;

if ($sql){

	
		$row = mysqli_fetch_assoc($sql);	
		$pass1 = $row['c'];
		echo $pass1;
		
		
    mysqli_close($conn);
 
}


?>