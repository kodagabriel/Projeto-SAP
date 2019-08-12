<?php
require_once ("conexao.php");

$sql = mysqli_query($conn,"SELECT * FROM usuarios");

$row = null;

if ($sql){
	
	$pass1 = mysqli_num_rows($sql);
	echo $pass1;    
    mysqli_close($conn);

    
    
} else {
    mysqli_close($conn);
	echo '3';
	
}



?>