
<?php 
session_start();

if(!isset($_SESSION['statoLogin'])){
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/services.css">
    <title>Piani di abbonamento</title>
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
                    <?php if(isset($_SESSION['statoLogin'])) : ?>

                    <li><a href="logout.php">Logout</a></li>

                    <?php endif; ?>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Sezione Servizi -->
    <section class="services">
        <h2>I Nostri Abbonamenti</h2>
        <div class="service-box">
            <h3>Standard con publicit&aacute; </h3>
            <p>Costo mensile <strong>5,50€</strong> Risoluzione 1080p Numero massimo dispositivi 2</p>
            <a href="abbonamento1.php">Abbonati Ora</a>
        </div>
        <div class="service-box">
            <h3>Standard senza publicit&aacute;</h3>
            <p>Costo mensile <strong>12,50€</strong> Risoluzione 1080p Numero massimo dispositivi 2</p>
            <a href="abbonamento2.php">Abbonati Ora</a>
        </div>
        <div class="service-box">
            <h3>Premium</h3>
            <p>Costo mensile <strong>17,50€</strong> Risoluzione 4K+HDR Numero massimo dispositivi 4</p>
            <a href="abbonamento3.php">Abbonati Ora</a>
        </div>
    </section>

    <!-- Footer -->


</body>
</html>
