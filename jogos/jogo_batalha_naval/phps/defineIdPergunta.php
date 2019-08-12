<?php
require_once ("conexao.php");


$categoria = $_GET['categoria'];
$quant = $_GET['quant'];
$sql = mysqli_query($conn,"SELECT ID as c from pergunta where id_categoria = '$categoria' ");


$row = null;

if ($sql){
	$count = 0;
	while ($count < $quant) {
		$row = mysqli_fetch_assoc($sql);	
		$count++;
	}
	$pass1 = $row['c'];
	echo $pass1;
	   
    mysqli_close($conn);
 
} else {
	echo 2;
}


?>