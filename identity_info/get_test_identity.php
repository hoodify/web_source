<?php

   
    try {

                require("../connect_db.php");     $query = "SELECT * FROM identity";

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
