<?php
// Avvio della sessione e inclusione del file per la connessione al database
session_start();
require_once 'connessione.php'; // File per la connessione al database

// Controllo se l'utente è loggato
if (!isset($_SESSION['statoLogin'])) {
    header('Location: login.php');
    exit;
}

?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifica Profilo</title>
    <link rel="stylesheet" href="../css/modifica-profilo.css">
</head>
<body>
<header>
        <div class="navbar">
            <h1>Servizio Streaming</h1>
            <nav>
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="services.php">Abbonamenti</a></li>

                    <?php if(isset($_SESSION['statoLogin'])) : ?> 

                        <li><a href="logout.php">Logout</a></li>
                        <li><a href="profilo.php">Profilo</a></li>

                    <?php else: ?>

                        <li><a href="login.php">Login</a></li>
                    
                    <?php endif; ?>
                </ul>
            </nav>
        </div>
    </header>

<main class="container" style="margin-top: 100px;">
    <h2>Modifica il tuo profilo</h2>

    <form method="POST" action="modifica-profilo-form.php" class="form-modifica">
        <input type="name" name="name" placeholder="Nuovo Nome" required>
        <input type="email" name="email" placeholder="Nuova Email" required>
        <button type="submit" name="reset">Salva modifiche</button>
    </form>
</main>
</body>
</html>
