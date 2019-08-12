<?php
require_once ("conexao.php");

$login = $_GET['login'];

$sql = mysqli_query($conn,"SELECT tempo1int, tempo2int, tempo3int FROM usuarios WHERE login='$login'");

if ($sql){
	$row = mysqli_fetch_assoc($sql);
    $pass1 = $row['tempo1int'];
    $pass2 = $row['tempo2int'];
    $pass3 = $row['tempo3int'];
   
    	$t = $pass1 + $pass2 + $pass3;
    	$sql2 = mysqli_query($conn,"UPDATE usuarios SET tempoTotal = '$t' WHERE login='$login'");
    	echo '1';
        mysqli_close($conn);

    
    
} else {
    mysqli_close($conn);
	echo '3';
	
}

?>