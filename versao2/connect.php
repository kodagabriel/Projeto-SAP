<?php
$servername = "localhost";
$username = "projsap";
$password = "f2twQxv9";
$dbname = "projsap_projetosap";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset("utf8");
if ($conn->connect_errno) {
    printf("Connect failed: %s\n", $conn->connect_error);
    exit();
}



?>