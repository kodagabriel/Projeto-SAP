<?php
require_once ("conexao.php");
mysqli_set_charset($link, "utf8");

$id = $_GET['id'];
$sql = mysqli_query($conn,"SELECT pergunta from pergunta where ID = '$id' ");


$row = null;

if ($sql){

		
		$row = mysqli_fetch_assoc($sql);	
		$pass1 = $row['pergunta'];
		echo $pass1;
	   
    mysqli_close($conn);
 
}


?>