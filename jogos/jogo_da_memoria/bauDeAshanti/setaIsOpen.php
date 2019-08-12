<?php
require_once ("conexao.php");


$login = $_GET['login'];

$query= "UPDATE usuarios SET  isOpen = true WHERE login='$login'";


	$result = mysqli_query($conn,$query);



	if ($result){
		mysqli_close($conn);
		echo '1';
	} else {
		mysqli_close($conn);
		echo '2';
		
	}


?>