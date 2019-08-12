<?php
require_once ("conexao.php");


$login = $_GET['login'];

$sql = mysqli_query($conn,"SELECT nivel2 FROM usuarios WHERE login='$login'");

if ($sql){
	$row = mysqli_fetch_assoc($sql);
    $pass = $row['nivel2'];
    if ($pass == true) {
        mysqli_close($conn);
    	echo '1';
    	
    } else {
        mysqli_close($conn);
    	echo '0';
    	
    }
    
} else {
    mysqli_close($conn);
	echo '3';
	
}



?>