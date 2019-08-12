<?php
require_once ("conexao.php");


$login = $_GET['login'];

$sql = mysqli_query($conn,"SELECT nivel1,nivel2,nivel3,isOpen FROM usuarios WHERE login='$login'");

if ($sql){
	$row = mysqli_fetch_assoc($sql);
    $pass1 = $row['nivel1'];
    $pass2 = $row['nivel2'];
    $pass3 = $row['nivel3'];
    $pass4 = $row['isOpen'];
    if ($pass1 && $pass2 && $pass3 & !$pass4) {
        mysqli_close($conn);
    	echo '1';
    	
    } else {
        if ($pass1 && $pass2 && $pass3 & $pass4) {
           mysqli_close($conn);
    	   echo '0';
    } else {
        mysqli_close($conn);
        echo '2';
    	
    }
    }
    
} else {
    mysqli_close($conn);
	echo '3';
	
}



?>