<?php
header("Access-Control-Allow-Origin: *");
$conn = mysqli_connect('localhost','projsap','f2twQxv9') or die ('Erro ao conectar');
$banco = mysqli_select_db($conn,"projsap_batalhanaval") or die ('Banco não encontrado');
mysqli_set_charset($conn, "utf8");
mysqli_query("SET NAMES 'utf8';", $conn);
?>