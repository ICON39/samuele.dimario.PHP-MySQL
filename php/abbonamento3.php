<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abbonamento</title>
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

    <!-- Sezione dei dettagli del servizio -->
    <section class="service-details">
        <h2>Dettagli sull'Abbonamento Premium</h2>
        <p>L'abbonamento Premium offre la migliore esperienza di streaming con una qualità eccezionale e funzionalità avanzate.</p>
        
        <div class="benefits">
            <div class="benefit-box">
                <h3>Qualità Ultra HD</h3>
                <p>Guarda film e serie TV in 4K e HDR per immagini nitide e colori brillanti.</p>
            </div>

            <div class="benefit-box">
                <h3>Fino a 4 dispositivi contemporanei</h3>
                <p>Streaming su quattro dispositivi contemporaneamente senza interruzioni.</p>
            </div>

            <div class="benefit-box">
                <h3>Accesso illimitato</h3>
                <p>Accedi a tutto il catalogo senza limiti, inclusi i contenuti esclusivi e originali.</p>
                <a href="acquisto.php?price=17.50">Paga ora</a><!-- Passaggio prezzo con url-->
            </div>
        </div>
    </section>

</body>
</html>