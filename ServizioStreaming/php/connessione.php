<?php

require_once("dati-connessione.php");   

$connessione = mysqli_connect($hostname,$user,$password);

if(mysqli_connect_errno()){

    printf("Errore di connessione: %s\n",mysqli_connect_error($connessione));
    exit();
}

?>