<?php
require_once ("conexao.php");


$login = $_GET['login'];
$senha = $_GET['senha'];
$senha = md5($senha);

$sql = mysqli_query($conn,"SELECT senha FROM usuarios WHERE login='$login'");

if ($sql){
	$row = mysqli_fetch_assoc($sql);
    $pass = $row['senha'];
    if ($pass == $senha) {
        mysqli_close($conn);
        $res = remove_utf8_bom('1');
    	echo $res;
    	
    } else {
        mysqli_close($conn);
    	echo '2';
    	
    }
    
} else {
    mysqli_close($conn);
	echo '3';
	
}

function remove_utf8_bom($text){
      $str = str_replace("\xEF\xBB\xBF",'',$text); 
        return $str;
    }

?>