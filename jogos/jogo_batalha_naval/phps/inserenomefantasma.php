<?php
require_once ("conexao.php");


$nomesala = $_GET['posi'];
$nome = $_GET['nome'];
$sql = mysqli_query($conn,"UPDATE onlinemode SET nome_2 = '$nome' WHERE nome_sala = '$nomesala'");



if ($sql){
	echo 1;
 
} else {
	echo 2;
}


?>