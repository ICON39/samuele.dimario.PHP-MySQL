<?php
session_start();

require_once"index.php"; 

const STANDARD_ADV = 5.50;
const STANDARD = 12.50;
const PREMIUM = 17.50;

// Verifica se l'utente è loggato
if (!isset($_SESSION['id'])) {
    // Se l'utente non è loggato, reindirizza alla pagina di login
    header("Location: login.php");
    exit();
}

// Recupera l'ID dell'utente dalla sessione
$id_utente = $_SESSION['id'];

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $nome = $_POST['nome'];
    $numero_carta = $_POST['numero-carta'];
    $scadenza = $_POST['scadenza'];
    $cvv = $_POST['cvv'];
    $price = $_SESSION['price'];

    
    if( $price == STANDARD_ADV){
        $tipo_abbonamento = "standard-adv";
    }else if($price == STANDARD){
        $tipo_abbonamento = "standard";
    }else{
        $tipo_abbonamento = "premium";
    }

    $data_inizio = date("Y-m-d");
    $data_fine = date("Y-m-d", strtotime("+1 month"));

    $sql = "INSERT INTO subscription (user_id, type_subscription, date_start, date_finish) 
            VALUES ('$id_utente', '$tipo_abbonamento', '$data_inizio', '$data_fine')";

    $result = mysqli_query($connessione,$sql);
    
    if($result){

        header("Location: http://localhost/ServizioStreaming/php/login.php"); //redirect al login
        exit();
        
    }else{
        
        echo "Errore".$sql.mysqli_error($connessione);
    }
}

?>