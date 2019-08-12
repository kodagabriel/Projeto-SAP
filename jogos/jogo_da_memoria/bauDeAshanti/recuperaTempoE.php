<?php
require_once ("conexao.php");


$login = $_GET['login'];
$tipo = $_GET['tipoChave'];

$query = "";




if ($tipo != 1 && $tipo!=2 && $tipo!=3){
    mysqli_close($conn);
    echo '-1';

} else {


	if ($tipo == 1) {
    $query= "SELECT tempo1 from usuarios WHERE login='$login'";
} 

if ($tipo == 2) {
    $query= "SELECT tempo2 from usuarios WHERE login='$login'";
}

if ($tipo == 3) {
     $query= "SELECT tempo3 from usuarios WHERE login='$login'";
}

	$result = mysqli_query($conn,$query);

	$row = mysqli_fetch_assoc($result);
   
		if ($result){
			
			
			$pass = "teste";
				if ($tipo == 1) {
					$pass = $row['tempo1'];
				} 

				if ($tipo == 2) {
					$pass = $row['tempo2'];
				}

				if ($tipo == 3) {
					 $pass = $row['tempo3'];
				}
				mysqli_close($conn);
				echo $pass;
			} else {
				mysqli_close($conn);
				echo '2';
		}
		
}



?>