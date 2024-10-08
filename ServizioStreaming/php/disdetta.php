<?php
session_start();

require_once"connessione.php";

// Verifica se l'utente è loggato
if (!isset($_SESSION['id'])) {
    header("Location: login.php");
    exit();
}else{

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        
        $id_utente = $_SESSION['id'];

        $query = "SELECT * FROM subscription WHERE user_id = '$id_utente'";
        $result1 = mysqli_query($connessione,$query);

        if(mysqli_num_rows($result1) > 0){//utente possiede un abbonamento

            $sql = "DELETE FROM subscription WHERE user_id = '$id_utente'";

            $result2 = mysqli_query($connessione,$sql);
    
            if($result2){
                header('Location: http://localhost/ServizioStreaming/php/home.php');
                exit();
            }else{
                echo" Errore nella disdetta: " . mysqli_error($connessione);
            }
        }else{
            
            header('Location: http://localhost/ServizioStreaming/php/services.php');
            exit();
        }
        
    }
}

?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Disdetta Abbonamento</title>
    <link rel="stylesheet" href="../css/disdetta.css"> <!-- Link al CSS per la disdetta -->
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

    <!-- Sezione per disdire l'abbonamento -->
    <section class="disdetta-section">
    <h2>Disdetta Abbonamento</h2>
    <p>Se desideri disdire il tuo abbonamento, clicca sul pulsante qui sotto:</p>
    <form action="disdetta.php" method="POST">
        <button type="submit" class="btn">Disdici Abbonamento</button>
    </form>
</section>

</body>
</html>