<?php
require_once ("conexao.php");


$posi = $_GET['posi'];
$nome = $_GET['nome'];
$sql = mysqli_query($conn,"UPDATE onlinemode SET nome_2 = '$nome' WHERE ID = $posi");



if ($sql){
	echo 1;
 
} else {
	echo 2;
}


?>