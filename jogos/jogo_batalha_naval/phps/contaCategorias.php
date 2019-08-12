<?php
require_once ("conexao.php");



$sql = mysqli_query($conn,"SELECT COUNT(*) as c from categoria");


$row = null;

if ($sql){

		
		$row = mysqli_fetch_assoc($sql);	
		$pass1 = $row['c'];
		echo $pass1;
	   
    mysqli_close($conn);
 
}


?>