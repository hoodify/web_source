<?php

  try {


    require("connect_db.php");
                $user_code = $_SESSION['user_code'];

                $record_code = $_POST['record_code'];


                $query2 = "DELETE FROM img_activity WHERE user_activity_code = $record_code AND user_code = $user_code";
                $stmt2 = $conn->prepare($query2);
                $stmt2->execute();
                

                $query = "DELETE FROM user_activity WHERE user_activity_code = $record_code AND user_code = $user_code";
                $stmt = $conn->prepare($query);
                $stmt->execute();
                
                
               
                
                
                echo "success";

                   
                
               


  }

  catch (PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
  }



?>