
<?php
session_start();

if (isset($_SESSION['statoLogin'])) {
    header("Location: login.php");
    exit;
}

?>



<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/reset.css">
    <title>Reset Password</title>
</head>
<body>

    <!-- Header con navigazione -->
    <header>
        <div class="navbar">
            <h1>Servizio Taxi</h1>
            <nav>
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="services.php">Abbonamenti</a></li>
                    <li><a href="home.php#contact">Contatti</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Contenitore per il login -->
    <div class="reset-password-container">
        <h1>Reset Password</h1>
        
        <!-- Controllo login o no -->

        <form action="reset-password-form.php" method="post">
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Nuova password" required>
            <input type="password" name="newPassword" placeholder="Ripeti password" required>
            <button type="submit" name="reset">Applica modifiche</button>
        </form>
        <a href="login.php">Torna al Login</a>
    </div>


</body>
</html>
