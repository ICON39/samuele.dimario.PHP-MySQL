<?php

$hostname = "127.0.0.1:3307";
$user = "root";
$password = "";
$db = "lweb";
$connessione = new mysqli($hostname,$user,$password, $db);

if(mysqli_connect_errno()){
    printf("Errore di connessione: %s\n",mysqli_connect_error($connessione));
}
?>