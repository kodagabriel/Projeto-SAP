<?php
require_once ("conexao.php");


$categoria = $_GET['categoria'];
$sql = mysqli_query($conn,"SELECT count(ID) as c from pergunta where id_categoria = '$categoria' ");


$row = null;

if ($sql){

	
		$row = mysqli_fetch_assoc($sql);	
		$pass1 = $row['c'];
		echo $pass1;
	   
    mysqli_close($conn);
 
} else {
	echo 2;
}


?>