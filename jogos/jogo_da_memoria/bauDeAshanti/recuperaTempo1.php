<?php
require_once ("conexao.php");


$login = $_GET['login'];

$sql = mysqli_query($conn,"SELECT tempo1 FROM usuarios WHERE login='$login'");

if ($sql){
	$row = mysqli_fetch_assoc($sql);
    $pass1 = $row['tempo1'];
   
    	echo $pass1;    
        mysqli_close($conn);

    
    
} else {
    mysqli_close($conn);
	echo '3';
	
}



?>