
<?php 

session_start();
if(isset($_SESSION['statoLogin'])){
    header('Location: http://localhost/ServizioStreaming/php/home.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/registrazione.css">
    <title>Login</title>
</head>
<body>

    <!-- Header con navigazione -->
    <header>
        <div class="navbar">
            <h1>Servizio Streaming</h1>
            <nav>
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="services.php">Abbonamenti</a></li>
                    <li><a href="home.php#contact">Contatti</a></li>

                    <?php if(isset($_SESSION['statoLogin'])) : ?> <!-- Controllo se utente si è loggato -->

                        <li><a href="logout.php">Logout</a></li>

                    <?php else: ?>

                        <li><a href="registrazione.php">Registrati</a></li>

                    <?php endif; ?>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Contenitore per il login -->
    <div class="register-container">
        <h1>Login</h1>
        <p>Accedi al tuo account per usare il servizio</p>
        
        <!-- Controllo login o no -->

        <form action="login-form.php" method="post">
        <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit" name="login">Accedi</button>
        </form>
        <a href="reset-password.php">Password dimenticata?</a>
        <a href="registrazione.php">Non hai un account? Registrati</a>
    </div>

</body>
</html>