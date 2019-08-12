<?php
require_once ("conexao.php");


$login = $_GET['login'];
$moedas = $_GET['moedas'];

$sql = mysqli_query($conn,"UPDATE usuarios SET moedas = $moedas WHERE login='$login'");

if ($sql){
	
   
    	echo '1';    
        mysqli_close($conn);

    
    
} else {
    mysqli_close($conn);
	echo '3';
	
}



?>