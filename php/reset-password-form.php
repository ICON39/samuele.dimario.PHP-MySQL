<?php

session_start();

if(isset($_SESSION['statoLogin'])){
    header("Location: home.php");
    exit();
}

require_once"connessione.php";

//verifica metodo sia post e che il bottone sia stato inviato
if(isset($_POST['reset']) && $_SERVER['REQUEST_METHOD'] == 'POST'){

    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['newPassword'];

    //verifica aggiuntiva se campi vuoti
    if(!$email){

        echo 'Inserire email';
    }else if($password == $confirm_password){//controllo se password coincidono
        
        $sql = "SELECT * FROM users WHERE email='$email'";
        $result = mysqli_query($connessione,$sql);
        if(mysqli_num_rows($result)==1){
            
            $old_password = "UPDATE users SET password='$password' WHERE email='$email'";
            if(mysqli_query($connessione,$old_password)){
                
                header("Location: login.php"); //redirect al login
                exit();
            }else{
                echo "Errore".$sql.mysqli_error($connessione);
            }
        }else{
            echo'email non esiste';
        }
    }else{
        echo'Password non coincidono';
    }
}
?>