<?php

session_start();

require_once"connessione.php"; 

const STANDARD_ADV = 5.50;
const STANDARD = 12.50;
const PREMIUM = 17.50;

// Verifica se l'utente è loggato
if (!isset($_SESSION['statoLogin'])) {
    // Se l'utente non è loggato, reindirizza alla pagina di login
    header("Location: login.php");
    exit();
}

$id_utente = $_SESSION['id'];
$query = "SELECT * FROM subscription WHERE user_id = '$id_utente'";
$result = mysqli_query($connessione,$query);
$user = mysqli_fetch_assoc($result);
$abbonamento_corrente = $user['type_subscription']; //abbonamento corrente utente

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $nuovo_abbonamento = $_POST['abbonamento'];

    //verifico che abbonamento scelto non sia una disdetta o che non sia uguale a quello di partenza
    if($nuovo_abbonamento === 'DISDETTA'){
        $update_query = "DELETE FROM subscription WHERE user_id = '$id_utente'";
        $result = mysqli_query($connessione,$update_query);
        if($result){
            header('Location: home.php');
            exit();
        }else{
            echo "Abbonamento non modificato";
        }
    }else if($nuovo_abbonamento != $abbonamento_corrente){ 

        //aggiornamento database
        $update_query = "UPDATE subscription SET type_subscription = '$nuovo_abbonamento' WHERE user_id = '$id_utente'";
        $result = mysqli_query($connessione,$update_query);
        if($result==1){
            header('Location: profilo.php');
            exit();
        }else{
            echo "Abbonamento non modificato";
        }
    }else{
        echo "Selezionare abbonamento diverso dal precedente";
    }
}

?>