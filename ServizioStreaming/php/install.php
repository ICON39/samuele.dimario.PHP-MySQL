<?php

require_once("connessione.php");

//creazione database
$sql = "CREATE DATABASE servizioStreaming";
if (mysqli_query($connessione, $sql)) {

    echo "Database created successfully";
    $db = "servizioStreaming";
    mysqli_close($connessione);
} else {

    echo "Error creating database: " . mysqli_error($conn);
}

$connessione = mysqli_connect($hostname,$user,$password,$db);


//tabella utenti
$users = "CREATE TABLE users(
    id INT(255) NOT NULL AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    PRIMARY KEY (id)
    )";

//dati di prova per utenti
$newusers = "INSERT INTO users(name,email,password) VALUES  
    ('panamera','paolopanamera@gmail.com','4321'),
    ('gino','gino1@gmail.com','ciao'),
    ('karim','karim@gmail.com','mele')";

//tabella abbonamenti
$subscription = "CREATE TABLE subscription(
    id INT(255) NOT NULL AUTO_INCREMENT,
    user_id INT(255) NOT NULL,
    type_subscription VARCHAR(255) NOT NULL,
    date_start date NOT NULL,
    date_finish date NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (user_id) REFERENCES users(id)
    )";

//crea tabella utenti e popola
mysqli_query($connessione,$users);
mysqli_query($connessione,$newusers);

//non sono presenti dati su abbonamenti dato che verranno inseriti dagli utenti dopo il login
mysqli_query($connessione,$subscription);

mysqli_close($connessione);

header("Location: http://localhost/ServizioStreaming/php/home.php");
exit();
?>