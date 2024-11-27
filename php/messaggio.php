<?php
session_start();
require_once"connessione.php";

// Verifica se l'utente è loggato
if (!isset($_SESSION['statoLogin'])) {
    header("Location: login.php");
    exit();
}

// Imposta il reindirizzamento
$redirect_url = "profilo.php"; // Modifica l'URL di destinazione a tuo piacimento
$redirect_delay = 3; // Tempo in secondi prima del reindirizzamento

?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avviso</title>
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
            background-color: #f9f9f9;
            color: #333;
            text-align: center;
            padding: 50px;
        }
        .message {
            margin-top: 20%;
            background-color: black;
            color: #fff;
            padding: 20px;
            border-radius: 8px;
            display: inline-block;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="message">
        <h1>Utente in possesso di un abbonamento</h1>
        <p>Profilo Utente <a href="<?php echo $redirect_url; ?>">clicca qui</a>.</p>
    </div>
</body>
</html>
