<?php
require_once("dati-connessione.php");

$db = "servizioStreaming";

// Connessione al server MySQL (senza specificare il database)
$connessione = mysqli_connect($hostname, $user, $password);

if (!$connessione) {
    die("Errore di connessione: " . mysqli_connect_error());
}

// Creazione del database se non esiste
$sql = "CREATE DATABASE IF NOT EXISTS $db";
if (mysqli_query($connessione, $sql)) {
    echo "Database '$db' creato con successo.<br>";
} else {
    die("Errore nella creazione del database: " . mysqli_error($connessione));
}

// Seleziona il database
mysqli_select_db($connessione, $db);

// Creazione della tabella 'users' se non esiste
$users = "CREATE TABLE IF NOT EXISTS users (
    id INT(255) NOT NULL AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    PRIMARY KEY (id)
)";
if (mysqli_query($connessione, $users)) {
    echo "Tabella 'users' creata con successo.<br>";
} else {
    die("Errore nella creazione della tabella 'users': " . mysqli_error($connessione));
}

// Inserimento di dati di prova nella tabella 'users'
$newusers = "INSERT INTO users (name, email, password) VALUES  
    ('panamera', 'paolopanamera@gmail.com', '4321'),
    ('gino', 'gino1@gmail.com', 'ciao'),
    ('karim', 'karim@gmail.com', 'mele')";
if (mysqli_query($connessione, $newusers)) {
    echo "Dati di prova inseriti nella tabella 'users'.<br>";
} else {
    echo "Errore nell'inserimento dei dati di prova: " . mysqli_error($connessione);
}

// Creazione della tabella 'subscription' se non esiste
$subscription = "CREATE TABLE IF NOT EXISTS subscription (
    id INT(255) NOT NULL AUTO_INCREMENT,
    user_id INT(255) NOT NULL,
    type_subscription VARCHAR(255) NOT NULL,
    date_start DATE NOT NULL,
    date_finish DATE NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (user_id) REFERENCES users(id)
)";
if (mysqli_query($connessione, $subscription)) {
    echo "Tabella 'subscription' creata con successo.<br>";
} else {
    die("Errore nella creazione della tabella 'subscription': " . mysqli_error($connessione));
}

// Aggiornamento di `dati-connessione.php` per includere il nome del database
$configContent = "<?php\n";
$configContent .= "\$hostname = '$hostname';\n";
$configContent .= "\$user = '$user';\n";
$configContent .= "\$password = '$password';\n";
$configContent .= "\$db = '$db';\n";
file_put_contents('dati-connessione.php', $configContent);
echo "File di configurazione aggiornato con il nome del database.<br>";

// Chiusura connessione
mysqli_close($connessione);

// Reindirizzamento alla home (una volta completata l'installazione)
header("Location: home.php");
exit();
?>
