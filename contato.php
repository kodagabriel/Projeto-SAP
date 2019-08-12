<?php

  ini_set('display_errors', 1);
  error_reporting(E_ALL);
  $from = $_GET["email"];;
  $to = "flavianunesufop@gmail.com";
  $msg = $_GET["msg"];

  $subject = "Contato via site";

  $headers = "De:". $from;

  if (mail($to, $subject, $msg, $headers)) {
    echo "A mensagem de e-mail foi enviada.";
  }
  else {
    echo "NAO";
  }

 

?>