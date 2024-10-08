<?php

    session_start();
    $price = $_GET['price']; //prezzo preso dall url
    $_SESSION['price'] = $price;
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagamento Abbonamento</title>
    <link rel="stylesheet" href="../css/pagamento.css">
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

    <!-- Sezione pagamento -->
    <section class="service-details">
        <h2>Pagamento dell'Abbonamento</h2>
        <p>Completa il pagamento per attivare il tuo abbonamento.</p>

        <div class="benefits">
            <!-- Riepilogo abbonamento scelto -->
            <div class="benefit-box">
                <h3>Riepilogo Abbonamento</h3>
                <p><strong>Tipo di Abbonamento:</strong> </p>
                <p><strong>Prezzo:</strong><strong> <?php echo $price?> €</strong></p>
            </div>

            <!-- Form per il pagamento -->
            <div class="benefit-box">
                <h3>Dettagli di Pagamento</h3>
                <form action="acquisto-form.php" method="POST">
                    <label for="nome">Nome sulla Carta:</label>
                    <input type="text" id="nome" name="nome" required>

                    <label for="numero-carta">Numero della Carta:</label>
                    <input type="text" id="numero-carta" name="numero-carta" maxlength="16" required>

                    <label for="scadenza">Data di Scadenza:</label>
                    <input type="month" id="scadenza" name="scadenza" required>

                    <label for="cvv">CVV:</label>
                    <input type="text" id="cvv" name="cvv" maxlength="3" required>

                    <input type="submit" value="Effettua Pagamento" class="btn">
                </form>
            </div>
        </div>
    </section>

</body>
</html>