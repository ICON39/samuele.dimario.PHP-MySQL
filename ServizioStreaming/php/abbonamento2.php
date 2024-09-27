<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abbonamento Standard senza Pubblicità</title>
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

    <!-- Sezione dei dettagli dell'abbonamento standard senza pubblicità -->
    <section class="service-details">
        <h2>Abbonamento Standard senza Pubblicità</h2>
        <p>Il piano Standard senza pubblicità offre un'esperienza di streaming senza interruzioni, con accesso completo ai contenuti in alta definizione.</p>
        
        <div class="benefits">
            <div class="benefit-box">
                <h3>Streaming HD</h3>
                <p>Accedi ai contenuti in alta definizione su due dispositivi contemporaneamente.</p>
            </div>

            <div class="benefit-box">
                <h3>Nessuna interruzione pubblicitaria</h3>
                <p>Goditi la visione dei tuoi contenuti preferiti senza interruzioni pubblicitarie.</p>
            </div>

            <div class="benefit-box">
                <h3>Accesso illimitato</h3>
                <p>Accedi senza limitazioni a tutto il nostro catalogo, inclusi contenuti originali ed esclusivi.</p>
                <a href="acquisto.php?price=12.50">Paga ora</a><!-- Passaggio prezzo con url-->
            </div>
        </div>
    </section>

</body>
</html>