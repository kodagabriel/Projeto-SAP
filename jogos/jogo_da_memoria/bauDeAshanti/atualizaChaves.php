<?php
require_once ("conexao.php");


$login = $_GET['login'];
$tipo = $_GET['tipoChave'];




if ($tipo == 1) {
    $query= "UPDATE usuarios SET  nivel1 = true WHERE login='$login'";
} 

if ($tipo == 2) {
    $query= "UPDATE usuarios SET  nivel2 = true WHERE login='$login'";
}

if ($tipo == 3) {
    $query= "UPDATE usuarios SET  nivel3 = true WHERE login='$login'";
}

if ($tipo != 1 && $tipo!=2 && $tipo!=3){
    mysqli_close($conn);
    echo '-1';

} else {

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