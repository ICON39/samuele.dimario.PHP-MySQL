<?php
session_start();

session_destroy();
header('Location: http://localhost/ServizioStreaming/php/home.php');
exit();

?>