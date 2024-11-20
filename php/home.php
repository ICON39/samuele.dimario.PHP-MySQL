<?php 

session_start();

?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servizio Streaming</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/home.css">
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
                    <li><a href="#contact">Contatti</a></li>

                    <?php if(isset($_SESSION['statoLogin'])) : ?> 

                        <li><a href="logout.php">Logout</a></li>
                        <li><a href="disdetta.php">Disdici Abbonamento</a></li>

                    <?php else: ?>

                        <li><a href="login.php">Login</a></li>
                    
                    <?php endif; ?>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Sezione Hero -->
    <section class="hero" id="home">
        <div>
            <h1>Guarda ciò che ami, sempre e ovunque</h1>
            <p>Affidati al miglior servizio </p>
            <a href="services.php">Abbonati Ora</a>
        </div>
    </section>

    <!-- Sezione Servizi -->
    <section class="section" id="services">
        <h2>I Nostri Abbonamenti</h2>
        <div class="services">
            <a href="services.php" class="service-box">
                <h3>Standard con publicit&aacute;</h3>
            </a>
            <a href="services.php" class="service-box">
                <h3>Standard</h3>
            </a>
            <a href="services.php" class="service-box">
                <h3>Premium</h3>
            </a>
        </div>
    </section>

    <!-- Sezione Contatti -->
    <section class="contact" id="contact">
        <h2>Contattaci</h2>
        <p>Per ricevere assistenza, usa uno dei seguenti contatti:</p>
        <div class="contact-details">
            <div>
                <i class="fas fa-phone-alt"></i>
                <p>Telefono</p>
                <p><strong>+39 123 456 789</strong></p>
            </div>
            <div>
                <i class="fas fa-envelope"></i>
                <p>Email</p>
                <p><strong><a href="mailto:info@servizio.it">info@assistenza.it</a></strong></p>
            </div>
        </div>
    </section>



</body>
</html>
