<?php
require_once ("conexao.php");



$id = $_GET['id'];
$sql = mysqli_query($conn,"SELECT nome as c from categoria where ID = '$id'");


$row = null;

if ($sql){

		
		$row = mysqli_fetch_assoc($sql);	
		$pass1 = $row['c'];
		echo $pass1;
	   
    mysqli_close($conn);
 
}


?>