<?php
require_once ("conexao.php");


$posicao = $_GET['posicao'];

$sql = mysqli_query($conn,"SELECT nivel1,nivel2,nivel3 FROM usuarios ORDER BY tempoTotal ASC");

$row = null;

if ($sql){

	for($i = 0; $i < $posicao; $i++){
		$row = mysqli_fetch_assoc($sql);	
	}
	
   
	$pass1 = $row['nivel1'];
  $pass2 = $row['nivel2'];
  $pass3 = $row['nivel3'];


 
  
   if ($pass1 == true && $pass2 == true && $pass3 == true) {

   	echo '1';
   } else {
   	echo '0';
   }
	   
    mysqli_close($conn);

    
    
} else {
    mysqli_close($conn);
	echo '3';
	
}



?>