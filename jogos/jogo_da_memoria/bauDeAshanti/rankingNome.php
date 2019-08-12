<?php
require_once ("conexao.php");


$posicao = $_GET['posicao'];

$sql = mysqli_query($conn,"SELECT login FROM usuarios ORDER BY tempoTotal");

$row = null;

if ($sql){
	for($i = 0; $i < $posicao; $i++){
		$row = mysqli_fetch_assoc($sql);	
	}
	
    $pass1 = $row['login'];
   
	echo $pass1;    
    mysqli_close($conn);

    
    
} else {
    mysqli_close($conn);
	echo '3';
	
}



?>