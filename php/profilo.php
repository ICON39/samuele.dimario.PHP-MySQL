<?php
session_start(); // Avvia la sessione

// Connessione al database (inserisci il tuo file di connessione)
require_once('connessione.php');

// Verifica che l'utente sia autenticato
if (!isset($_SESSION['statoLogin'])) {
    header("Location: login.php");
    exit;
}

$user_id = $_SESSION['id']; //conosco id utente dal login(vedere pagina login-form)

// Recupera i dati dell'utente e del suo abbonamento
$query = "
    SELECT u.name, u.email, s.type_subscription, s.date_start, s.date_finish
    FROM users u 
    LEFT JOIN subscription s ON u.id = s.user_id 
    WHERE u.id = $user_id
";
$result = mysqli_query($connessione, $query);

if (!$result || mysqli_num_rows($result) == 0) {
    echo "Errore: utente non trovato.";
    exit;
}

$user = mysqli_fetch_assoc($result);

// Chiudi la connessione al database
mysqli_close($connessione);
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profilo Utente</title>
    <link rel="stylesheet" href="../css/profilo.css"> <!-- Collegamento al file CSS -->
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

    <div class="profilo-container">
        <h1>Benvenuto, <?php echo $user['name']; ?>!</h1>
        
        <div class="informazioni-personali">
            <h2>Informazioni Personali</h2>
            <p><strong>Nome:</strong> <?php echo $user['name']; ?></p>
            <p><strong>Email:</strong> <?php echo $user['email']; ?></p>
        </div>

        <div class="informazioni-abbonamento">
            <h2>Dettagli Abbonamento</h2>
            <?php if (!empty($user['type_subscription'])): ?>
                <p><strong>Tipo:</strong> <?php echo $user['type_subscription']; ?></p>
                <p><strong>Inizio:</strong> <?php echo date('d/m/Y', strtotime($user['date_start'])); ?></p>
                <p><strong>Scadenza:</strong> <?php echo date('d/m/Y', strtotime($user['date_finish'])); ?></p>
            <?php else: ?>
                <p>Non possiedi alcun abbonamento attivo.</p>
            <?php endif; ?>
        </div>

        <div class="azioni">
            <?php if (!empty($user['type_subscription'])): ?>
                <a href="modifica-abbonamento.php" class="pulsante">Modifica Abbonamento</a>
            <?php else: ?>
            <?php endif; ?>
            <a href="modifica-profilo.php" class="pulsante">Modifica Profilo</a>
            <a href="reset-password.php" class="pulsante">Modifica Password</a>            
        </div>
    </div>
</body>
</html>
