<?php
require_once ("conexao.php");

$tipo = $_GET['fase'];
$login = $_GET['login'];

$query = "";

if ($tipo != 1 && $tipo!=2 && $tipo!=3){
    mysqli_close($conn);
    echo '-1';

} else {


	if ($tipo == 1) {
    $query= "SELECT tempo1int FROM usuarios WHERE login='$login'";
} 

if ($tipo == 2) {
    $query= "SELECT tempo2int FROM usuarios WHERE login='$login'";
}

if ($tipo == 3) {
    $query= "SELECT tempo3int FROM usuarios WHERE login='$login'";
}

	$result = mysqli_query($conn,$query);


		if ($result){
			if ($tipo == 1){
				$row = mysqli_fetch_assoc($result);
    			$pass1 = $row['tempo1int'];
   
    			echo $pass1; 
			} else if ( $tipo == 2 ) {
				$row = mysqli_fetch_assoc($result);
    			$pass1 = $row['tempo2int'];
   
    			echo $pass1; 
			} else if ( $tipo == 3 ) {
				$row = mysqli_fetch_assoc($result);
    			$pass1 = $row['tempo3int'];
   
    			echo $pass1; 
			}
			   
			mysqli_close($conn);			
		} else {
			mysqli_close($conn);
			echo '2';
		}
		
}
?>