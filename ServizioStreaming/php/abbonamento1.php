<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abbonamento Standard con Pubblicità</title>
    <link rel="stylesheet" href="../css/abbonamenti.css">
</head>
<body>

    <!-- Header e navigazione -->
    <header>
        <div class="navbar">
            <h1>Servizio di Streaming</h1>
            <nav>
                <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="services.php">Abbonamenti</a></li>
                <li><a href="home.php#contact">Contatti</a></li>
                <li><a href="logout.php">Logout</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Sezione dei dettagli dell'abbonamento standard con pubblicità -->
    <section class="service-details">
        <h2>Abbonamento Standard con Pubblicità</h2>
        <p>Il piano Standard con pubblicità ti permette di goderti contenuti in alta definizione con alcune interruzioni pubblicitarie, a un prezzo più conveniente.</p>
        
        <div class="benefits">
            <div class="benefit-box">
                <h3>Streaming HD</h3>
                <p>Goditi i tuoi film e serie preferite in alta definizione su due dispositivi contemporaneamente.</p>
            </div>

            <div class="benefit-box">
                <h3>Interruzioni pubblicitarie</h3>
                <p>La pubblicità viene mostrata durante la riproduzione, ma senza compromettere l'esperienza visiva.</p>
            </div>

            <div class="benefit-box">
                <h3>Prezzo ridotto</h3>
                <p>Accedi a tutti i contenuti della nostra piattaforma a un prezzo di <strong>5.50€</strong> data la presenza di pubblicità.</p>
                <a href="acquisto.php?price=5.50&type=standardadv">Paga ora</a><!-- Passaggio prezzo con url-->
            </div>
        </div>
    </section>

</body>
</html>