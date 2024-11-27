<?php
session_start();

require_once"connessione.php";

//verifica metodo sia post e che il campo login sia stato inviato
if(isset($_POST['registerBtn']) && $_SERVER['REQUEST_METHOD'] == "POST"){

    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];
    

    //verifica esistenza della mail
    $result = mysqli_query($connessione,"SELECT * FROM users WHERE email = '$email'");

    if(mysqli_num_rows($result)==0){
        
        //controllo password uguali
        if($_POST["password"] != $_POST["confirm_password"]){

            echo '<h1>Password non coincidono</h1>'; 
        }else{
        
            //inserimento in database
            $sql = "INSERT INTO users(name,email,password) VALUES ('$name','$email','$password')";
        
            if(mysqli_query($connessione,$sql)){
                //obblighiamo utente a loggare dopo la registrazione
                header("Location: login.php");
                exit();
            }else{
                echo "Errore".$sql.mysqli_error($connessione);
            }
        }
    }else{
        echo '<h1>Email esistente</h1>'; 
    }
}
?>