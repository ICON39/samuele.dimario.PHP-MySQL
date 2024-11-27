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
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifica Abbonamento</title>
    <link rel="stylesheet" href="../css/modifica-abbonamento.css">
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

    <div class="container" style="margin-top: 100px;">
        <h2>Modifica il tuo Abbonamento</h2>

        <p><strong>Abbonamento attuale:</strong> <?php echo $abbonamento_corrente; ?></p>
        <!-- Form per la modifica dell'abbonamento -->
        <form method="POST" action="modifica-abbonamento-form.php">
            <label for="abbonamento">Seleziona un nuovo abbonamento:</label>
            <select name="abbonamento" id="abbonamento">
                <option value="STANDARD_ADV" 
                    <?php echo ($abbonamento_corrente === 'STANDARD_ADV') ? 'selected' : ''; ?>>
                    Standard ADV (€<?php echo number_format(STANDARD_ADV, 2); ?>)
                </option>
                <option value="STANDARD" 
                    <?php echo ($abbonamento_corrente === 'STANDARD') ? 'selected' : ''; ?>>
                    Standard (€<?php echo number_format(STANDARD, 2); ?>)
                </option>
                <option value="PREMIUM" 
                    <?php echo ($abbonamento_corrente === 'PREMIUM') ? 'selected' : ''; ?>>
                    Premium (€<?php echo number_format(PREMIUM, 2); ?>)
                </option>
                <option value="DISDETTA" 
                    <?php echo ($abbonamento_corrente === 'DISDETTA') ? 'selected' : ''; ?>>
                    Disdetta 
                </option>
            </select>

            <button type="submit" class="pulsante-salva">Salva Modifiche</button>
        </form>
    </div>
</body>
</html>