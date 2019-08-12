<?php
require_once ("conexao.php");

$tempo = $_GET['tempo'];
$tipo = $_GET['fase'];
$login = $_GET['login'];

$query = "";

if ($tipo != 1 && $tipo!=2 && $tipo!=3){
    mysqli_close($conn);
    echo '-1';

} else {


	if ($tipo == 1) {
    $query= "UPDATE usuarios SET tempo1int='$tempo' WHERE login='$login'";
} 

if ($tipo == 2) {
    $query= "UPDATE usuarios SET tempo2int='$tempo' WHERE login='$login'";
}

if ($tipo == 3) {
    $query= "UPDATE usuarios SET tempo3int='$tempo' WHERE login='$login'";
}

	$result = mysqli_query($conn,$query);


		if ($result){
			mysqli_close($conn);
			echo '1';
		} else {
			mysqli_close($conn);
			echo '2';
		}
		
}
?>