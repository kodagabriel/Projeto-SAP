<?php
require_once ("conexao.php");


$login = $_GET['login'];
$tipo = $_GET['tipoChave'];
$tempo = $_GET['tempo'];

$query = "";




if ($tipo != 1 && $tipo!=2 && $tipo!=3){
    mysqli_close($conn);
    echo '-1';

} else {


	if ($tipo == 1) {
    $query= "UPDATE usuarios SET  tempo1 = '$tempo' WHERE login='$login'";
} 

if ($tipo == 2) {
    $query= "UPDATE usuarios SET  tempo2 = '$tempo' WHERE login='$login'";
}

if ($tipo == 3) {
    $query= "UPDATE usuarios SET  tempo3 = '$tempo' WHERE login='$login'";
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