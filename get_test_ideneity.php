<?php

    session_start();

    try {

                  $dbName = "hoodify";


                  $conn = new PDO("mysql:host=127.0.0.1;dbname=${dbName}", "root", "050638");
                  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                  $query = "SELECT * FROM identity";

                  $stmt = $conn->prepare($query);
                  $stmt->execute();
                  $row = $stmt->fetchAll(PDO::FETCH_ASSOC);

                  $jsonResult = json_encode($row);
                  echo $jsonResult;



    }

    catch (PDOException $e) {
                  echo "Connection failed: " . $e->getMessage();
    }


?>
