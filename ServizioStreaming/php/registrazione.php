
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
    <title>Registrazione - Servizio Taxi</title>
</head>
<body>
    
    <header>
        <div class="navbar">
            <h1>Servizio Streaming</h1>
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
    <div class="register-container">
        <h1>Registrazione</h1>
        <p>Crea il tuo account</p>
        <form action="register-form.php" method="post">
            <input type="text" name="name" id="name" placeholder="Name" required>
            <input type="email" name="email" id="email" placeholder="Email" required>
            <input type="password" name="password" id="password" placeholder="Password" required>
            <input type="password" name="confirm_password" id="confirm_password" placeholder="Conferma Password" required>
            <button type="submit" name="registerBtn">Accedi</button>
        </form>
        <a href="login.php">Hai gi&aacute; un account? Accedi</a>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Servizio Taxi. Tutti i diritti riservati.</p>
    </footer>
</body>
</html>
