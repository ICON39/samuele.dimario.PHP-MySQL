<?php
session_start();

require_once"connessione.php";

//verifica metodo sia post e che il campo login sia stato inviato
if(isset($_POST['login']) && $_SERVER["REQUEST_METHOD"] == "POST"){ 

    $email = $_POST['email'];
    $password = $_POST['password'];

    /*verifica che i campi non siano vuoti*/
    if(!$_POST['email'] || !$_POST['password']){
        
        echo '<h1 style="display: flex;justify-content: center;align-items: center;max-width: 1200px;margin: 3rem auto;">Inserire email e password </h1>';
    }else{

        //query per ricerca utente
        $query_utente = "SELECT id,email,password   
        FROM users
        WHERE email = '$email' AND password = '$password'";

        $result = mysqli_query($connessione,$query_utente);


        //verifica esistenza utente
        if(mysqli_num_rows($result) == 1){
            
            $row = mysqli_fetch_assoc($result);

            $_SESSION['id'] = $row['id']; //conosco id utente
            $_SESSION['statoLogin'] = true;
            header('Location: http://localhost/ServizioStreaming/php/home.php');
            exit();

        }else{

            echo '<h1 style="display: flex;justify-content: center;align-items: center;max-width: 1200px;margin: 3rem auto;"> Email o password errati</h1>';
        }
    }
}
?>