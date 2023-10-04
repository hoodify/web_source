<?php

session_start();


$dbName = "hoodify";
//$conn = new PDO("mysql:host=127.0.0.1;dbname=$dbName", "root", "050638");
 $conn = new PDO("mysql:host=127.0.0.1;dbname=$dbName", "hoodify", "hoodify050638");
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



?>