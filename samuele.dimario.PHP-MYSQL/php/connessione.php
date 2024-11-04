<?php
require_once("dati-connessione.php");

// Verifica se il nome del database è impostato
if (empty($database)) {
    die("Il database non è stato configurato correttamente. Esegui `install.php`.");
}

// Connessione al server MySQL e al database specificato
$connessione = mysqli_connect($hostname, $user, $password, $database);

if (!$connessione) {
    die("Errore di connessione: " . mysqli_connect_error());
} else {
    echo "Connesso al database: " . $database;
}
?>
