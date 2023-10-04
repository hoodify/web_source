<?php
session_start();


unset($_SESSION['user_code']);

session_destroy();


?>

 <meta http-equiv='refresh' content='0;url=../hoodify/main.php'>