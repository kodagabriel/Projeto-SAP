<?php
header("Access-Control-Allow-Origin: *");
$conn = mysqli_connect('localhost','projsap','f2twQxv9') or die ('Erro ao conectar');
$banco = mysqli_select_db($conn,"projsap_bauDeAshanti") or die ('Banco não encontrado');
?>