<?php
require_once("conexao.php");

$login = $_GET['login'];
$senha = $_GET['senha'];
$senha = md5($senha);

$result = mysqli_query($conn,"SELECT * FROM usuarios WHERE login='$login'");
$dados = mysqli_num_rows($result);
if ( $dados != 0) {
	mysqli_close($conn);
	echo '2';
} else {
	$insere = mysqli_query($conn,"INSERT INTO usuarios (login,senha) VALUES ('$login','$senha')");

		if($insere) {
			mysqli_close($conn);
			echo '1';
		} else {
			mysqli_close($conn);
			echo '0';
		}


}


?>