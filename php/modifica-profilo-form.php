<?php
// Avvio della sessione e inclusione del file per la connessione al database
session_start();
require_once 'connessione.php'; // File per la connessione al database

// Controllo se l'utente è loggato
if (!isset($_SESSION['statoLogin'])) {
    header('Location: login.php');
    exit;
}

$user_id = $_SESSION['id'];

// Recupero delle informazioni dell'utente
$query = "SELECT * FROM users WHERE id = '$user_id'";
$result = mysqli_query($connessione, $query);

while($riga = mysqli_fetch_assoc($result)){
    $id_attuale=$riga["id"];
    $nome_attuale=$riga["name"];
    $email_attuale=$riga["email"];
}

// Gestione dell'aggiornamento del profilo
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['name'];
    $email = $_POST['email'];

    if($nome != $nome_attuale && $email != $email_attuale){
        $update_query = "UPDATE users SET name = '$nome', email = '$email' WHERE id = '$user_id'";
        if(mysqli_query($connessione,$update_query)){
            header("Location: profilo.php"); //redirect al login
            exit();
        }else{
            echo "Errore".$sql.mysqli_error($connessione);
        }
    }else{
        echo "Nome o Email Esistenti";
    }

}

// Chiusura della connessione
mysqli_close($connessione);
?>s