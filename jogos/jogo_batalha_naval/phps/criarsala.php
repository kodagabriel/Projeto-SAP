<?php
require_once ("conexao.php");


$nome1 = $_GET['nome'];
$nomesala = $_GET['nomesala'];
$senha = $_GET['senha'];
$categoria = $_GET['categoria'];



$result = mysqli_query($conn,"SELECT * FROM onlinemode WHERE nome_sala='$nomesala'");
$dados = mysqli_num_rows($result);

if ( $dados != 0) {
	mysqli_close($conn);
	echo 2;
} else {
	
	$sql = mysqli_query($conn,"SELECT ID FROM categoria WHERE nome='$categoria'");

$row = null;
if ($sql){
		$row = mysqli_fetch_assoc($sql);	
		$pass1 = $row['ID'];
}
$sql = mysqli_query($conn,"INSERT INTO onlinemode(nome_sala,senha,nome_1,categoria) VALUES ('$nomesala','$senha','$nome1',$pass1)");


$row = null;

if ($sql){

	
		echo '1';
	   
    mysqli_close($conn);
 
} else {
	echo 0;
}
}

?>